<?php

namespace Receptionist\Models;

use CMS\Models\Bank;
use CMS\Models\Branch;
use Engineer\Models\SiteVisit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;


    protected $fillable = [
        'branch_id',
        'bank_id',
        'banker_name',
        'banker_contact',
        'client_name',
        'client_phone',
        'property_location',
        'site_visited_by',
        'property_location',
        'status',
        'remarks'
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }


    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }


    public function siteVisit(){
        return $this->hasOne(SiteVisit::class, 'proposal_id');
    }


    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
