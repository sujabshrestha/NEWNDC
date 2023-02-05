<?php

namespace User\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles= [
            [
                'name' => 'admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'engineer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'receptionist',
                'guard_name' => 'web',
            ],
            [
                'name' => 'paperworker',
                'guard_name' => 'web',
            ],
            [
                'name' => 'engineer_head',
                'guard_name' => 'web',
            ],

        ];
        DB::table('roles')->insert($roles);
    }
}
