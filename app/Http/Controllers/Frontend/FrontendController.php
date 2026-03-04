<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\contactInquiry;
use App\Models\News;
use App\Models\SportCategories;
use App\Models\Sports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function about(Request $request)
    {
        return view('frontend.about.about');
    }

    public function schoolHistory(Request $request)
    {
        return view('frontend.about.school-history');
    }

    public function aboutSports(Request $request)
    {
        return view('frontend.about.sports');
    }

    public function aboutTeachers(Request $request)
    {
        return view('frontend.about.teachers');
    }

    public function aboutPrefects(Request $request)
    {
        return view('frontend.about.prefects');
    }



    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function sports(Request $request)
    {

        $sports = SportCategories::where('status', 1)->orderBy('display_order', 'ASC')->get();
        return view('frontend.sports', [
            'sports' => $sports,
        ]);
    }

    public function academic(Request $request)
    {
        return view('frontend.academic');
    }

    public function nonAcademic(Request $request)
    {
        return view('frontend.non-academic');
    }



    public function contactInquiry(Request $request){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'time' => date('Y-m-d H:i A', time()),
        ];

        $toEmail = env('DEFAULT_TO_ADDRESS');

        $send = Mail::to('work.cralwis@gmail.com')->send(new contactInquiry($data));

        return response()->json(['status' => 'success']);
    }

    public function testMail(Request $request){

        $data = [
            'name' => "Randika De Alwis",
            'email' => "test@test.com",
            'message' => "Test Message",
            'time' => date('Y-m-d H:i A', time()),
        ];

        //$send = Mail::to('work.cralwis@gmail.com')->send(new contactInquiry($data));

        return view('mails.inquiry', ['data' => $data]);
    }
}
