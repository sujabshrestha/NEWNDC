<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_visit_id',
        'road_size',
        'river',
        'hightension_line',
        'type_of_region',
        'motorable_access',
        'property_usage',
        'type_of_access',
        'shape',
        'facing',
        'frontage',
        'level_with_road',
        'property_fot_the_bank',
        'narrowestPartOfLand',
        'heritage_sites_near_by',
        'property_ownership_type',
        'narrowest_part_of_land',
        'access_in_the_blue_print',
        'right_of_way',
        'comments',
        'frame_structure',
        'any_collateral_fall',
        'valuation_for',
        'rive_near_by',
        'florring_finishing',
        'inner_wall_ceiling',
        'boundary',
        'no_of_floors',
        'type_of_land',
        'compound_wall',
        'internal_remarks',

       
        // From Technical Details - Form
        'location_of_land',
        'district',
        'vdc_municipality',
        'address_of_land',
        
        // New Fields
        'total_rapd_as_lalpurja',
        'total_sqm_as_lalpurja',
        'total_sqf_as_lalpurja',
        'total_anna_as_lalpurja',
        
        'total_rapd_as_measurement',
        'total_sqm_as_measurement',
        'total_sqf_as_measurement',
        'total_anna_as_measurement',

        // Building Valuation
        'totalBuildingAreaSqF',
        'totalBuildingAmount',
        'totalNetBuildingAmount',
        'totalBuildingDepriciation',
        'totalBuildingFairMarketValue',
        'totalBuildingDistressValue'


    ];
}
