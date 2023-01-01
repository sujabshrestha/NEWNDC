<?php

namespace Database\Seeders;

use User\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('testing1234');
        $admin->email_verified_at = now();
        $admin->save();

        $admin->assignRole('admin');
    }
}
