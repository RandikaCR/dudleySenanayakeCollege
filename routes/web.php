<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {

    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');

    /*Route::get('/set-localization/{lang}', [Frontend::class, 'localization'])->name('frontend.localization');


    Route::get('/sign-in', [FrontendAuth::class, 'signIn'])->name('frontend.auth.signIn');
    Route::post('/sign-in/create', [FrontendAuth::class, 'login'])->name('frontend.auth.login');
    Route::post('/sign-up/create', [FrontendAuth::class, 'store'])->name('frontend.auth.store');
    Route::post('/app-logout', [FrontendAuth::class, 'appLogout'])->name('frontend.auth.appLogout');*/


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
