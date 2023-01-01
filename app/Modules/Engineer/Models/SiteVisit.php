<?php

namespace Engineer\Models;

use Client\Models\Client;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    use HasFactory;

    public function scopePreValuation($query){
        $query->where('valuation_status','Pre-Valuation');
    }

    public function scopeFinalValuation($query){
        $query->where('valuation_status','Final-Valuation');
    }

    public function scopeCancelValuation($query){
        $query->where('valuation_status','Cancel-Valuation');
    }
   

    public function documents(){
        return $this->hasMany(SitevisitDocument::class, 'site_visit_id');
    }


    public function legaldocuments(){
        return $this->hasMany(SitevisitLegaldocx::class, 'site_visit_id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
