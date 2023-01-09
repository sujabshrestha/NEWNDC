<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateofLand extends Model
{
    use HasFactory;

    protected $fillable = [
        'perSqFAPGovRate',
        'govPage',
        'perAnnaAPGovRate',
        'perRopaniAPGovRate',
        'perSqFAPMarketRate',
        'perAnnaAPMarketRate',
        'perRopaniAPMarketRate',
        'perSqFAPFairRate',
        'perAnnaAPFairRate',
        'perRopaniAPFairRate',
        'perSqFAPDistressRate',
        'perAnnaAPDistressRate',
        'governmentValueOfLand',
        'commercialValueOfLand',
        'fairMarketValueOfLand',
        'distressValueOfLand',
        'fairMarketValueOfLandAndBuilding',
        'totalDistressValueOfLandAndBuimding',
        'site_visit_id',
    ];

}
