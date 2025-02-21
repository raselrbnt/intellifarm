<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::insert([
            ['name' => 'Company 1', 'logo' => 'assets/company1.png'],
            ['name' => 'Company 2', 'logo' => 'assets/company2.png'],
            ['name' => 'Company 3', 'logo' => 'assets/company3.png'],
            ['name' => 'Company 4', 'logo' => 'assets/company4.png'],
            ['name' => 'Company 5', 'logo' => 'assets/company5.png'],
        ]);
    }
}
