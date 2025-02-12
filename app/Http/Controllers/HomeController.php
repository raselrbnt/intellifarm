<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\JobVacancy;
use App\Models\Report;
use App\Models\SocialMediaAccount;
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
        $socialMediaAccounts = SocialMediaAccount::all();
        
        return view('pages/contact', compact('socialMediaAccounts'));
    }
}
