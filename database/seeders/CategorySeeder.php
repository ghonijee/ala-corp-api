<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function create(Company $company)
    {
        Category::unguard();
        $rows = [
            [
                'company_id' => $company->id,
                'name' => "Transfer",
                'type' => 'other',
                'color' => '#3c3f72',
                'enabled' => '1',
            ],
            [
                'company_id' => $company->id,
                'name' => "Deposit",
                'type' => 'income',
                'color' => '#efad32',
                'enabled' => '1',
            ],
            [
                'company_id' => $company->id,
                'name' => "Sales",
                'type' => 'income',
                'color' => '#6da252',
                'enabled' => '1',
            ],
            [
                'company_id' => $company->id,
                'name' => "Other",
                'type' => 'expense',
                'color' => '#e5e5e5',
                'enabled' => '1',
            ],
            [
                'company_id' => $company->id,
                'name' => "Umum",
                'type' => 'item',
                'color' => '#328aef',
                'enabled' => '1',
            ],
        ];
        Category::insert($rows);

        Category::reguard();
    }
}
