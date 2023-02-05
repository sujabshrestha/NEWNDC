<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use User\Models\User;

class EngineerHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'engineercheif';
        $admin->email = 'engineercheif@gmail.com';
        $admin->password = bcrypt('testing1234');
        $admin->email_verified_at = now();
        $admin->save();

        $admin->assignRole('engineer_head');
    }
}
