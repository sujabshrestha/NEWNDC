<?php

namespace Database\Seeders;

use CMS\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
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
                'title' => 'branch1',
                'location' => 'gwarko',
                'bank_id' => 3,
            ],
            [
                'title' => 'branch2',
                'location' => 'lubhu',
                'bank_id' => 5,

            ],

        ];


        foreach($array as $item){
            $user = Branch::create($item);

        }

    }
}
