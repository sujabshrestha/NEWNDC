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
        
    ];

}
