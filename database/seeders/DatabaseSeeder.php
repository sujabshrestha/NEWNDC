<?php

namespace Database\Seeders;

use CMS\database\seeds\BankSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(RoleSeeder::class);
        // $this->call(AdminSeeder::class);
        // $this->call(BankSeeder::class);
        // $this->call(BranchSeeder::class);
        // $this->call(SiteengineerSeeder::class);
        $this->call(ReceptionistSeeder::class);
    }
}
