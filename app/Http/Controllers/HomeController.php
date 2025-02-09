<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('pages/home');
    }

    public function sustainability(): View
    {
        return view('pages/sustainability');
    }

    public function career(): View
    {
        return view('pages/career');
    }

    public function contact(): View
    {
        return view('pages/contact');
    }
}
