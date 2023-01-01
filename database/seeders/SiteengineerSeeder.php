<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use User\Models\User;

class SiteengineerSeeder extends Seeder
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
                'name' => 'site engineer 1',
                'email' => 'engineer1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9854456458'
            ],
            [
                'name' => 'site engineer 2',
                'email' => 'engineer2@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9856457858'
            ],
            [
                'name' => 'site engineer 3',
                'email' => 'engineer3@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('testing1234'),
                'phone' => '9854426458'
            ]

        ];


        foreach($array as $item){
            $user = User::create($item);
            $user->assignRole('engineer');
        }
    }
}
