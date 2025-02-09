<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        $report = Report::latest()->first();

        return view('pages/home', compact('report'));
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
