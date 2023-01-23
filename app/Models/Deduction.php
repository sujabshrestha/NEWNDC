<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'deductionOfRoadSqF',
        'landDevelopmentPercent',
        'deductionForHighTensionSqF',
        'deductionForLowLandSqF',
        'deductionForRiverSqF',
        'deductionForBoundryCorrection',
        'deductionForIrregularShapeSloppyLand',
        'sqMAPConsideration',
        'rAPDAPConsideration',
        'sqFAPConsideration',
        'annaAPConsideration',
        'site_visit_id',
        
        // New Fields
        'total_rapd_as_road',
        'total_sqm_as_road',
        'total_anna_as_road',
        
        'total_rapd_as_land_development',
        'total_sqm_as_land_development',
        'total_sqf_as_land_development',
        'total_anna_as_land_development',

        'total_rapd_as_high_tension_deduction',
        'total_sqm_as_high_tension_deduction',
        'total_anna_as_high_tension_deduction',

        'total_rapd_as_low_land_deduction',
        'total_sqm_as_low_land_deduction',
        'total_anna_as_low_land_deduction',
        
        'total_rapd_as_river_deduction',
        'total_sqm_as_river_deduction',
        'total_anna_as_river_deduction',

        'total_rapd_as_boundry_correction_deduction',
        'total_sqm_as_boundry_correction_deduction',
        'total_sqf_as_boundry_correction_deduction',
        'total_anna_as_boundry_correction_deduction',

        'total_rapd_as_irregular_shape_deduction',
        'total_sqm_as_irregular_shape_deduction',
        'total_sqf_as_irregular_shape_deduction',
        'total_anna_as_irregular_shape_deduction',

        
    ];

}
