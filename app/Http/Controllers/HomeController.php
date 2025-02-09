<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\JobVacancy;
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
        $departments = Department::all();
        $jobVacancies = JobVacancy::all();

        return view('pages/career', compact('departments', 'jobVacancies'));
    }

    public function contact(): View
    {
        return view('pages/contact');
    }
}
