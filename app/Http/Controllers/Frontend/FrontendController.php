<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Sports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $latestNews = News::select(
            'news.*',
            'news_images.image AS primary_image',
        )->leftJoin('news_images', 'news.id', 'news_images.news_id')
            ->where('news.status', 1)
            ->orderBy('id', 'DESC')
            ->take(3)
            ->get();

        return view('frontend.index', [
            'latest_news' => $latestNews,
        ]);
    }

    public function appLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $out = ['status' => 'success'];
        return response()->json($out);
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function sports(Request $request)
    {

        $sports = Sports::where('status', 1)->orderBy('display_order', 'ASC')->get();
        return view('frontend.sports', [
            'sports' => $sports,
        ]);
    }
}
