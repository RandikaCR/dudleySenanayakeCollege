<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategorories;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request){

        $news = News::select('news.*', 'news_images.image AS primary_image', 'news_categories.news_category')
            ->join('news_categories', 'news.news_category_id', 'news_categories.id')
            ->join('news_images', 'news.id', 'news_images.news_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('news_images.*')
                        ->orderBy('news_images.is_primary', 'DESC');
                }
            ])
            /*->when(!empty($genderCategoryId), function ($query) use ($genderCategoryId) {
                return $query->where('products.gender_category_id', $genderCategoryId);
            })*/
            ->where('news_images.is_primary', 1)
            ->where('news.status', 1)
            ->orderBy('news.id', 'DESC')
            ->paginate(10)
            ->withQueryString();

        return view('frontend.news.index', [
            'all_news' => $news,
        ]);
    }

    public function view(Request $request, $slug){

        $news = News::select('news.*', 'news_images.image AS primary_image', 'news_categories.news_category')
            ->join('news_categories', 'news.news_category_id', 'news_categories.id')
            ->join('news_images', 'news.id', 'news_images.news_id')
            ->with([
                'images' => function ($query) {
                    return $query->select('news_images.*')
                        ->orderBy('news_images.is_primary', 'DESC');
                }
            ])
            ->where('news.slug', $slug)
            ->where('news_images.is_primary', 1)
            ->where('news.status', 1)
            ->first();

        if (empty($news)){
            return redirect()->route('frontend.news.index');
        }


        $latest_news = News::select('news.*', 'news_images.image AS primary_image', 'news_categories.news_category')
            ->join('news_categories', 'news.news_category_id', 'news_categories.id')
            ->join('news_images', 'news.id', 'news_images.news_id')
            ->whereNotIn('news.id', [$news->id])
            ->where('news_images.is_primary', 1)
            ->where('news.status', 1)
            ->take(3)
            ->get();

        $getCategories = NewsCategorories::where('status', 1)->orderBy('display_order', 'ASC')->get();

        $categories = [];
        foreach ($getCategories as $category) {
            $count = News::where('news.news_category_id', $category->id)->where('news.status', 1)->count();
            $category->count = $count;
            $categories[] = $category;
        }

        return view('frontend.news.view', [
            'news' => $news,
            'latest_news' => $latest_news,
            'categories' => $categories,
        ]);
    }
}
