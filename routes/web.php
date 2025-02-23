<?php

use App\Http\Controllers\HomeController;
use App\Models\SocialMediaAccount;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/sustainability', 'sustainability')->name('sustainability');
        Route::get('/career', 'career')->name('career');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/redirect/{platform}', 'redirect')->name('redirect.store');
    });

View::composer('partials.footer', function ($view) {
    $socialMediaAccounts = SocialMediaAccount::all();
    $view->with('socialMediaAccounts', $socialMediaAccounts);
});
