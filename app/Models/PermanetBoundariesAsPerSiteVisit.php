<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanetBoundariesAsPerSiteVisit extends Model
{
    use HasFactory;

    protected $table = 'boundaries_as_per_sitevisits';

    protected $fillable =[
        'kita_no',
        'east',
        'west',
        'north',
        'south',
        'valuation_details_id'
     ];
}
