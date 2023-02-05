@extends('layouts.admin.master')

@section('title', 'NDC | Site Visit View ')

@section('breadcrumb', 'Site Visit View ')

@push('styles')
    <style>
        .fieldBorder{
            border-right: 2px solid #b9b9b9;
            border-bottom: 2px solid #b9b9b9;
            border-bottom-right-radius: 5px;
        }
    </style>
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">View </h5>
                    <a class="btn btn-secondary float-right " href="{{ route('backend.admin.sitevisit.index')}}">Previous Page</a>

                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                <form >
                    <div class="row">

                        <div class="form-group col-md-12 mb-2">
                            <label style="color: #dc1de9;margin-bottom: 0px;">
                                <h6><b>1 GENERAL DETAILS</b></h6>
                            </label>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="reg_no">Registration Id</label>
                            <h6>{{ $sitevisit->registration_id}}</h6>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
                            <h6>{{ $sitevisit->valuation_type}}</h6>
                            </div>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="bankId">Bank <span class="text-danger">*</span></label>
                            <h6>{{ $sitevisit->bank->name ?? 'N/A'}}</h6>
                            </div>

                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="branchId">Branch <span class="text-danger">*</span></label>
                            <h6>{{ $sitevisit->branch->title ?? 'N/A'}}</h6>
                            </div>
                           
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="file_no">File No <span class="text-danger">*</span> </label>
                            <h6>{{ $sitevisit->file_no}}</h6>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label for="siteEngineerId">Site Engineer <span class="text-danger">*</span></label>
                            <h6>{{ $sitevisit->siteEngineer->name ?? 'N/A'}}</h6>
                            </div>

                           
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>  Client <span class="text-danger">*</span></label>
                            <h6>{{ $sitevisit->client->client_name ?? 'N/A' }}</h6>
                            </div>

                            
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Owner Name <span class="text-danger">*</span>
                            </label>
                            <h6>{{ $sitevisit->owner_name ?? 'N/A'}}</h6>
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Market Rate
                            </label>
                            <h6>{{ $sitevisit->market_rate ?? 'N/A'}}</h6>
                            </div>

                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>BM Name</label>
                            <h6>{{ $sitevisit->bm_name ?? 'N/A'}}</h6>
                            </div>

                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                BM Contact No
                            </label>
                            <h6>{{ $sitevisit->bm_contact ?? 'N/A'}}</h6>
                            </div>

                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>RM Name</label>
                            <h6>{{ $sitevisit->rm_name ?? 'N/A'}}</h6>
                            </div>

                           
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                RM Contact No
                            </label>
                            <h6>{{ $sitevisit->rm_contact ?? 'N/A'}}</h6>
                            </div>

                          
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Type of road
                            </label>
                            <h6>{{ $sitevisit->type_of_road ?? 'N/A'}}</h6>
                            </div>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Type of land
                            </label>
                            <h6>{{ $sitevisit->type_of_land ?? 'N/A'}}</h6>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Category Of property
                            </label>
                            @php
                                
                                if (isset($sitevisit) && $sitevisit->category_of_property == "Residential"){
                                    $category_of_property = "Residential";
                                }elseif (isset($sitevisit) && $sitevisit->category_of_property == "Commercial"){
                                    $category_of_property = "Commercial";
                                }elseif(isset($sitevisit) && $sitevisit->category_of_property == "Commercial_Residential"){
                                    $category_of_property = "Commercial Residential";
                                } elseif (isset($sitevisit) && $sitevisit->category_of_property == "Other"){
                                    $category_of_property = "Other";
                                }
                            @endphp
                            <h6>{{ $category_of_property ?? 'N/A'}}</h6>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Road Size
                            </label>
                            <h6>{{ $sitevisit->road_size}}</h6>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="fieldBorder">
                            <label>
                                Ward Number
                            </label>
                            <h6>{{ $sitevisit->ward_no}}</h6>
                            </div>
                        </div>
                    </div>
                        <hr>
                        <div class="row">
                        <div class="form-group col-md-12 mb-2">
                            <label style="color: #dc1de9;margin-bottom: 0px;">
                                <h6><b>2 UPLOAD DOCUMENT</b></h6>
                            </label>
                            

                        </div>
                    
                        <div class="form-group col-md-6">
                            <label>Upload Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                        
                            <table class="table table-bordered dataTable" style="width:100%" id="TblRegUploadPicture">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" width="20">Sno</th>
                                        <th scope="col">File Name <a href="#" class="text-danger" data-toggle="modal"
                                                data-target="#ViewAllPictureModal"> View</a></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($sitevisit) && $sitevisit->documents->isNotEmpty())
                                    @foreach ($sitevisit->documents as $document)
                                    <tr>
                                        <th scope="col" width="20">{{ $loop->iteration }}</th>
                                        <th scope="col">{{ getFileTitle($document->file_id) ?? "" }} <a href="{{ url('/').getOrginalUrl($document->file_id) }}" target="_blank" class="text-danger" > View</a></th>
                                       
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label>Upload Legal Scan Doc</label>
                           
                            <table class="table table-bordered dataTable" style="width:100%" id="TblRegUploadScanDocument">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" width="20">Sno</th>
                                        <th scope="col">File Name <a href="#" class="text-danger" data-toggle="modal"
                                                data-target="#ViewAllScanModal"> View</a></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($sitevisit) && $sitevisit->documents->isNotEmpty())
                                    @foreach ($sitevisit->legaldocuments as $document)
                                    <tr>
                                        <th scope="col" width="20">{{ $loop->iteration }}</th>
                                        <th scope="col">{{ getFileTitle($document->file_id) ?? "" }} <a href="{{ url('/').getOrginalUrl($document->file_id) }}" target="_blank" class="text-danger" > View</a></th>
                                        
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            @if ($sitevisit->verification_status == "Verified")
                            <span class="badge badge-success">Verified</span>
                            @else
                                <a class="btn btn-primary float-right" href="{{ route('backend.auth.verify',$sitevisit->id) }}">Verify Site Visit Data</a>
                            @endif
                        </div>
                     
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    @endsection

