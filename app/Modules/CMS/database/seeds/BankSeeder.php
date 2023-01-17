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
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Agriculture Development Bank Ltd.",
                'swift_code' => "ADBLNPKA",
                'link' => "https://www.adbl.gov.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Nabil Bank Ltd.",
                'swift_code' => "MBNLNPKA",
                'link' => "https://www.nabilbank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Nepal Investment Bank Ltd.",
                'swift_code' => "NIBLNPKT",
                'link' => "https://www.nibl.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Standard Chartered Bank Nepal Ltd",
                'swift_code' => "SCBLNPKA",
                'link' => "https://www.sc.com/np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Himalayan Bank Ltd.",
                'swift_code' => "HIMANPKA",
                'link' => "https://www.himalayanbank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Nepal SBI Bank Ltd.",
                'swift_code' => "NSBINPKA",
                'link' => "https://nsbl.statebank/home",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Nepal Bangaladesh Bank Ltd.",
                'swift_code' => "NSBINPKA",
                'link' => "https://www.nbbl.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Everest Bank Ltd.",
                'swift_code' => "EVBLNPKA",
                'link' => "https://everestbankltd.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Kumari Bank Ltd.",
                'swift_code' => "KMBLNPKA",
                'link' => "https://www.kumaribank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Century Commercial Bank Ltd.",
                'swift_code' => "CCBNNPKA",
                'link' => "https://www.centurybank.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Sanima Bank Ltd.",
                'swift_code' => "SNMANPKA",
                'link' => "https://www.sanimabank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Sunrise Bank Ltd.",
                'swift_code' => "SRBLNPKA",
                'link' => "https://www.sunrisebank.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Prime Commercial Bank Ltd.",
                'swift_code' => "PCBLNPKA",
                'link' => "https://www.primebank.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Citizens Bank International Ltd.",
                'swift_code' => "CTZNNPKA",
                'link' => "https://www.ctznbank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Laxmi Bank Ltd.",
                'swift_code' => "LXBLNPKA",
                'link' => "https://www.laxmibank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Machhapuchhre Bank Ltd.",
                'swift_code' => "MBLNNPKA",
                'link' => "https://www.machbank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "NIC Asia Bank Ltd.",
                'swift_code' => "NICENPKA",
                'link' => "https://www.nicasiabank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Global IME Bank Ltd.",
                'swift_code' => "GLBBNPKA",
                'link' => "https://globalimebank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "NMB Bank Ltd. ",
                'swift_code' => "NMBBNPKA",
                'link' => "https://www.nmbbanknepal.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Prabhu Bank Ltd.",
                'swift_code' => "PRVUNPKA",
                'link' => "https://www.prabhubank.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Siddhartha Bank Ltd.",
                'swift_code' => "SIDDNPKA",
                'link' => "",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Bank of Kathmandu Ltd.",
                'swift_code' => "BOKLNPKA",
                'link' => "https://www.bok.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Civil Bank Ltd.",
                'swift_code' => "CIVLNPKA",
                'link' => "https://www.civilbank.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Nepal Credit and Commerce Bank Ltd.",
                'swift_code' => "NBOCNPKA",
                'link' => "https://www.nccbank.com.np/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Rastriya Banijya Bank Ltd.",
                'swift_code' => "RBBANPKA",
                'link' => "https://www.rbb.com.np/website/public/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],
            [
                "name" => "Mega Bank Nepal Ltd.",
                'swift_code' => "MBNLNPKA",
                'link' => "https://www.megabanknepal.com/",
                'commercial_rate'=> 15,
                'fair_market_rate'=> 12,
                'governmant_rate' => 10,
            ],

        ];

        foreach ($bankArray as $item) {
            Bank::create($item);
        }
    }
}
