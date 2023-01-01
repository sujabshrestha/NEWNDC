<?php

namespace Client\Repositories\Client;

use Carbon\Carbon;
use Client\Repositories\Client\ClientInterface;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Client\Models\Client;
use Client\Models\Owner;

class ClientRepository implements ClientInterface
{

    public function getById($id){
        $client = Client::where('id', $id)->first();
        if(!$client){
            throw new Exception("Client Not Found.");
        }
        return $client;
    }

    public function store($request){
        $client = new Client();
        $client->client_name = $request->client_name;
        $client->father_name = $request->father_name;
        $client->grand_father_name = $request->grand_father_name;
        $client->husband_name = $request->husband_name;
        $client->father_in_law_name = $request->father_in_law_name;
        $client->spouse_name = $request->spouse_name;
        $client->address = $request->address;
        $client->district = $request->district;
        $client->citizenship_no = $request->citizenship_no;
        $client->date_of_issue = $request->date_of_issue;
        $client->place_of_issue = $request->place_of_issue;
        $client->contact_no = $request->contact_no;
        $client->reg_no = $request->reg_no;
        $client->pan_no = $request->pan_no;
        $client->pan_date_of_issue = $request->pan_date_of_issue;
        $client->pan_place_of_issue = $request->pan_place_of_issue;
        $client->share_holders = $request->share_holders;       
        if($client->save() == true){
            $owner = new Owner();
            $owner->client_id = $client->id;
            $owner->owner_name = $request->owner_name;
            $owner->mohi_name = $request->mohi_name;
            $owner->father_name = $request->owner_father_name;
            $owner->grand_father_name = $request->owner_grand_father_name;
            $owner->husband_name = $request->owner_husband_name;
            $owner->father_in_law_name = $request->owner_father_in_law_name;
            $owner->spouse_name = $request->owner_spouse_name;
            $owner->address = $request->owner_address;
            $owner->district = $request->owner_district;
            $owner->citizenship_no = $request->owner_citizenship_no;
            $owner->date_of_issue = $request->owner_date_of_issue;
            $owner->place_of_issue = $request->owner_place_of_issue;
            $owner->contact_no = $request->owner_contact_no;
            $owner->reg_no = $request->owner_reg_no;
            $owner->pan_no = $request->owner_pan_no;
            $owner->pan_date_of_issue = $request->owner_pan_date_of_issue;
            $owner->pan_place_of_issue = $request->owner_pan_place_of_issue;
            $owner->share_holders = $request->owner_share_holders;  
            $owner->relation = $request->relation;
            $owner->proposed_owner_name = $request->proposed_owner_name;
            if($owner->save() == true){
                return true;
            } 
        }
        throw new Exception("Error While Creating Client!!!");
    }

    public function update($request,$id){
        // dd($request->all());
        // dd($id);
        $client = $this->getById($id);
        $client->client_name = $request->client_name;
        $client->father_name = $request->father_name;
        $client->grand_father_name = $request->grand_father_name;
        $client->husband_name = $request->husband_name;
        $client->father_in_law_name = $request->father_in_law_name;
        $client->spouse_name = $request->spouse_name;
        $client->address = $request->address;
        $client->district = $request->district;
        $client->citizenship_no = $request->citizenship_no;
        $client->date_of_issue = $request->date_of_issue;
        $client->place_of_issue = $request->place_of_issue;
        $client->contact_no = $request->contact_no;
        $client->reg_no = $request->reg_no;
        $client->pan_no = $request->pan_no;
        $client->pan_date_of_issue = $request->pan_date_of_issue;
        $client->pan_place_of_issue = $request->pan_place_of_issue;
        $client->share_holders = $request->share_holders;    
        if($client->update() == true){
            $owner = Owner::where('client_id',$client->id)->first();
            // $owner->client_id = $client->id;
            $owner->owner_name = $request->owner_name;
            $owner->mohi_name = $request->mohi_name;
            $owner->father_name = $request->owner_father_name;
            $owner->grand_father_name = $request->owner_grand_father_name;
            $owner->husband_name = $request->owner_husband_name;
            $owner->father_in_law_name = $request->owner_father_in_law_name;
            $owner->spouse_name = $request->owner_spouse_name;
            $owner->address = $request->owner_address;
            $owner->district = $request->owner_district;
            $owner->citizenship_no = $request->owner_citizenship_no;
            $owner->date_of_issue = $request->owner_date_of_issue;
            $owner->place_of_issue = $request->owner_place_of_issue;
            $owner->contact_no = $request->owner_contact_no;
            $owner->reg_no = $request->owner_reg_no;
            $owner->pan_no = $request->owner_pan_no;
            $owner->pan_date_of_issue = $request->owner_pan_date_of_issue;
            $owner->pan_place_of_issue = $request->owner_pan_place_of_issue;
            $owner->share_holders = $request->owner_share_holders;  
            $owner->relation = $request->relation;
            $owner->proposed_owner_name = $request->proposed_owner_name;
            if($owner->update() == true){
                return true;
            } 
        }
        throw new Exception("Unable To Update Client!!!");
    }

   

    public function trashedDestroy($id){
        $user = Client::withTrashed()->where('id', $id)->first();
        $user->forceDelete();
        return true;
    }

    public function trashedRecover($id){
        $user = Client::withTrashed()->where('id', $id)->first();
        $user->restore();
        return true;
    }









}
