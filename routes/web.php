<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;
use App\Http\Controllers\Frontend\EventsController AS FrontendEvents;
use App\Http\Controllers\Frontend\NewsController AS FrontendNews;
use App\Http\Controllers\Frontend\SportsController AS FrontendSports;


//BACKEND CONTROLLERS
use App\Http\Controllers\Backend\DashboardController AS BackendDashboard;

// N
use App\Http\Controllers\Backend\EventsController AS BackendEvents;
use App\Http\Controllers\Backend\EventCategoriesController AS BackendEventCategories;

// N
use App\Http\Controllers\Backend\NewsController AS BackendNews;
use App\Http\Controllers\Backend\NewsCategoriesController AS BackendNewsCategories;

// S
use App\Http\Controllers\Backend\SportsController AS BackendSports;
use App\Http\Controllers\Backend\SportCategoriesController AS BackendSportCategories;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {

    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');
    Route::get('/about', [Frontend::class, 'about'])->name('frontend.about.about');
    Route::get('/about/history', [Frontend::class, 'schoolHistory'])->name('frontend.about.schoolHistory');
    Route::get('/about/sports', [Frontend::class, 'aboutSports'])->name('frontend.about.aboutSports');
    Route::get('/about/teachers', [Frontend::class, 'aboutTeachers'])->name('frontend.about.aboutTeachers');
    Route::get('/about/prefects', [Frontend::class, 'aboutPrefects'])->name('frontend.about.aboutPrefects');


    Route::get('/contact', [Frontend::class, 'contact'])->name('frontend.contact');
    Route::get('/sports', [Frontend::class, 'sports'])->name('frontend.sports');

    Route::get('/events', [FrontendEvents::class, 'index'])->name('frontend.events.index');
    Route::get('/event/{slug}', [FrontendEvents::class, 'view'])->name('frontend.events.view');

    Route::get('/news', [FrontendNews::class, 'index'])->name('frontend.news.index');
    Route::get('/news/{slug}', [FrontendNews::class, 'view'])->name('frontend.news.view');

    Route::get('/sports/{slug}', [FrontendSports::class, 'index'])->name('frontend.sports.index');
    Route::get('/sport/{slug}', [FrontendSports::class, 'view'])->name('frontend.sports.view');

    Route::get('/set-localization/{lang}', [Frontend::class, 'localization'])->name('frontend.localization');

    Route::post('/app-logout', [Frontend::class, 'appLogout'])->name('frontend.auth.appLogout');


});


