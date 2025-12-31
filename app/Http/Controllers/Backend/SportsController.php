<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SportCategories;
use App\Models\SportImages;
use App\Models\Sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index(Request $request){

        $products = [];

        $keyword = !empty($request->keyword) ? $request->keyword : null;
        $status = isset($request->status) ? $request->status : 'all';

        $sports = Sports::select(
            'sports.*',
            'sport_images.image AS primary_image',
        )
            ->leftJoin('sport_images', 'sports.id', 'sport_images.sport_id')
            ->when(!empty($keyword), function ($query) use ($keyword) {
                return $query->where('sports.en_title', 'like', "%$keyword%")
                    ->orWhere('sports.si_title', 'like', "%$keyword%")
                    ->orWhere('sports.ta_title', 'like', "%$keyword%")
                    ->orWhere('sports.en_content', 'like', "%$keyword%")
                    ->orWhere('sports.si_content', 'like', "%$keyword%")
                    ->orWhere('sports.ta_content', 'like', "%$keyword%");
            })
            //->where('sport_images.is_primary', 1)
            ->orderBy('sports.id', 'DESC')
            ->groupBy('sports.id')
            ->paginate(20)
            ->withQueryString();

        return view('backend.sports.index', [
            'sports' => $sports,
            'keyword' => $keyword,
        ]);

    }

    public function create(Request $request){

        $tempId = $this->getTempSportId($request);
        $categories = SportCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();
        $images = SportImages::where('sport_id', $tempId)->get();

        return view('backend.sports.create',[
            'temp_id' => $tempId,
            'categories' => $categories,
            'images' => $images,
        ]);
    }

    public function edit(Request $request, $uuId){
        $this->clearTempSportId($request);

        $sport = Sports::where('uuid', $uuId)->first();
        $tempId = $sport->id;
        $categories = SportCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();
        $images = SportImages::where('sport_id', $tempId)->get();

        return view('backend.sports.create',[
            'temp_id' => $tempId,
            'sport' => $sport,
            'categories' => $categories,
            'images' => $images,
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'slug' => 'required',
            'en_title' => 'required',
        ]);

        if(!empty($request->id)){
            $save = Sports::find($request->id);

            $msg = 'Sport has been Updated Successfully!';
        }
        else{

            $req = ['screen' => 'sports', 'id' => ''];
            $uuId = $this->generateUUId($req);

            $save = new Sports();
            $save->uuid = $uuId;
            $save->status = 1;

            $msg = 'Sport has been Created Successfully!';
        }

        $save->slug = !empty($request->slug) ? $request->slug : null;
        $save->sport_category_id = !empty($request->sport_category_id) ? $request->sport_category_id : 0;
        $save->en_title = !empty($request->en_title) ? $request->en_title : null;
        $save->si_title = !empty($request->si_title) ? $request->si_title : null;
        $save->ta_title = !empty($request->ta_title) ? $request->ta_title : null;
        $save->en_content = !empty($request->en_content) ? $request->en_content : null;
        $save->si_content = !empty($request->si_content) ? $request->si_content : null;
        $save->ta_content = !empty($request->ta_content) ? $request->ta_content : null;
        $save->save();

        if (!empty(session('temp_sport_id'))){
            $sessionId = session('temp_sport_id');
            $this->clearTempSportId($request);
            $images = SportImages::where('sport_id', $sessionId)->get();

            $primaryImageId = 0;
            foreach ($images as $img){

                if (!empty($img->is_primary)){
                    $primaryImageId = $img->id;
                }

                $image = SportImages::find($img->id);
                $image->sport_id = $save->id;
                $image->save();
            }

            //Set Primary Image if not has been set
            if (empty($primaryImageId)){
                $image = SportImages::where('sport_id', $sessionId)->first();
                $image = SportImages::find($img->id);
                $image->is_primary = 1;
                $image->save();
            }
        }

        session()->flash('success', $msg);
        return redirect( route('backend.sports.index') );

    }


    public function delete(Request $request){

        $sport = Sports::find($request->id);
        $sport->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }


    public function getTempSportId(Request $request){
        $rand = rand(10000000,99999999) . time();
        $tempId = !empty(session('temp_sport_id')) ? session('temp_sport_id') : null;
        if (empty($tempId)){
            $request->session()->put('temp_sport_id', $rand);
            $request->session()->save();

            $tempId = $rand;
        }

        return $tempId;
    }

    public function clearTempSportId(Request $request){

        $tempId = !empty(session('temp_sport_id')) ? session('temp_sport_id') : null;
        if (!empty($tempId)){
            $request->session()->forget('temp_sport_id');
            $request->session()->save();
        }

        return true;
    }

    public function imageUpload(Request $request){

        $status = 'error';
        $file_name = '';

        if($request->ajax()){

            $img = $this->commonImageUpload($request, 'uploads/sports');
            $file_name = $img['file_name'];
            $status = $img['status'];
            $isPrimary = 0;

            $imgId = 0;
            if (!empty($file_name)){
                $img = new SportImages();
                $img->sport_id = $request->id;
                $img->image = $file_name;
                $img->is_primary = 0;
                $img->status = 1;
                $img->save();

                $imgId = $img->id;
                $isPrimary = $img->is_primary;
            }

            return response()->json([
                'status' =>  $status,
                'filename' =>  $file_name,
                'id' =>  $imgId,
                'is_primary' =>  $isPrimary,
            ]);

        }
    }



    public function slugGenerator(Request $request){

        $status = 'success';
        $isExist = 0;
        $id = $request->id;
        $slug = $this->generateSeoURL($request->title);

        $getCount = Sports::where('slug', $slug)->count();
        if ($getCount > 0){
            $item = Sports::where('id', $id)->first();
            if (!empty($item)){
                if ($item->slug != $slug){
                    $isExist = 1;
                }
            }else{
                $isExist = 1;
            }
        }

        return response()->json([
            'status' =>  $status,
            'is_exist' =>  $isExist,
            'slug' =>  $slug,
        ]);
    }


    public function deleteImage(Request $request){

        $img = SportImages::find($request->id);
        $img->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }

    public function setPrimaryImage(Request $request){

        $img = SportImages::find($request->id);

        $images = SportImages::where('sport_id', $img->sport_id)->get();
        if (!empty($images)){
            foreach ($images as $image){
                $i = SportImages::find($image->id);
                $i->is_primary = 0;
                $i->save();
            }
        }

        $img->is_primary = 1;
        $img->save();

        $images = [];
        $getImages = SportImages::where('sport_id', $img->sport_id)->get();
        foreach ($getImages as $image){

            $isPrimary = !empty($image->is_primary) ? 1 : 0;

            $images[] = [
                'filename' =>  $image->image,
                'id' =>  $image->id,
                'is_primary' =>  $isPrimary,
            ];
        }

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
            'images' =>  $images,
        ]);
    }

    public function status(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        $text = '';
        $class = '';

        if (!empty($id)){
            $get = Sports::find($id);

            if ($get->status == 1){
                $get->status = 0;
            }else {
                $get->status = 1;
            }
            $get->save();
            $status = 'success';
            $get = Sports::find($id);
            $getStatus = $this->categoryStatus($get->status);
            $text = $getStatus->text;
            $class = $getStatus->class;

        }else{
            $status = 'error';
        }


        $out = [
            'status' => $status,
            'text' => $text,
            'class' => $class,
        ];
        return response()->json($out);

    }
}
