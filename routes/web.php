<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages/home')->name('home');
Route::view('/career', 'pages/career')->name('career');
Route::view('/sustainability', 'pages/sustainability')->name('sustainability');
Route::view('/contact', 'pages/contact')->name('contact');
