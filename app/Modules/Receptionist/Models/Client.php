<?php

namespace Receptionist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'father_name',
        'grand_father_name',
        'husband_name',
        'father_in_law_name',
        'spouse_name',
        'address',
        'district',
        'citizenship_no',
        'date_of_issue',
        'place_of_issue',
        'contact_no',
        'reg_no',
        'pan_no',
        'pan_date_of_issue',
        'pan_place_of_issue',
        'share_holders','status','remarks'
    ];

    protected $dates = [ 'date_of_issue','pan_date_of_issue'];

    public function scopeActive($query){
        return $query->where('status','Active');
    }

    public function owner(){
        return $this->hasOne(Owner::class);
    }

}
