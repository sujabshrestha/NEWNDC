<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'user'
            ],
            [
                'name' => 'accountant'
            ],
            [
                'name' => 'receptionist'
            ],
            [
                'name' => 'engineer'
            ],
        ];

        foreach($roles as $role){
            Role::create($role);
        }

        // $role = Role::create(['name' => 'admin']);

        // $role = Role::create(['name' => 'admin']);
    }
}
