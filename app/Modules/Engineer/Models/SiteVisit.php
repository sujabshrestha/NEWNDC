<?php

namespace Engineer\Models;

use App\Models\BuildingCalculation;
use App\Models\LalpurjaCalculation;
use App\Models\LandbasedCalculation;
use App\Models\Patra;
use App\Models\PermanetBoundariesAsPerGovt;
use App\Models\PermanetBoundariesAsPerSiteVisit;
use App\Models\SitevisitInternalcaddocument;
use App\Models\SitevisitLegalscandocument;
use App\Models\RateofLand;
use Client\Models\Client;
use CMS\Models\Bank;
use CMS\Models\Branch;
use App\Models\Deduction;
use App\Models\ValuationDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Receptionist\Models\Proposal;

class SiteVisit extends Model
{
    use HasFactory;

    protected $dates = ['ownership_date','preparation_date'];

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


    public function scandocuments(){
        return $this->hasMany(SitevisitLegalscandocument::class, 'site_visit_id');
    }


    public function legaldocuments(){
        return $this->hasMany(SitevisitLegaldocx::class, 'site_visit_id');
    }

    public function legalscandocuments(){
        return $this->hasMany(SitevisitLegalscandocument::class, 'site_visit_id');
    }


    public function internaldocuments(){
        return $this->hasMany(SitevisitInternalcaddocument::class, 'site_visit_id');
    }

    public function internalcaddocuments(){
        return $this->hasMany(SitevisitInternalcaddocument::class, 'site_visit_id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }



    public function govBoundaries(){
        return $this->hasMany(PermanetBoundariesAsPerGovt::class, 'sitevisit_id');
    }



    public function rateofland(){
        return $this->hasOne(RateofLand::class, 'site_visit_id');
    }

    public function siteVisitBoundaries(){
        return $this->hasMany(PermanetBoundariesAsPerSiteVisit::class, 'sitevisit_id');
    }

    public function deduction(){
        return $this->hasOne(Deduction::class, 'site_visit_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function proposal(){
        return $this->belongsTo(Proposal::class, 'proposal_id');
    }


    public function patras(){
        return $this->belongsToMany(Patra::class, 'sitevisit_patras', 'site_visit_id');
    }


    public function lalpurjaDatas(){
        return $this->hasMany(LalpurjaCalculation::class, 'site_visit_id');
    }

    public function landbasedDatas(){
        return $this->hasMany(LandbasedCalculation::class, 'site_visit_id');
    }

    public function valuationDetails(){
        return $this->hasOne(ValuationDetails::class);
    }

    public function buildingValuation(){
        return $this->hasMany(BuildingCalculation::class, 'site_visit_id');
    }
}
