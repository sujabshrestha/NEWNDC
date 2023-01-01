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
                'email' => 'admin@gmail.com',
                'phone_no' => '9856698555',
                'password' => bcrypt('testing1234'),
                'status' => 'Active',
                'email_verified_at' => Carbon::now(),
            ],
    
            
        ];
        foreach($users as $item){
            $user = User::create($item);
            $user->assignRole('admin');
        }

        $user2= [
            [
                'name' => 'engineer',
                'email' => 'engineer@gmail.com',
                'phone_no' => '9856685555',
                'password' => bcrypt('testing1234'),
                'status' => 'Active',
                'email_verified_at' => Carbon::now(),
            ],
    
            
        ];
        foreach($user2 as $item){
            $user = User::create($item);
            $user->assignRole('engineer');
        }

    }
}
