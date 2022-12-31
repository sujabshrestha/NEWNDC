<?php

namespace User\database\seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use User\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            [
                'name' => 'admin',
                'email' => 'admin@test.com',
                'phone_no' => '9856698555',
                'password' => bcrypt('123456789'),
                'status' => 'Active',
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'ankit',
                'email' => 'ankit@test.com',
                'phone_no' => '9898989858',
                'password' => bcrypt('123456789'),
                'status' => 'Active',
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'sarad',
                'email' => 'sarad@test.com',
                'phone_no' => '9898989874' ,
                'password' => bcrypt('123456789'),
                'status' => 'Active',
                'email_verified_at' => Carbon::now(),
            ],
        ];
        foreach($users as $item){
            $user = User::create($item);
            $user->assignRole('admin');
        }
    }
}
