<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourSitevisitBoundary extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'site_visit_id',
        'boundary'
    ];

}
