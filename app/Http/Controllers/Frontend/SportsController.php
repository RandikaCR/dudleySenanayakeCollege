<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SportCategories;
use App\Models\Sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index(Request $request, $slug){

        $sportCategory = SportCategories::where('slug', $slug)->where('status', 1)->first();
        if (empty($sportCategory)) {
            return redirect()->route('frontend.sports');
        }

        $sportCategoryId = $sportCategory->id;

        $sports = Sports::select('sports.*', 'sport_images.image AS primary_image', 'sport_categories.sport_category')
            ->join('sport_categories', 'sports.sport_category_id', 'sport_categories.id')
            ->join('sport_images', 'sports.id', 'sport_images.sport_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('sport_images.*')
                        ->orderBy('sport_images.is_primary', 'DESC');
                }
            ])
            /*->when(!empty($genderCategoryId), function ($query) use ($genderCategoryId) {
                return $query->where('products.gender_category_id', $genderCategoryId);
            })*/
            ->where('sports.sport_category_id', $sportCategoryId)
            ->where('sport_images.is_primary', 1)
            ->where('sports.status', 1)
            ->orderBy('sports.id', 'DESC')
            ->paginate(10)
            ->withQueryString();

        return view('frontend.sports.index', [
            'sport_category' => $sportCategory,
            'sports' => $sports,
        ]);
    }

    public function view(Request $request, $slug){

        $sport = Sports::select('sports.*', 'sport_images.image AS primary_image', 'sport_categories.sport_category')
            ->join('sport_categories', 'sports.sport_category_id', 'sport_categories.id')
            ->join('sport_images', 'sports.id', 'sport_images.sport_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('sport_images.*')
                        ->orderBy('sport_images.is_primary', 'DESC');
                }
            ])
            ->where('sports.slug', $slug)
            ->where('sport_images.is_primary', 1)
            ->where('sports.status', 1)
            ->first();

        if (empty($sport)){
            return redirect()->route('frontend.sports.index', $slug);
        }


        $latest_sports = Sports::select('sports.*', 'sport_images.image AS primary_image', 'sport_categories.sport_category')
            ->join('sport_categories', 'sports.sport_category_id', 'sport_categories.id')
            ->join('sport_images', 'sports.id', 'sport_images.sport_id')
            ->whereNotIn('sports.id', [$sport->id])
            ->where('sport_images.is_primary', 1)
            ->where('sports.status', 1)
            ->take(3)
            ->get();

        $getCategories = SportCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();

        $categories = [];
        foreach ($getCategories as $category) {
            $count = Sports::where('sports.sport_category_id', $category->id)->where('sports.status', 1)->count();
            $category->count = $count;
            $categories[] = $category;
        }

        return view('frontend.sports.view', [
            'sport' => $sport,
            'latest_sports' => $latest_sports,
            'categories' => $categories,
        ]);
    }
}
