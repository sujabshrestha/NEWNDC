<?php

namespace CMS\database\seeds;

use CMS\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bankArray = [
            [
                "name" => "Nepal Bank Ltd.",
                'swift_code' => "NEBLNPKA",
                'link' => "https://www.nepalbank.com.np/",
            ],
            [
                "name" => "Agriculture Development Bank Ltd.",
                'swift_code' => "ADBLNPKA",
                'link' => "https://www.adbl.gov.np/",
            ],
            [
                "name" => "Nabil Bank Ltd.",
                'swift_code' => "MBNLNPKA",
                'link' => "https://www.nabilbank.com/",
            ],
            [
                "name" => "Nepal Investment Bank Ltd.",
                'swift_code' => "NIBLNPKT",
                'link' => "https://www.nibl.com.np/",
            ],
            [
                "name" => "Standard Chartered Bank Nepal Ltd",
                'swift_code' => "SCBLNPKA",
                'link' => "https://www.sc.com/np/",
            ],
            [
                "name" => "Himalayan Bank Ltd.",
                'swift_code' => "HIMANPKA",
                'link' => "https://www.himalayanbank.com/",
            ],
            [
                "name" => "Nepal SBI Bank Ltd.",
                'swift_code' => "NSBINPKA",
                'link' => "https://nsbl.statebank/home",
            ],
            [
                "name" => "Nepal Bangaladesh Bank Ltd.",
                'swift_code' => "NSBINPKA",
                'link' => "https://www.nbbl.com.np/",
            ],
            [
                "name" => "Everest Bank Ltd.",
                'swift_code' => "EVBLNPKA",
                'link' => "https://everestbankltd.com/",
            ],
            [
                "name" => "Kumari Bank Ltd.",
                'swift_code' => "KMBLNPKA",
                'link' => "https://www.kumaribank.com/",
            ],
            [
                "name" => "Century Commercial Bank Ltd.",
                'swift_code' => "CCBNNPKA",
                'link' => "https://www.centurybank.com.np/",
            ],
            [
                "name" => "Sanima Bank Ltd.",
                'swift_code' => "SNMANPKA",
                'link' => "https://www.sanimabank.com/",
            ],
            [
                "name" => "Sunrise Bank Ltd.",
                'swift_code' => "SRBLNPKA",
                'link' => "https://www.sunrisebank.com.np/",
            ],
            [
                "name" => "Prime Commercial Bank Ltd.",
                'swift_code' => "PCBLNPKA",
                'link' => "https://www.primebank.com.np/",
            ],
            [
                "name" => "Citizens Bank International Ltd.",
                'swift_code' => "CTZNNPKA",
                'link' => "https://www.ctznbank.com/",
            ],
            [
                "name" => "Laxmi Bank Ltd.",
                'swift_code' => "LXBLNPKA",
                'link' => "https://www.laxmibank.com/",
            ],
            [
                "name" => "Machhapuchhre Bank Ltd.",
                'swift_code' => "MBLNNPKA",
                'link' => "https://www.machbank.com/",
            ],
            [
                "name" => "NIC Asia Bank Ltd.",
                'swift_code' => "NICENPKA",
                'link' => "https://www.nicasiabank.com/",
            ],
            [
                "name" => "Global IME Bank Ltd.",
                'swift_code' => "GLBBNPKA",
                'link' => "https://globalimebank.com/",
            ],
            [
                "name" => "NMB Bank Ltd. ",
                'swift_code' => "NMBBNPKA",
                'link' => "https://www.nmbbanknepal.com/",
            ],
            [
                "name" => "Prabhu Bank Ltd.",
                'swift_code' => "PRVUNPKA",
                'link' => "https://www.prabhubank.com/",
            ],
            [
                "name" => "Siddhartha Bank Ltd.",
                'swift_code' => "SIDDNPKA",
                'link' => "",
            ],
            [
                "name" => "Bank of Kathmandu Ltd.",
                'swift_code' => "BOKLNPKA",
                'link' => "https://www.bok.com.np/",
            ],
            [
                "name" => "Civil Bank Ltd.",
                'swift_code' => "CIVLNPKA",
                'link' => "https://www.civilbank.com.np/",
            ],
            [
                "name" => "Nepal Credit and Commerce Bank Ltd.",
                'swift_code' => "NBOCNPKA",
                'link' => "https://www.nccbank.com.np/",
            ],
            [
                "name" => "Rastriya Banijya Bank Ltd.",
                'swift_code' => "RBBANPKA",
                'link' => "https://www.rbb.com.np/website/public/",
            ],
            [
                "name" => "Mega Bank Nepal Ltd.",
                'swift_code' => "MBNLNPKA",
                'link' => "https://www.megabanknepal.com/",
            ],

        ];

        foreach ($bankArray as $item) {
            Bank::create($item);
        }
    }
}
