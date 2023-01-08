<?php

namespace Database\Seeders;

use App\Models\Patra;
use Illuminate\Database\Seeder;

class PatraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patras = [
            [
                'title' => 'Rajinama'
            ],
            [
                'title' => 'Bakash_Pattra'
            ],
            [
                'title' => 'Chod_Pattra'
            ],
            [
                'title' => 'Anshbanda'
            ],
            [
                'title' => 'Namsari'
            ],
            [
                'title' => 'AayojanaFirta'
            ],
            [
                'title' => 'DakhilaKharij'
            ],




        ];

        foreach($patras as $patra){
            Patra::create($patra);
        }

    }
}
