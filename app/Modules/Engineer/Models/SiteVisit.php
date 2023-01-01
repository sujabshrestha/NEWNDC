<?php

namespace Engineer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    use HasFactory;


    public function documents(){
        return $this->hasMany(SitevisitDocument::class, 'site_visit_id');
    }


    public function legaldocuments(){
        return $this->hasMany(SitevisitLegaldocx::class, 'site_visit_id');
    }
}
