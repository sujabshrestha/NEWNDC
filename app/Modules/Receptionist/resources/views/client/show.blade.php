@extends('layouts.reception.master')

@section('title', 'NDC | View Clients')

@section('breadcrumb', 'View Clients')

@push('styles')
    <style>
        .data-items{
            border-right: solid 1px rgb(207, 201, 201);
            border-bottom: solid 1px rgb(207, 201, 201);
            border-bottom-right-radius: 6px;
            line-height:1;
        }
        .data-items h6{
            font-weight: 600;
        }
        
    </style>
    
@endpush

@section('content')
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">View Client Details - <span class="font-weight-bolder">{{ $client->client_name ?? 'N/A'}}</span></h5>
                        <a class="btn btn-secondary float-right " href="{{ route('receptionist.client.index')}}">Previous Page</a>
                    </div>
                    <hr>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                       
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="client_name">Client Name </label>
                                    <h6 style="font-weight:600;">{{ $client->client_name ?? 'N/A'}}</h6>
                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="father_name">Father Name</label>
                                    <h6>{{ $client->father_name ?? 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="grand_father_name">Grand Father Name</label>
                                    <h6>{{ $client->grand_father_name ?? 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="husband_name">Husband Name</label>
                                    <h6>{{ $client->husband_name ?? 'N/A'}}</h6>
                                      
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="father_in_law_name">Father in Law's Name</label>
                                        <h6>{{ $client->father_in_law_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="spouse_name">Spouse Name</label>
                                        <h6>{{ $client->spouse_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="address">Address</label>
                                        <h6>{{ $client->address ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="district">District</label>
                                        <h6>{{ $client->district ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="citizenship_no">Citizenship No.</label>
                                        <h6>{{ $client->citizenship_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="date_of_issue">Date Of Issue(BS)(Citizenship)</label>
                                        <h6>{{$client->date_of_issue != null ? $client->date_of_issue->format('Y/d/m') : 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="place_of_issue">Place Of Issue(Citizenship)</label>
                                        <h6>{{ $client->place_of_issue ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="contact_no">Contact No.</label>
                                        <h6>{{ $client->contact_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="reg_no">Reg. No.</label>
                                        <h6>{{ $client->reg_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="pan_no">Pan No.</label>
                                        <h6>{{ $client->pan_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="pan_date_of_issue">Date Of Issue(PAN No.)</label>
                                        <h6>{{$client->pan_date_of_issue != null ? $client->pan_date_of_issue->format('Y/d/m') : 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="pan_place_of_issue">Place Of Issue(PAN No.)</label>
                                        <h6>{{ $client->pan_place_of_issue ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="share_holders">Share Holders</label>
                                        <h6>{{ $client->share_holders ?? 'N/A'}}</h6>

                                </div>
                            </div>
                        </div> 
                        <hr>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Owner Details</h5>
                                    <hr style="margin: 0;">
                                </div>
                            </div>
                            <hr style="margin: 0;">
                        </div>
                        @if (isset($client) && $client->owner != null)
                        <div class="row">
                        
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_name">Owner Name </label>
                                        <h6>{{ $client->owner->owner_name ?? 'N/A'}}</h6>

                                </div>
                            </div> 
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="mohi_name">Mohi Name</label>
                                   
                                        <h6>{{ $client->owner->mohi_name ?? 'N/A'}}</h6>

                                </div>
                            </div> 
                            <div class="col-md-3">
                              <div class="form-group data-items">
                                    <label for="owner_father_name">Father Name</label>
                                        <h6>{{ $client->owner->father_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_grand_father_name">Grand Father Name</label>
                                        <h6>{{ $client->owner->grand_father_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_husband_name">Husband Name</label>
                                        <h6>{{ $client->owner->husband_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_father_in_law_name">Father in Law's Name</label>
                                        <h6>{{ $client->owner->father_in_law_name ?? 'N/A'}}</h6>

                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_spouse_name">Spouse Name</label>
                                        <h6>{{ $client->owner->spouse_name ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_address">Address</label>
                                        <h6>{{ $client->owner->address ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_district">District</label>
                                        <h6>{{ $client->owner->district ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_citizenship_no">Citizenship No.</label>
                                        <h6>{{ $client->owner->citizenship_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_date_of_issue">Date Of Issue(BS)(Citizenship)</label>
                                    <h6>{{$client->owner->date_of_issue != null ? $client->owner->date_of_issue->format('Y/d/m') : 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_place_of_issue">Place Of Issue(Citizenship)</label>
                                        <h6>{{ $client->owner->place_of_issue ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_contact_no">Contact No.</label>
                                        <h6>{{ $client->owner->contact_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_reg_no">Reg. No.</label>
                                        <h6>{{ $client->owner->reg_no ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_pan_no">Pan No.</label>
                                    
                                        <h6>{{ $client->owner->pan_no  ?? 'N/A'}}</h6>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_pan_date_of_issue">Date Of Issue(PAN No.)</label>
                                    <h6>{{$client->owner->pan_date_of_issue != null ? $client->owner->pan_date_of_issue->format('Y/d/m') : 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_pan_place_of_issue">Place Of Issue(PAN No.)</label>
                                    <h6>{{ $client->owner->pan_place_of_issue ?? 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="owner_share_holders">Share Holders</label>
                                    <h6>{{ $client->owner->share_holders ?? 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="relation">Relation</label>
                                    <h6>{{ $client->owner->relation ?? 'N/A'}}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group data-items">
                                    <label for="proposed_owner_name">Proposed Owner Name</label>
                                    <h6>{{ $client->owner->proposed_owner_name ?? 'N/A'}}</h6>
                                </div>
                            </div>
                        </div> 
                        @else
                            <h5>Sorry. No Data Avaliable.</h5>
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
    
 @endsection
 @push('scripts')


     
 @endpush