//2 - Auth Routes
Route::middleware(['auth', 'verified'])->group(function () {

    //2 - Admin Routes
    Route::group([ 'prefix' =>'admin', 'middleware' => ['isAdmin']], function () {
//        dd('admin');

        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');


        // E
        Route::get('/events', [BackendEvents::class, 'index'])->name('backend.events.index');
        Route::get('/events/create', [BackendEvents::class, 'create'])->name('backend.events.create');
        Route::get('/events/edit/{slug}', [BackendEvents::class, 'edit'])->name('backend.events.edit');
        Route::post('/events/store', [BackendEvents::class, 'store'])->name('backend.events.store');
        Route::post('/events/delete', [BackendEvents::class, 'delete'])->name('backend.events.delete');
        Route::post('/events/slug-generator', [BackendEvents::class, 'slugGenerator'])->name('backend.events.slugGenerator');
        Route::post('/events/upload-image', [BackendEvents::class, 'imageUpload'])->name('backend.events.imageUpload');
        Route::post('/events/set-primary-image', [BackendEvents::class, 'setPrimaryImage'])->name('backend.events.setPrimaryImage');
        Route::post('/events/image-delete', [BackendEvents::class, 'deleteImage'])->name('backend.events.deleteImage');
        Route::post('/events/status', [BackendEvents::class, 'status'])->name('backend.events.status');

        Route::get('/event-categories', [BackendEventCategories::class, 'index'])->name('backend.eventCategories.index');
        Route::post('/event-categories/store', [BackendEventCategories::class, 'store'])->name('backend.eventCategories.store');
        Route::post('/event-categories/get', [BackendEventCategories::class, 'get'])->name('backend.eventCategories.get');
        Route::post('/event-categories/status', [BackendEventCategories::class, 'status'])->name('backend.eventCategories.status');
        Route::post('/event-categories/slug-generator', [BackendEventCategories::class, 'slugGenerator'])->name('backend.eventCategories.slugGenerator');


        // L
       /* Route::get('/localizations', [BackendLocalizations::class, 'index'])->name('backend.localizations.index');
        Route::get('/localizations/create', [BackendLocalizations::class, 'create'])->name('backend.localizations.create');
        Route::get('/localizations/edit/{slug}', [BackendLocalizations::class, 'edit'])->name('backend.localizations.edit');
        Route::post('/localizations/store', [BackendLocalizations::class, 'store'])->name('backend.localizations.store');*/


        // N
        Route::get('/news', [BackendNews::class, 'index'])->name('backend.news.index');
        Route::get('/news/create', [BackendNews::class, 'create'])->name('backend.news.create');
        Route::get('/news/edit/{slug}', [BackendNews::class, 'edit'])->name('backend.news.edit');
        Route::post('/news/store', [BackendNews::class, 'store'])->name('backend.news.store');
        Route::post('/news/delete', [BackendNews::class, 'delete'])->name('backend.news.delete');
        Route::post('/news/slug-generator', [BackendNews::class, 'slugGenerator'])->name('backend.news.slugGenerator');
        Route::post('/news/upload-image', [BackendNews::class, 'imageUpload'])->name('backend.news.imageUpload');
        Route::post('/news/set-primary-image', [BackendNews::class, 'setPrimaryImage'])->name('backend.news.setPrimaryImage');
        Route::post('/news/image-delete', [BackendNews::class, 'deleteImage'])->name('backend.news.deleteImage');
        Route::post('/news/status', [BackendNews::class, 'status'])->name('backend.news.status');

        Route::get('/news-categories', [BackendNewsCategories::class, 'index'])->name('backend.newsCategories.index');
        Route::post('/news-categories/store', [BackendNewsCategories::class, 'store'])->name('backend.newsCategories.store');
        Route::post('/news-categories/get', [BackendNewsCategories::class, 'get'])->name('backend.newsCategories.get');
        Route::post('/news-categories/status', [BackendNewsCategories::class, 'status'])->name('backend.newsCategories.status');
        Route::post('/news-categories/slug-generator', [BackendNewsCategories::class, 'slugGenerator'])->name('backend.newsCategories.slugGenerator');


        // S
        Route::get('/sports', [BackendSports::class, 'index'])->name('backend.sports.index');
        Route::get('/sports/create', [BackendSports::class, 'create'])->name('backend.sports.create');
        Route::get('/sports/edit/{slug}', [BackendSports::class, 'edit'])->name('backend.sports.edit');
        Route::post('/sports/store', [BackendSports::class, 'store'])->name('backend.sports.store');
        Route::post('/sports/delete', [BackendSports::class, 'delete'])->name('backend.sports.delete');
        Route::post('/sports/slug-generator', [BackendSports::class, 'slugGenerator'])->name('backend.sports.slugGenerator');
        Route::post('/sports/upload-image', [BackendSports::class, 'imageUpload'])->name('backend.sports.imageUpload');
        Route::post('/sports/set-primary-image', [BackendSports::class, 'setPrimaryImage'])->name('backend.sports.setPrimaryImage');
        Route::post('/sports/image-delete', [BackendSports::class, 'deleteImage'])->name('backend.sports.deleteImage');
        Route::post('/sports/status', [BackendSports::class, 'status'])->name('backend.sports.status');

        Route::get('/sport-categories', [BackendSportCategories::class, 'index'])->name('backend.sportCategories.index');
        Route::post('/sport-categories/store', [BackendSportCategories::class, 'store'])->name('backend.sportCategories.store');
        Route::post('/sport-categories/get', [BackendSportCategories::class, 'get'])->name('backend.sportCategories.get');
        Route::post('/sport-categories/status', [BackendSportCategories::class, 'status'])->name('backend.sportCategories.status');
        Route::post('/sport-categories/slug-generator', [BackendSportCategories::class, 'slugGenerator'])->name('backend.sportCategories.slugGenerator');


    });


    //3 - Reservations Manager Routes
    Route::group([ 'prefix' =>'reservations', 'middleware' => ['isReservationsManager']], function () {
//        dd('isReservationsManager');
        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');


    });





    /*Route::post('/users/upload-image', [BackendUsers::class, 'imageUpload'])->name('backend.users.imageUpload');
    Route::get('/my-account', [Frontend::class, 'myAccount'])->name('frontend.myAccount');
    Route::get('/my-account/inbox', [Frontend::class, 'myAccountInbox'])->name('frontend.myAccount.myAccountInbox');
    Route::get('/my-account/subscription', [Frontend::class, 'myAccountSubscription'])->name('frontend.myAccount.myAccountSubscription');
    Route::get('/my-account/privacy', [Frontend::class, 'myAccountPrivacy'])->name('frontend.myAccount.myAccountPrivacy');
    Route::get('/my-account/customer-portal', [Frontend::class, 'myAccountCustomerPortal'])->name('frontend.myAccount.myAccountCustomerPortal');
    Route::get('/my-account/subscribe/{slug}', [Frontend::class, 'myAccountSubscribe'])->name('frontend.myAccount.myAccountSubscribe');
    Route::get('/my-account/subscription-success', [Frontend::class, 'myAccountSubscriptionSuccess'])->name('frontend.myAccount.myAccountSubscriptionSuccess');
    Route::get('/my-account/subscription-canceled', [Frontend::class, 'myAccountSubscriptionCanceled'])->name('frontend.myAccount.myAccountSubscriptionCanceled');



    Route::post('/my-account/update', [Frontend::class, 'myAccountUpdate'])->name('frontend.myAccountUpdate');
    Route::post('/my-account/privacy/update', [Frontend::class, 'myAccountPrivacyUpdate'])->name('frontend.myAccountPrivacyUpdate');
    Route::post('/my-account/subscription/update', [Frontend::class, 'myAccountSubscriptionUpdate'])->name('frontend.myAccountSubscriptionUpdate');
    Route::post('/my-account/get-inbox', [Frontend::class, 'myAccountGetMessage'])->name('frontend.myAccount.myAccountGetMessage');*/


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
