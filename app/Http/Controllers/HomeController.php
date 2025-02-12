<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Report;
use App\Models\Company;
use App\Models\Product;
use Illuminate\View\View;
use App\Models\Department;
use App\Models\JobVacancy;
use App\Models\CompanyInfo;
use App\Models\SocialMediaAccount;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function home(): View
    {
        $report = Report::latest()->first();
        $teams = Team::latest()->get();
        $products = Product::latest()->get();
        $companies = Company::latest()->get();

        return view('pages/home', compact('report', 'teams', 'products', 'companies'));
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

    public function redirect(string $platform): RedirectResponse
    {
        $companyInfo = CompanyInfo::first();
        $links = [
            'ios' => $companyInfo->app_store_url ?? '#',
            'android' => $companyInfo->play_store_url ?? '#',
            'web' => $companyInfo->web_url ?? '#',
        ];

        return redirect($links[$platform] ?? $links['web']);
    }
}
