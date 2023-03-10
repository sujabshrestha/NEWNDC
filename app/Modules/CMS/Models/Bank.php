<?php

namespace CMS\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'status',
        'remarks',
        'commercial_rate',
        'fair_market_rate',
        'governmant_rate',
    ];
}
