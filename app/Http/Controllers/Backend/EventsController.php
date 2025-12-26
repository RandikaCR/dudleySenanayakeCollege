<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EventCategories;
use App\Models\EventImages;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request){

        $products = [];

        $keyword = !empty($request->keyword) ? $request->keyword : null;
        $status = isset($request->status) ? $request->status : 'all';

        $events = Events::select(
            'events.*',
            'event_images.image AS primary_image',
        )
            ->leftJoin('event_images', 'events.id', 'event_images.event_id')
            ->when(!empty($keyword), function ($query) use ($keyword) {
                return $query->where('events.en_title', 'like', "%$keyword%")
                    ->orWhere('events.si_title', 'like', "%$keyword%")
                    ->orWhere('events.ta_title', 'like', "%$keyword%")
                    ->orWhere('events.en_content', 'like', "%$keyword%")
                    ->orWhere('events.si_content', 'like', "%$keyword%")
                    ->orWhere('events.ta_content', 'like', "%$keyword%");
            })
            //->where('event_images.is_primary', 1)
            ->orderBy('events.id', 'DESC')
            ->groupBy('events.id')
            ->paginate(20)
            ->withQueryString();


        return view('backend.events.index', [
            'events' => $events,
            'keyword' => $keyword,
        ]);

    }

    public function create(Request $request){

        $tempId = $this->getTempEventId($request);
        $categories = EventCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();
        $images = EventImages::where('event_id', $tempId)->get();

        return view('backend.events.create',[
            'temp_id' => $tempId,
            'categories' => $categories,
            'images' => $images,
        ]);
    }

    public function edit(Request $request, $uuId){
        $this->clearTempEventId($request);

        $event = Events::where('uuid', $uuId)->first();
        $tempId = $event->id;
        $categories = EventCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();
        $images = EventImages::where('event_id', $tempId)->get();

        return view('backend.events.create',[
            'temp_id' => $tempId,
            'event' => $event,
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
            $save = Events::find($request->id);

            $msg = 'Event has been Updated Successfully!';
        }
        else{

            $req = ['screen' => 'events', 'id' => ''];
            $uuId = $this->generateUUId($req);

            $save = new Events();
            $save->uuid = $uuId;
            $save->status = 1;

            $msg = 'Event has been Created Successfully!';
        }

        $save->slug = !empty($request->slug) ? $request->slug : null;
        $save->event_category_id = !empty($request->event_category_id) ? $request->event_category_id : 0;
        $save->en_title = !empty($request->en_title) ? $request->en_title : null;
        $save->si_title = !empty($request->si_title) ? $request->si_title : null;
        $save->ta_title = !empty($request->ta_title) ? $request->ta_title : null;
        $save->en_content = !empty($request->en_content) ? $request->en_content : null;
        $save->si_content = !empty($request->si_content) ? $request->si_content : null;
        $save->ta_content = !empty($request->ta_content) ? $request->ta_content : null;
        $save->save();

        if (!empty(session('temp_event_id'))){
            $sessionId = session('temp_event_id');
            $this->clearTempEventId($request);
            $images = EventImages::where('event_id', $sessionId)->get();

            $primaryImageId = 0;
            foreach ($images as $img){

                if (!empty($img->is_primary)){
                    $primaryImageId = $img->id;
                }

                $image = EventImages::find($img->id);
                $image->event_id = $save->id;
                $image->save();
            }

            //Set Primary Image if not has been set
            if (empty($primaryImageId)){
                $image = EventImages::where('event_id', $sessionId)->first();
                $image = EventImages::find($img->id);
                $image->is_primary = 1;
                $image->save();
            }
        }

        session()->flash('success', $msg);
        return redirect( route('backend.events.index') );

    }


    public function delete(Request $request){

        $event = Events::find($request->id);
        $event->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }


    public function getTempEventId(Request $request){
        $rand = rand(10000000,99999999) . time();
        $tempId = !empty(session('temp_event_id')) ? session('temp_event_id') : null;
        if (empty($tempId)){
            $request->session()->put('temp_event_id', $rand);
            $request->session()->save();

            $tempId = $rand;
        }

        return $tempId;
    }

    public function clearTempEventId(Request $request){

        $tempId = !empty(session('temp_event_id')) ? session('temp_event_id') : null;
        if (!empty($tempId)){
            $request->session()->forget('temp_event_id');
            $request->session()->save();
        }

        return true;
    }

    public function imageUpload(Request $request){

        $status = 'error';
        $file_name = '';

        if($request->ajax()){

            $img = $this->commonImageUpload($request, 'uploads/events');
            $file_name = $img['file_name'];
            $status = $img['status'];
            $isPrimary = 0;

            $imgId = 0;
            if (!empty($file_name)){
                $img = new EventImages();
                $img->event_id = $request->id;
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

        $getCount = Events::where('slug', $slug)->count();
        if ($getCount > 0){
            $item = Events::where('id', $id)->first();
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

        $img = EventImages::find($request->id);
        $img->delete();

        return response()->json([
            'status' => 'success',
            'id' =>  $request->id,
        ]);
    }

    public function setPrimaryImage(Request $request){

        $img = EventImages::find($request->id);

        $images = EventImages::where('event_id', $img->event_id)->get();
        if (!empty($images)){
            foreach ($images as $image){
                $i = EventImages::find($image->id);
                $i->is_primary = 0;
                $i->save();
            }
        }

        $img->is_primary = 1;
        $img->save();

        $images = [];
        $getImages = EventImages::where('event_id', $img->event_id)->get();
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
            $get = Events::find($id);

            if ($get->status == 1){
                $get->status = 0;
            }else {
                $get->status = 1;
            }
            $get->save();
            $status = 'success';
            $get = Events::find($id);
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
