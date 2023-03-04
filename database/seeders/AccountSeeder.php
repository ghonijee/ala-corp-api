<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function create(Company $company)
    {
        Account::unguard();

        $account = Account::create([
            'company_id' => $company->id,
            'name' => "Cash",
            'number' => '1',
            // 'currency_code' => 'IDR',
            'bank_name' => "Cash",
            'enabled' => true,
        ]);

        Account::reguard();
    }
}
