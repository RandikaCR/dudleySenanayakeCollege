<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EventCategories;
use Illuminate\Http\Request;

class EventCategoriesController extends Controller
{
    public function index()
    {
        $categories = EventCategories::orderBy('id', 'ASC')->orderBy('display_order', 'ASC')->get();
        return view('backend.event-categories.index',[
            'categories' => $categories
        ]);
    }

    public function get(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;


        if (!empty($id)){
            $get = EventCategories::find($id);
            $status = 'success';

        }else{
            $status = 'error';
        }


        $out = [
            'status' => $status,
            'id' => $id,
            'event_category' => $get->event_category,
            'display_order' => $get->display_order,
            'slug' => $get->slug,
        ];
        return response()->json($out);

    }

    public function store(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        /*$validator = $request->validate([
            'news_category' => ['required', 'string', 'unique:product_gender_categories'],
        ]);*/

        $validator = 1;

        if ($validator){

            if (!empty($id)){
                $save = EventCategories::find($id);
            }
            else{
                $treq = ['screen' => 'event-cateogries', 'id' => ''];
                $uuId = $this->generateUUId($treq);

                $save = New EventCategories();
                $save->uuid = $uuId;
                $save->status = 1;
            }

            $save->slug = $req['slug'];
            $save->event_category = $req['event_category'];
            $save->display_order = !empty($req['display_order']) ? $req['display_order'] : 0;
            $save->save();
            $status = 'success';
            $messageTitle = 'Success';
            $messageText = 'Category saved';
        }else{

            $status = 'error';
            $messageTitle = 'Error!';
            $messageText = 'Category already exist!';
        }



        $out = [
            'status' => $status,
            'message_title' => $messageTitle,
            'message_text' => $messageText,
        ];
        return response()->json($out);

        /*if ($response->successful()) {
            $rdata = $response->json();
            if (!empty($rdata)) {
                return response()->json($rdata);
            }
        } else if ($response->status() == 400) {
            return response()->json($response->json(), 422);
        } else if ($response->status() == 401) {
            return response()->json($response->json(), 401);
        }*/
    }

    public function status(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        $text = '';
        $class = '';

        if (!empty($id)){
            $get = EventCategories::find($id);

            if ($get->status == 1){
                $get->status = 0;
            }else {
                $get->status = 1;
            }
            $get->save();
            $status = 'success';
            $get = EventCategories::find($id);
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

    public function slugGenerator(Request $request){

        $status = 'success';
        $isExist = 0;
        $id = $request->id;
        $slug = $this->generateSeoURL($request->title, 1);

        $getCount = EventCategories::where('slug', $slug)->count();
        if ($getCount > 0){
            $item = EventCategories::where('id', $id)->first();
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
}
