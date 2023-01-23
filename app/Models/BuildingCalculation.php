<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingCalculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor',
        'site_visit_id',
        'buildingarea_sqf',
        'building_age',
        'building_depreciation_percentage',
        'building_sanitary_plumbing_percentage',
        'building_electric_work_percentage',
        'building_amount',
        'building_totalamount',
        'building_rate',
        'deprication_amt',
        'fair_market_val',
        'distress_val',
    ];
}
