<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitevisitInternalcaddocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_visit_id',
        'file_id'
    ];

}
