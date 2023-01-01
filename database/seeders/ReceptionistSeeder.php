<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use User\Models\User;

class ReceptionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name' => 'receptionist 1',
                'email' => 'receptionist1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9854456458'
            ],
            [
                'name' => 'receptionist 2',
                'email' => 'receptionist2@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9856457858'
            ],
            [
                'name' => 'receptionist 3',
                'email' => 'receptionist3@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9854426458'
            ]

        ];


        foreach($array as $item){
            $user = User::create($item);
            $user->assignRole('receptionist');
        }
    }
}
