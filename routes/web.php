<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/sustainability', 'sustainability')->name('sustainability');
        Route::get('/career', 'career')->name('career');
        Route::get('/contact', 'contact')->name('contact');
    });
