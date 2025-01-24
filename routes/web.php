<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/sustainability', function () {
    return view('sustainability');
});

Route::get('/contact', function () {
    return view('contact');
});

