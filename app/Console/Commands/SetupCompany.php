<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Company;
use Database\Seeders\AccountSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Console\Command;

class SetupCompany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:company
                            {--name=MyCompany : Company Name}
                            {--email=support@mycompany.com : Company Email}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup initial for Company';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Seeder initial data for company");
        $name  = $this->option('name');
        $email  = $this->option('email');
        $company = Company::firstOrCreate([
            "email" => $email,
        ], [
            "name" => $name,
            "email" => $email,
        ]);
        // Create Account Seeder
        AccountSeeder::create($company);
        // Create Category Seeder
        CategorySeeder::create($company);

        $this->newLine(1);
        $this->info("Success");
        $this->line("=================================");
        $this->info("Name : $name");
        $this->info("Email : $email");
        $this->line("=================================");
        return Command::SUCCESS;
    }
}
