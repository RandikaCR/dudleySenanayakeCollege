<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EventCategories;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request){

        $events = Events::select('events.*', 'event_images.image AS primary_image', 'event_categories.event_category')
            ->join('event_categories', 'events.event_category_id', 'event_categories.id')
            ->join('event_images', 'events.id', 'event_images.event_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('event_images.*')
                        ->orderBy('event_images.is_primary', 'DESC');
                }
            ])
            /*->when(!empty($genderCategoryId), function ($query) use ($genderCategoryId) {
                return $query->where('products.gender_category_id', $genderCategoryId);
            })*/
            ->where('event_images.is_primary', 1)
            ->where('events.status', 1)
            ->orderBy('events.id', 'DESC')
            ->paginate(10)
            ->withQueryString();

        return view('frontend.events.index', [
            'events' => $events,
        ]);
    }

    public function view(Request $request, $slug){

        $event = Events::select('events.*', 'event_images.image AS primary_image', 'event_categories.event_category')
            ->join('event_categories', 'events.event_category_id', 'event_categories.id')
            ->join('event_images', 'events.id', 'event_images.event_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('event_images.*')
                        ->orderBy('event_images.is_primary', 'DESC');
                }
            ])
            ->where('events.slug', $slug)
            ->where('event_images.is_primary', 1)
            ->where('events.status', 1)
            ->first();

        if (empty($event)){
            return redirect()->route('frontend.events.index');
        }


        $latest_events = Events::select('events.*', 'event_images.image AS primary_image', 'event_categories.event_category')
            ->join('event_categories', 'events.event_category_id', 'event_categories.id')
            ->join('event_images', 'events.id', 'event_images.event_id')
            ->whereNotIn('events.id', [$event->id])
            ->where('event_images.is_primary', 1)
            ->where('events.status', 1)
            ->take(3)
            ->get();

        $getCategories = EventCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();

        $categories = [];
        foreach ($getCategories as $category) {
            $count = Events::where('events.event_category_id', $category->id)->where('events.status', 1)->count();
            $category->count = $count;
            $categories[] = $category;
        }

        return view('frontend.events.view', [
            'event' => $event,
            'latest_events' => $latest_events,
            'categories' => $categories,
        ]);
    }
}
