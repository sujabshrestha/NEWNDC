@extends('layouts.admin.master')

@section('title', 'NDC | Valuation Long Form ')

@section('breadcrumb', 'Valuation Long Form ')

@push('styles')
    <style>
        .required{
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Edit </h5>
                    <a class="btn btn-secondary float-right " href="{{ route('client.index') }}">Previous Page</a>

                </div>
                <hr>
                <div class="col-md-12">
                    <form action="http://ndcnepal.com.np/ndc/valuation/savevaluation" method="post">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group>
                                    <label style="color: #dc1de9;margin-bottom: 0px;">
                                        <h6><b>1 GENERAL DETAILS</b></h6>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-left:6px;padding-right:6px;">

                            <div class="form-group">
                                <label>Valuation Id</label>
                                <input type="text" name="valuation_id" id="valuation_id" required=""
                                    value="NDC-" class="form-control" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Valuation Type <span class="required">*</span></label>
                                <select class="form-control selectbox" name="valuation_type" id="valuation_type"
                                    required="">
                                    <option disabled selected="selected">Select Valuation Type</option>
                                    <option value="Land Only">Land Only</option>
                                    <option value="Land &amp; Building">Land &amp; Building</option>
                                    <option value="Appartment">Appartment</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Bank <span class="required">*</span></label>
                                <select class="form-control selectbox" name="bank_id" id="bank_id" required="">
                                    <option disabled selected="selected">Select Bank</option>
                                    <option value="22">BANK OF KATHMANDU LTD.</option>
                                    <option value="20">CENTRAL FINANCE LTD.</option>
                                    <option value="26">CITIZEN INVESTMENT TRUST</option>
                                    <option value="27">EMPLOYEE PROVIDENT FUND</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Branch <span class="required">*</span></label>
                                <select class="form-control selectbox" name="branch_id" id="branch_id" required=""
                                    branchid="">
                                    <option disabled selected="selected">Select Branch</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Client <span class="required">*</span></label>
                                <select class="form-control" data-live-search="true"
                                    data-size="15" name="client_id" id="client_id" required=""
                                    tabindex="-98">
                                    <option disabled selected="selected">Select Client</option>                                       
                                    <option value="179" data-subtext="9841322575"> Mr. Bhuvan Lamichhane</option>
                                    <option value="229" data-subtext="9851172283"> Mr. Kiran Shrestha</option>
                                    <option value="140" data-subtext="9851061130"> Mr. Laxman Thokar</option>
                                    <option value="822" data-subtext="9851037105"> Mr. Manoj Dangol</option>
                                </select>
                            </div>
                            
                   
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Site Engineer <span class="required">*</span></label>
                                <select class="form-control selectbox" name="site_engineer_id" id="site_engineer_id"
                                    required="">
                                    <option disabled selected="selected">Select Site Engineer</option>
                                    <option value="1">admin</option>
                                    <option value="15">Ajay Sah</option>
                                    <option value="19">Er. Ajit Jha ( NEC N0 :-25705 "A'Civil ) </option>
                                    <option value="16">Anuj Das</option>

                                </select>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Valuation Assignment No<span class="text-danger"> *</span></label>
                                <input type="text" name="valuation_assignment_on" id="valuation_assignment_on"
                                 value="{{ old('valuation_assignment_on') }}"   class="form-control" required="">
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Prepration Date (BS) <span class="required">*</span></label>
                                <input type="text" name="prepration_date" id="prepration_date" required=""
                                value="{{ old('prepration_date') }}"   class="form-control">
                            </div>
                            <input type="hidden" name="ownershipComesFrom" id="ownershipComesFrom">
                            <div class="form-group col-md-9"  style="padding-left:6px;padding-right:6px;">
                                <div class="form-check mt-4">
                                    <input type="checkbox" class="form-check-input" id="ChkRajinama"
                                        value="Rajinama" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4"
                                        for="ChkRajinama">Rajinama</label>
                                    <input type="checkbox" class="form-check-input" id="ChkBakashPattra"
                                        value="Bakash Pattra" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4" for="ChkBakashPattra">Bakash
                                        Pattra</label>
                                    <input type="checkbox" class="form-check-input" id="ChkChodPattra"
                                        value="Chod Pattra" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4" for="ChkChodPattra">Chod
                                        Pattra</label>
                                    <input type="checkbox" class="form-check-input" id="ChkAnshbanda"
                                        value="Anshbanda" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4"
                                        for="ChkAnshbanda">Anshbanda</label>
                                    <input type="checkbox" class="form-check-input" id="ChkNamsari" value="Namsari"
                                        name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4"
                                        for="ChkNamsari">Namsari</label>
                                    <input type="checkbox" class="form-check-input" id="ChkAayojanaFirta"
                                        value="AayojanaFirta" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label mr-4" for="ChkAayojanaFirta">Aayojana
                                        Firta</label>
                                    <input type="checkbox" class="form-check-input" id="ChkDakhilaKharij"
                                        value="DakhilaKharij" name="ChkOwnershipComesFrom">
                                    <label class="form-check-label form-check-label" for="ChkDakhilaKharij">Dakhila
                                        Kharij</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3"  style="padding-left:6px;padding-right:6px;">
                                <label>Date (BS) (Ownership) <span class="required">*</span></label>
                                <input type="text" name="date_ownership" id="date_ownership" required=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-12 mb-2"  style="padding-left:6px;padding-right:6px;">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>2 LAND CALCULATIONS</b></h6>
                                </label>
                            </div>
                            <div class="form-group col-md-12 mb-2"  style="padding-left:6px;padding-right:6px;">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(A) TOTAL AREA AS PER LALPURJA</b>
                                </label>
                            </div>

                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;">
                                <label>Kita No</label>
                                <input type="text" name="kita_no" id="kita_no" placeholder="Kita No" class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;">
                                <label>Sheet No</label>
                                <input type="text" name="sheet_no" id="sheet_no" placeholder="Sheet No"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Ropani</label>
                                <input type="text" name="ropani_as_lalpurja" id="ropani_as_lalpurja"
                                    placeholder="Ropani" class="form-control" readonly="readonly"
                                    >
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Anna</label>
                                <input type="text" name="anna_as_lalpurja" id="anna_as_lalpurja"
                                    placeholder="Anna" class="form-control" readonly="readonly"
                                    >
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Paisa</label>
                                <input type="text" name="paisa_as_lalpurja" id="paisa_as_lalpurja"
                                    placeholder="Paisa" class="form-control" readonly="readonly"
                                    >
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Dam</label>
                                <input type="text" name="dam_as_lalpurja" id="dam_as_lalpurja"
                                    placeholder="Dam" class="form-control" readonly="readonly"
                                    >
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Area in Sq.M</label>
                                <input type="text" name="sqm_as_lalpurja" id="sqm_as_lalpurja"
                                    placeholder="Area Sq.M" class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Area in (R-A-P-D)</label>
                                <input type="text" name="rapd_as_lalpurja" id="rapd_as_lalpurja"
                                    readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Area in Sq.F</label>
                                <input type="text" name="sqf_as_lalpurja" id="sqf_as_lalpurja"
                                    readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;" >
                                <label>Area in Anna</label>
                                <input type="text" name="area_in_anna_as_lalpurja" id="area_in_anna_as_lalpurja"
                                    readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;">
                                <label style="width: 100%;">&nbsp;</label>
                                <button type="button addAreaAPLalpurja" id="addAreaAPLalpurja" class="btn btn-info "
                                    style="padding: 2px 5px;">ADD</button>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <table class="table table-bordered dataTable" id="TblAreaAsPerLalpurja"
                                    style="width:100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="30">Sno</th>
                                            <th scope="col">Kita No</th>
                                            <th scope="col">Sheet No</th>
                                            <th scope="col">Ropani</th>
                                            <th scope="col">Anna</th>
                                            <th scope="col">Paisa</th>
                                            <th scope="col">Dam</th>
                                            <th scope="col">Area Sq.M</th>
                                            <th scope="col">Area R-A-P-D</th>
                                            <th scope="col">Area Sq.F</th>
                                            <th scope="col">Area In Anna</th>
                                            <th scope="col" width="50">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="3" style="text-align: right;">TOTAL AREA AS
                                                PER LALPURJA</th>
                                            <th scope="col"><label id="totalRopani"></label><input
                                                    type="hidden" name="totalRopani" id="totalRopani"
                                                    value="0"></th>
                                            <th scope="col"><label id="totalAnna"></label><input type="hidden"
                                                    name="totalAnna" id="totalAnna" value="0"></th>
                                            <th scope="col"><label id="totalPaisa"></label><input type="hidden"
                                                    name="totalPaisa" id="totalPaisa" value="0"></th>
                                            <th scope="col"><label id="totalDam"></label><input type="hidden"
                                                    name="totalDam" id="totalDam" value="0"></th>
                                            <th scope="col"><label id="totalSqM"></label><input type="hidden"
                                                    name="totalSqM" id="totalSqM" value="0"></th>
                                            <th scope="col"><label id="totalRAPD"></label><input type="hidden"
                                                    name="totalRAPD" id="totalRAPD" value="0"></th>
                                            <th scope="col"><label id="totalSqF"></label><input type="hidden"
                                                    name="totalSqF" id="totalSqF" value="0"></th>
                                            <th scope="col"><label id="totalAreaInAnna"></label> <input
                                                    type="hidden" name="totalAreaInAnna" id="totalAreaInAnna"
                                                    value="0"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(B) AREA OF LAND BASED ON ACTUAL MEASUREMENT</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area Symbol</label>
                                <select class="form-control selectbox" name="areaSymbol" id="areaSymbol">
                                    <option disabled selected="selected">Select Area Symbol</option>
                                    <option value="Triangle 1">Triangle 1</option>
                                    <option value="Triangle 2">Triangle 2</option>
                                    <option value="Triangle 3">Triangle 3</option>
                                    <option value="Triangle 4">Triangle 4</option>
                                    <option value="Triangle 5">Triangle 5</option>
                                    <option value="Triangle 6">Triangle 6</option>
                                    <option value="Triangle 7">Triangle 7</option>
                                    <option value="Triangle 8">Triangle 8</option>
                                    <option value="Triangle 9">Triangle 9</option>
                                    <option value="Triangle 10">Triangle 10</option>
                                    <option value="Triangle 11">Triangle 11</option>
                                    <option value="Triangle 12">Triangle 12</option>
                                    <option value="Triangle 13">Triangle 13</option>
                                    <option value="Triangle 14">Triangle 14</option>
                                    <option value="Triangle 15">Triangle 15</option>
                                    <option value="Triangle 16">Triangle 16</option>
                                    <option value="Triangle 17">Triangle 17</option>
                                    <option value="Triangle 18">Triangle 18</option>
                                    <option value="Triangle 19">Triangle 19</option>
                                    <option value="Triangle 20">Triangle 20</option>
                                    <option value="Triangle 21">Triangle 21</option>
                                    <option value="Triangle 22">Triangle 22</option>
                                    <option value="Triangle 23">Triangle 23</option>
                                    <option value="Triangle 24">Triangle 24</option>
                                    <option value="Triangle 25">Triangle 25</option>
                                    <option value="Triangle 26">Triangle 26</option>
                                    <option value="Triangle 27">Triangle 27</option>
                                    <option value="Triangle 28">Triangle 28</option>
                                    <option value="Triangle 29">Triangle 29</option>
                                    <option value="Triangle 30">Triangle 30</option>
                                    <option value="Triangle 31">Triangle 31</option>
                                    <option value="Triangle 32">Triangle 32</option>
                                    <option value="Triangle 33">Triangle 33</option>
                                    <option value="Triangle 34">Triangle 34</option>
                                    <option value="Triangle 35">Triangle 35</option>
                                    <option value="Triangle 36">Triangle 36</option>
                                    <option value="Triangle 37">Triangle 37</option>
                                    <option value="Triangle 38">Triangle 38</option>
                                    <option value="Triangle 39">Triangle 39</option>
                                    <option value="Triangle 40">Triangle 40</option>
                                    <option value="Triangle 41">Triangle 41</option>
                                    <option value="Triangle 42">Triangle 42</option>
                                    <option value="Triangle 43">Triangle 43</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1"  style="padding-left:6px;padding-right:6px;">
                                <label>Side A</label>
                                <input type="text" name="sideA" id="sideA" placeholder="Side A"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-1"  style="padding-left:6px;padding-right:6px;">
                                <label>Side B</label>
                                <input type="text" name="sideB" id="sideB" placeholder="Side B"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-1"  style="padding-left:6px;padding-right:6px;">
                                <label>Side C</label>
                                <input type="text" name="sideC" id="sideC" placeholder="Side C"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>S = (a+b+c)/2</label>
                                <input type="text" name="sideS" id="sideS" readonly="readonly"
                                     class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.F</label>
                                <input type="text" name="sqFAPMeasurement" id="sqFAPMeasurement"
                                    readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.M</label>
                                <input type="text" name="sqMAPMeasurement" id="sqMAPMeasurement"
                                    readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2"  style="padding-left:6px;padding-right:6px;">
                                <label>Area in Anna</label>
                                <input type="text" name="areaInAnnaAPMeasurement"
                                    id="areaInAnnaAPMeasurement" readonly="readonly" 
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 5%;max-width: 5%; padding-left: 0px;">
                                <label style="width: 100%;">&nbsp;</label>
                                <button type="button" class="btn btn-info" id="BtnAddAreaAPMeasurement"
                                    style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12">
                                <table class="table table-bordered dataTable" id="TblAreaAsPerMeasurement"
                                    style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="30">Sno</th>
                                            <th scope="col">Area Symbol</th>
                                            <th scope="col">Side A</th>
                                            <th scope="col">Side B</th>
                                            <th scope="col">Side C</th>
                                            <th scope="col">S = (a+b+c)/2</th>
                                            <th scope="col">Area Sq.F</th>
                                            <th scope="col">Area Sq.M</th>
                                            <th scope="col">Area In Anna</th>
                                            <th scope="col">Area in (R-A-P-D)</th>
                                            <th scope="col" width="50">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="2" style="text-align: right;">TOTAL AREA
                                                BASED ON ACTUAL MEASUREMENT</th>
                                            <th scope="col"><label id="LblTotalAreaSideA"></label><input
                                                    type="hidden" name="totalAreaSideA" id="totalAreaSideA"
                                                    value="0"></th>
                                            <th scope="col"><label id="LblTotalAreaSideB"></label><input
                                                    type="hidden" name="totalAreaSideB" id="totalAreaSideB"
                                                    value="0"></th>
                                            <th scope="col"><label id="LblTotalAreaSideC"></label><input
                                                    type="hidden" name="totalAreaSideC" id="totalAreaSideC"
                                                    value="0"></th>
                                            <th scope="col"><label id="LblTotalAreaSideS"></label><input
                                                    type="hidden" name="totalAreaSideS" id="totalAreaSideS"
                                                    value="0"></th>
                                            <th scope="col"><label id="LblTotalSqFAsPerCal"></label><input
                                                    type="hidden" name="totalSqFAsPerCal" id="totalSqFAsPerCal"
                                                    value="0"></th>
                                            <th scope="col"><label id="LblTotalSqMAsPerCal"></label><input
                                                    type="hidden" name="totalSqMAsPerCal" id="totalSqMAsPerCal"
                                                    value="0"></th>
                                            <th scope="col"><label
                                                    id="LblTotalAreaInAnnaAPMeasurement"></label><input type="hidden"
                                                    name="totalAreaInAnnaAPMeasurement"
                                                    id="totalAreaInAnnaAPMeasurement" value="0"></th>
                                            <th scope="col"><label
                                                    id="LblTotalAreaInRPADAsPerMeasurement"></label><input
                                                    type="hidden" name="totalAreaInRPADAsPerMeasurement"
                                                    id="totalAreaInRPADAsPerMeasurement" value="0"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(C) DEDUCTION PART</b>
                                </label>
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Road (Sq.F)</label>
                                <input type="text" name="deductionOfRoadSqF" id="deductionOfRoadSqF"
                                    required="" class="form-control" value="{{ old('deductionOfRoadSqF') ?? 0}}">
                                <input type="hidden" name="afterDeductionOfRoadAreaInAnna"
                                    id="afterDeductionOfRoadAreaInAnna" readonly="readonly" class="form-control"
                                   >
                                <input type="hidden" name="afterDeductionOfRoadAreaInRPAD"
                                    id="afterDeductionOfRoadAreaInRPAD" readonly="readonly" class="form-control"
                                   >
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Land Development (%)</label>
                                <input type="text" name="landDevelopmentPercent" id="landDevelopmentPercent"
                                    required="" class="form-control" value="{{ old('landDevelopmentPercent') ?? 0}}">
                                <input type="hidden" name="landDevelopmentSqF" id="landDevelopmentSqF"
                                    required="" class="form-control">
                                <input type="hidden" name="afterLandDevelopmentAreaInAnna"
                                    id="afterLandDevelopmentAreaInAnna" readonly="readonly" class="form-control"
                                   >
                                <input type="hidden" name="afterLandDevelopmentAreaInRPAD"
                                    id="afterLandDevelopmentAreaInRPAD" readonly="readonly" class="form-control"
                                   >
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>High Tension (Sq.F)</label>
                                <input type="text" name="deductionForHighTensionSqF"
                                    id="deductionForHighTensionSqF" required="" class="form-control"
                                    value="{{ old('deductionForHighTensionSqF') ?? 0}}">
                                    @error('deductionForHighTensionSqF')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                <input type="hidden" name="afterHighTensionAreaInAnna"
                                    id="afterHighTensionAreaInAnna" readonly="readonly" class="form-control"
                                   >
                                <input type="hidden" name="afterHighTensionAreaInRPAD"
                                    id="afterHighTensionAreaInRPAD" readonly="readonly" class="form-control"
                                   >
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Low Land (Sq.F)</label>
                                <input type="text" name="deductionForLowLandSqF" id="deductionForLowLandSqF"
                                    required="" class="form-control" value="{{ old('deductionForLowLandSqF') ?? 0}}">
                                    @error('deductionForLowLandSqF')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                <input type="hidden" name="afterLowLandAreaInAnna" id="afterLowLandAreaInAnna"
                                    readonly="readonly" class="form-control">
                                <input type="hidden" name="afterLowLandAreaInRPAD" id="afterLowLandAreaInRPAD"
                                    readonly="readonly" class="form-control">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>River (Sq.F)</label>
                                <input type="text" name="deductionForRiverSqF" id="deductionForRiverSqF"
                                    required="" class="form-control" value="{{ old('deductionForRiverSqF') ?? 0}}">
                                    @error('deductionForRiverSqF')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                <input type="hidden" name="afterRiverAreaInAnna" id="afterRiverAreaInAnna"
                                    readonly="readonly" class="form-control">
                                <input type="hidden" name="afterRiverAreaInRPAD" id="afterRiverAreaInRPAD"
                                    readonly="readonly" class="form-control">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Boundry Correction %</label>
                                <input type="text" name="deductionForBoundryCorrection"
                                    id="deductionForBoundryCorrection" required="" class="form-control"
                                    value="{{ old('deductionForBoundryCorrection') ?? 0}}">
                                    @error('deductionForBoundryCorrection')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                <input type="hidden" name="deductionForBoundryCorrectionSqF"
                                    id="deductionForBoundryCorrectionSqF" required="" class="form-control"
                                   >
                                <input type="hidden" name="afterBoundryCorrectionAreaInAnna"
                                    id="afterBoundryCorrectionAreaInAnna" readonly="readonly" class="form-control"
                                   >
                                <input type="hidden" name="afterBoundryCorrectionAreaInRPAD"
                                    id="afterBoundryCorrectionAreaInRPAD" readonly="readonly" class="form-control"
                                   >
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label style="padding-right:0px; font-size:12px;">Irregular Shape/Sloppy %</label>
                                <input type="text" name="deductionForIrregularShapeSloppyLand"
                                    id="deductionForIrregularShapeSloppyLand" required="" class="form-control"
                                    value="{{ old('deductionForIrregularShapeSloppyLand') ?? 0}}">
                                    @error('deductionForIrregularShapeSloppyLand')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                <input type="hidden" name="afterIrregularShapeSloppyLandSqF"
                                    id="afterIrregularShapeSloppyLandSqF" required="" class="form-control"
                                   >
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInAnna"
                                    id="afterIrregularShapeSloppyLandAreaInAnna" readonly="readonly"
                                    class="form-control">
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInRPAD"
                                    id="afterIrregularShapeSloppyLandAreaInRPAD" readonly="readonly"
                                    class="form-control">
                            </div>
                            <div class="clearfix" style="width: 100%;"></div>

                            <div class="form-group col-md-1" style="flex: 10%;max-width: 10%;">
                                <label>&nbsp;</label>
                                <label style="margin-bottom: 0px; text-transform: uppercase;">
                                    <b>Consideration</b></label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Sq.M)</label>
                                <input type="text" name="sqMAPConsideration" id="sqMAPConsideration"
                                  value="{{ old('sqMAPConsideration')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (R-A-P-D)</label>
                                <input type="text" name="rAPDAPConsideration" id="rAPDAPConsideration"
                                value="{{ old('rAPDAPConsideration')}}"   required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Sq.F)</label>
                                <input type="text" name="sqFAPConsideration" id="sqFAPConsideration"
                                value="{{ old('sqFAPConsideration')}}"   required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Anna)</label>
                                <input type="text" name="annaAPConsideration" id="annaAPConsideration"
                                value="{{ old('annaAPConsideration')}}"    required="" class="form-control" readonly="readonly" >
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(D) RATE OF LAND</b>
                                </label>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Government Rate of Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-1 mb-2"></div>
                            <div class="form-group col-md-5 mb-2">
                                <label
                                    style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase; padding-left: 32px;">
                                    <b><i class="fa fa-hashtag"></i> Market Rate of Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPGovRate" id="perSqFAPGovRate"
                                value="{{ old('perSqFAPGovRate')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Gov.Page <span class="required">*</span></label>
                                <input type="text" name="govPage" id="govPage" required=""
                                value="{{ old('govPage')}}"     placeholder="Gov.Page" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPGovRate" id="perAnnaAPGovRate"
                                value="{{ old('perAnnaAPGovRate')}}"   required="" placeholder="Rate/Anna" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPGovRate" id="perRopaniAPGovRate"
                                value="{{ old('perRopaniAPGovRate')}}"   required="" readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-1"></div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPMarketRate" id="perSqFAPMarketRate"
                                value="{{ old('perSqFAPMarketRate')}}"   required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPMarketRate" id="perAnnaAPMarketRate"
                                value="{{ old('perAnnaAPMarketRate')}}"   required="" placeholder="Rate/Anna" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPMarketRate" id="perRopaniAPMarketRate"
                                value="{{ old('perRopaniAPMarketRate')}}"  required="" readonly="readonly"  class="form-control">
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Fair Market Rate</b>
                                </label>
                            </div>
                            <div class="form-group col-md-1 mb-2"></div>
                            <div class="form-group col-md-5 mb-2">
                                <label
                                    style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase; padding-left: 32px;">
                                    <b><i class="fa fa-hashtag"></i> Distress Land Rate</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPFairRate" id="perSqFAPFairRate"
                                value="{{ old('perSqFAPFairRate')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPFairRate" id="perAnnaAPFairRate"
                                value="{{ old('perAnnaAPFairRate')}}"  required="" readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPFairRate" id="perRopaniAPFairRate"
                                value="{{ old('perRopaniAPFairRate')}}"  required="" readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="flex: 21.5%;max-width: 21.5%;"></div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPDistressRate" id="perSqFAPDistressRate"
                                value="{{ old('perSqFAPDistressRate')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPDistressRate" id="perAnnaAPDistressRate"
                                value="{{ old('perAnnaAPDistressRate')}}"  required="" readonly="readonly"  class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPDistressRate"  id="perRopaniAPDistressRate" required="" readonly="readonly"
                                value="{{ old('perRopaniAPDistressRate')}}"   class="form-control">
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Total Value of Property Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Government Value of Land</label>
                                <input type="text" name="governmentValueOfLand" id="governmentValueOfLand"
                                value="{{ old('governmentValueOfLand')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Commercial Value of Land</label>
                                <input type="text" name="commercialValueOfLand" id="commercialValueOfLand"
                                value="{{ old('commercialValueOfLand')}}" required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fair Market Value of Land</label>
                                <input type="text" name="fairMarketValueOfLand" id="fairMarketValueOfLand"
                                value="{{ old('fairMarketValueOfLand')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Distress Value of Land</label>
                                <input type="text" name="distressValueOfLand" id="distressValueOfLand"
                                value="{{ old('distressValueOfLand')}}"  required="" class="form-control" readonly="readonly" >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fair Market Value Land &amp; Building</label>
                                <input type="text" name="fairMarketValueOfLandAndBuimding"
                                value="{{ old('fairMarketValueOfLandAndBuimding')}}"  id="fairMarketValueOfLandAndBuimding" class="form-control" readonly="readonly"
                                    >
                            </div>
                            <div class="form-group col-md-2">
                                <label>Distrs Market Value Land &amp; Building</label>
                                <input type="text" name="totalDistressValueOfLandAndBuimding"
                                value="{{ old('totalDistressValueOfLandAndBuimding')}}"  id="totalDistressValueOfLandAndBuimding" class="form-control"
                                    readonly="readonly" >
                            </div>

                            <div id="BuildingArea" class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-2">
                                        <label style="color: #dc1de9;margin-bottom: 0px;">
                                            <h6><b>3 BUILDING CALCULATIONS</b></h6>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2"
                                        style="flex: 14%;max-width: 14%; padding-right:0px;">
                                        <label>Floor</label>
                                        <select class="form-control selectbox" name="floor" id="floor">
                                            <option disabled selected="selected">--Select Floor--</option>
                                            <option value="Semi Basement">Semi Basement</option>
                                            <option value="Basement">Basement</option>
                                            <option value="Ground Floor">Ground Floor</option>
                                            <option value="First Floor">First Floor</option>
                                            <option value="Second Floor">Second Floor</option>
                                            <option value="Third Floor">Third Floor</option>
                                            <option value="Fourth Floor">Fourth Floor</option>
                                            <option value="Fifth Floor">Fifth Floor</option>
                                            <option value="Sixth Floor">Sixth Floor</option>
                                            <option value="Seventh Floor">Seventh Floor</option>
                                            <option value="Top Floor">Top Floor</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2"
                                        style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Area (Per Sq Ft)</label>
                                        <input type="text" name="floorAreaInSqF" id="floorAreaInSqF"
                                          placeholder="Area (Per Sq Ft)" class="form-control">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 8%;max-width: 8%; padding-right:0px;">
                                        <label>Rate</label>
                                        <input type="text" name="floorRate" id="floorRate"
                                          placeholder="Rate" class="form-control">
                                    </div>
                                    <div class="form-group col-md-1"
                                        style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Amount</label>
                                        <input type="text" name="floorAmount" id="floorAmount"
                                         readonly="readonly"  class="form-control">
                                    </div>
                                    <div class="form-group col-md-2"
                                        style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Floor Age</label>
                                        <input type="text" name="floorAge" id="floorAge"
                                         placeholder="Building Age" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2"
                                        style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Depriciation %</label>
                                        <input type="text" name="floorDepriciationPercentage"
                                         id="floorDepriciationPercentage" placeholder="Depriciation %"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-2"
                                        style="flex: 13%;max-width: 13%; padding-right:0px;">
                                        <label>Sanitary Pulumbing%</label>
                                        <input type="text" name="sanitaryPulumbingPercentage"
                                         id="sanitaryPulumbingPercentage" placeholder="" class="form-control"
                                           >
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 10%;max-width: 10%;">
                                        <label>Electric Work%</label>
                                        <input type="text" name="electricityWorkPercentage"
                                         id="electricityWorkPercentage" placeholder="" class="form-control"
                                           >
                                    </div>
                                    <div class="form-group col-md-1"
                                        style="flex: 8%;max-width: 8%; padding-left:0px; padding-right:0px;">
                                        <label>Total Amount</label>
                                        <input type="text" name="floorNetAmount" id="floorNetAmount"
                                         readonly="readonly"  class="form-control">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 5%;max-width: 5%; padding-right:0px;">
                                        <label style="width: 100%;">&nbsp;</label>
                                        <button type="button" class="btn btn-info btn-sm"
                                            id="BtnAddBuildingCalculation" style="padding: 2px 5px;">ADD</button>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <table class="table table-bordered dataTable" id="TblBuildingCalculation"
                                            style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" width="30">Sno</th>
                                                    <th scope="col">Floor</th>
                                                    <th scope="col">Area (/SqF)</th>
                                                    <th scope="col">Rate</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Building Age</th>
                                                    <th scope="col">Depric %</th>
                                                    <th scope="col">Sanitary%</th>
                                                    <th scope="col">Electric%</th>
                                                    <th scope="col">Net Floor Amt</th>
                                                    <th scope="col">Depriciation Amt</th>
                                                    <th scope="col">Fair Market Val</th>
                                                    <th scope="col">Distress Val</th>
                                                    <th scope="col" width="50">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="thead-light">
                                                <tr>
                                                    <th scope="col" colspan="2" style="text-align: right;">TOTAL
                                                    </th>
                                                    <th scope="col"><label
                                                            id="LblTotalBuildingAreaSqF"></label><input type="hidden"
                                                            name="totalBuildingAreaSqF" id="totalBuildingAreaSqF"
                                                            value="0"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"><label id="LblTotalBuildingAmount"></label><input
                                                            type="hidden" name="totalBuildingAmount"
                                                            id="totalBuildingAmount" value="0"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"><label
                                                            id="LblTotalNetBuildingAmount"></label><input type="hidden"
                                                            name="totalNetBuildingAmount"
                                                            id="totalNetBuildingAmount" value="0"></th>
                                                    <th scope="col"><label
                                                            id="LblTotalBuildingDepriciation"></label><input
                                                            type="hidden" name="totalBuildingDepriciation"
                                                            id="totalBuildingDepriciation" value="0"></th>
                                                    <th scope="col"><label
                                                            id="LblTotalBuildingFairMarketValue"></label><input
                                                            type="hidden" name="totalBuildingFairMarketValue"
                                                            id="totalBuildingFairMarketValue" value="0"></th>
                                                    <th scope="col"><label
                                                            id="LblTotalBuildingDistressValue"></label><input
                                                            type="hidden" name="totalBuildingDistressValue"
                                                            id="totalBuildingDistressValue" value="0"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Construction Estimate Value <span class="required">*</span></label>
                                        <input type="text" name="constructionEstimateValue"
                                            id="constructionEstimateValue" placeholder="Construction Estimate Value"
                                            class="form-control" required="" value="{{ old('constructionEstimateValue') ?? 0}}">
                                    </div>
                                    <input type="hidden" name="constructionDistressValue" 
                                        id="constructionDistressValue"  readonly="readonly"
                                        class="form-control">
                                    <input type="hidden" name="totalDistressValueOfBuilding"
                                        id="totalDistressValueOfBuilding"  readonly="readonly"
                                        class="form-control">
                                    <div class="form-group col-md-3">
                                        <label>Construction Approval Date (BS)</label>
                                        <input type="text" name="buildingConstructionApprovalDate"  value="{{ old('buildingConstructionApprovalDate')}}"
                                            id="buildingConstructionApprovalDate" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Year Construction Complite(BCC)</label>
                                        <input type="text" name="yearOfConstructionComplite" value="{{ old('yearOfConstructionComplite')}}"
                                            id="yearOfConstructionComplite" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> 
                                            <i class="fa fa-info-circle" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Ex:- 800"></i> 
                                                Area As Per Construction
                                            </label>
                                        <input type="text" name="totalAreaAsPerConstruction"
                                            id="totalAreaAsPerConstruction" required="" class="form-control"
                                            value="{{ old('totalAreaAsPerConstruction') ?? 0}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>4 TECHNICAL DETAIL</b></h6>
                                </label>
                            </div>
                            <div class="form-group col-md-12 mb-2">
                                <label style="margin-bottom: 0px;">
                                    <b style="color: #202ed6;text-transform: uppercase;">(A) PERMANET OF THE
                                        BOUNDARIES</b><span style="color: #575656;"><sub> As per government</sub> </span>
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Kita No</label>
                                <input type="text" name="boundariesKitaNo" id="boundariesKitaNo"
                                    placeholder="Kita No" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>East</label>
                                <input type="text" name="eastAPBoundaries" id="eastAPBoundaries"
                                    placeholder="East" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>West</label>
                                <input type="text" name="westAPBoundaries" id="westAPBoundaries"
                                    placeholder="West" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>North</label>
                                <input type="text" name="northAPBoundaries" id="northAPBoundaries"
                                    placeholder="North" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>South</label>
                                <input type="text" name="southAPBoundaries" id="southAPBoundaries"
                                    placeholder="South" class="form-control">
                            </div>
                            <div class="form-group col-md-2 pl-0">
                                <label style="width: 100%;">&nbsp;</label>
                                <button type="button" class="btn btn-info" id="BtnAddBoundariesAsPerKitaNo"
                                    style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12">
                                <table class="table table-bordered dataTable" id="TblBoundariesAsPerKitaNo"
                                    style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="30">Sno</th>
                                            <th scope="col">Kita No</th>
                                            <th scope="col">East</th>
                                            <th scope="col">West</th>
                                            <th scope="col">North</th>
                                            <th scope="col">South</th>
                                            <th scope="col" width="50">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-12 mb-2">
                                <label style="margin-bottom: 0px;">
                                    <b style="color: #202ed6;text-transform: uppercase;">(B) PERMANET OF THE
                                        BOUNDARIES</b><span style="color: #575656;"><sub> As per the site visit</sub>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Kita No</label>
                                <input type="text" name="aPSiteVisitBoundariesKitaNo"
                                    id="aPSiteVisitBoundariesKitaNo" placeholder="Kita No" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>East</label>
                                <input type="text" name="eastAPSiteVisitBoundaries"
                                    id="eastAPSiteVisitBoundaries" placeholder="East" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>West</label>
                                <input type="text" name="westAPSiteVisitBoundaries"
                                    id="westAPSiteVisitBoundaries" placeholder="West" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>North</label>
                                <input type="text" name="northAPSiteVisitBoundaries"
                                    id="northAPSiteVisitBoundaries" placeholder="North" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>South</label>
                                <input type="text" name="southAPSiteVisitBoundaries"
                                    id="southAPSiteVisitBoundaries" placeholder="South" class="form-control">
                            </div>
                            <div class="form-group col-md-2 pl-0">
                                <label style="width:100%">&nbsp;</label>
                                <button type="button" class="btn btn-info" id="BtnAddBoundariesAsPerSiteVisit"
                                    style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12">
                                <table class="table table-bordered dataTable" id="TblBoundariesAsPerSiteVisit"
                                    style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="30">Sno</th>
                                            <th scope="col">Kita No</th>
                                            <th scope="col">East</th>
                                            <th scope="col">West</th>
                                            <th scope="col">North</th>
                                            <th scope="col">South</th>
                                            <th scope="col" width="50">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group col-md-4" style="padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Ex:- 500 M From Shankhamul Chok and 1000M From Baneshwor Chok"></i>
                                    Location &amp; Access of The Land<span class="required">*</span></label>
                                <input type="text" name="locationOfAccessLand" id="locationOfAccessLand"
                                   value="{{old('locationOfAccessLand')}}" required="" placeholder="" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Kathmandu"></i>
                                    District <span class="required">*</span></label>
                                <input type="text" name="locationDistrict" id="locationDistrict"
                                value="{{old('locationDistrict')}}" required="" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>V.D.C/Municipality</label>
                                    <select class="form-control" name="vdcType" id="vdcType">
                                        <option value="Rural Municipality" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Rural Municipality
                                        </option>
                                        <option value="Municipality">Municipality</option>
                                        <option value="Sub Metropolitan City">Sub Metropolitan City</option>
                                        <option value="Mertopolitan City">Mertopolitan City</option>
                                    </select>
                                
                            </div>
                            <div class="form-group col-md-4" style="max-width: 450px; padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Ex:- Shankhamul -31 , Kathmandu - 31 Kathmandu Meropolitan City"></i>
                                    Address of Land/Property(Property Location)<span
                                        class="required">*</span></label>
                                <input type="text" name="addressOfLand" id="addressOfLand" required=""
                                value="{{old('locationOfAccessLand')}}" class="form-control">
                            </div>
                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b>(C) Accessibility with</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 12 Feet"></i>
                                    Road Size <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithRoadSize"
                                value="{{old('accessibilityWithRoadSize')}}" id="accessibilityWithRoadSize" required="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    River <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithRiver" id="accessibilityWithRiver"
                                value="{{old('accessibilityWithRiver')}}" required="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    High Tension Line <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithHighTension"
                                value="{{old('accessibilityWithHighTension')}}" id="accessibilityWithHighTension" required="" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type of Region</label>
                                <select class="form-control selectbox" name="typeOfRegion" id="typeOfRegion">
                                    <option value="Residential" {{ old('typeOfRegion') == "Residential" ?'selected' : ''}}>Residential</option>
                                    <option value="Commercial" {{ old('typeOfRegion') == "Commercial" ?'selected' : ''}}>Commercial</option>
                                    <option value="Agricultural" {{ old('typeOfRegion') == "Agricultural" ?'selected' : ''}}>Agricultural</option>
                                    <option value="Others (Pls Specify) " {{ old('typeOfRegion') == "Others (Pls Specify)" ?'selected' : ''}}>Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Motorable Access</label>
                                <select class="form-control selectbox" name="motorableAccess"
                                    id="motorableAccess">
                                    <option value="Yes"  {{ old('motorableAccess') == "Yes" ?'selected' : ''}}>Yes</option>
                                    <option value="No"  {{ old('motorableAccess') == "No" ?'selected' : ''}}>No</option>
                                </select>
                            </div>
                           
                           
                            <div class="form-group col-md-2">
                                <label>Property Usage</label>
                                <select class="form-control selectbox" name="buildingShape" id="propertyUsage">
                                    <option value="Residential" {{ old('buildingShape') == "Residential" ?'selected' : ''}} >Residential</option>
                                    <option value="Commercial" {{ old('buildingShape') == "Commercial" ?'selected' : ''}}>Commercial</option>
                                    <option value="Residential &amp; Commercial" {{ old('buildingShape') == "Residential &amp; Commercial" ?'selected' : ''}}>Residential &amp; Commercial</option>
                                    <option value="Others" {{ old('buildingShape') == "Others" ?'selected' : ''}}>Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type of Access</label>
                                <select class="form-control selectbox" name="typeOfAccess" id="typeOfAccess">
                                    <option value="Earthen" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Earthen</option>
                                    <option value="Gravel" {{ old('typeOfAccess') == "Gravel" ?'selected' : ''}} >Gravel</option>
                                    <option value="Black Topped" {{ old('typeOfAccess') == "Black Topped" ?'selected' : ''}} >Black Topped</option>
                                    <option value="RCC" {{ old('typeOfAccess') == "RCC" ?'selected' : ''}} >RCC</option>
                                    <option value="Block Paved" {{ old('typeOfAccess') == "Block Paved" ?'selected' : ''}} >Block Paved</option>
                                    <option value="Goreto Road" {{ old('typeOfAccess') == "Goreto Road" ?'selected' : ''}} >Goreto Road</option>
                                    <option value="Khet (No Road)" {{ old('typeOfAccess') == "Khet (No Road)" ?'selected' : ''}} >Khet (No Road)</option>
                                </select>
                            </div>
                          
                            
                            <input type="hidden" name="holdType" id="holdType" class="form-control"
                                value="Free Hold">
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Rectangular"></i>
                                    Shape</label>
                                <input type="text" name="buildingShape" id="buildingShape"
                                value="{{old('buildingShape')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- East"></i>
                                    Facing</label>
                                <input type="text" name="buildingFacing" id="buildingFacing"
                                value="{{old('buildingFacing')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 8 M"></i>
                                    Frontage</label>
                                <input type="text" name="buildingFrontage" id="buildingFrontage"
                                value="{{old('buildingFrontage')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Level with Road
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Same Level"></i>
                                </label>
                                <input type="text" name="levelWithRoad" id="levelWithRoad"
                                value="{{old('levelWithRoad')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property for the Bank</label>
                                <select class="form-control selectbox" name="propertyForTheBank"
                                    id="propertyForTheBank">
                                    <option value="Recommended" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Recommended</option>
                                    <option value="Not Recommended" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Not Recommended</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>River / Stream near property</label>
                                <select class="form-control selectbox" name="riverStreamNearProperty"
                                    id="riverStreamNearProperty">
                                    <option value="No" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>No</option>
                                    <option value="Yes" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Yes</option>
                                </select>
                            </div>
                           
                            <div class="form-group col-md-2">
                                <label>Heritage Sites Near property</label>
                                <select class="form-control selectbox" name="heritageSitesNearProperty"
                                    id="heritageSitesNearProperty">
                                    <option value="Yes" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Yes</option>
                                    <option value="No" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property Ownership Type</label>
                                <select class="form-control selectbox" name="propertyOwnershipType"
                                    id="propertyOwnershipType">
                                    <option value="Single" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Single</option>
                                    <option value="Joint" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Joint</option>
                                    <option value="Company" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Company</option>
                                    <option value="Individual (Joint Name)" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Individual (Joint Name)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 7 M"></i>
                                    Narrowest Part of Land</label>
                                <input type="text" name="narrowestPartOfLand" id="narrowestPartOfLand"
                                value="{{old('narrowestPartOfLand')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 12 Feet"></i>
                                    Access in the Blue Print</label>
                                <input type="text" name="accessInTheBluePrint" id="accessInTheBluePrint"
                                value="{{old('accessInTheBluePrint')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Right of Way
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 13 Feet"></i>
                                </label>
                                <input type="text" name="rightOfWay" id="rightOfWay" class="form-control"
                                value="{{old('rightOfWay')}}"  required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Frame Structure</label>
                                <select class="form-control selectbox" name="frameStructure"
                                    id="frameStructure">
                                    <option value="Frame Structure" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Frame Structure</option>
                                    <option value="Load Bearing" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Load Bearing</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Any Collateral Fall</label>
                                <select class="form-control selectbox" name="anyCollateralFall"
                                    id="anyCollateralFall">
                                    <option value="No" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Comments</label>
                                <input type="text" name="coments" id="coments" class="form-control"
                                value="{{old('coments')}}" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Valuation For</label>
                                <select class="form-control selectbox" name="valuationFor" id="valuationFor">
                                    <option value="Vacant Land" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Vacant Land</option>
                                    <option value="Land &amp; Building" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Land &amp; Building</option>
                                    <option value="Readymade House" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Readymade House</option>
                                    <option value="Apartments/Duplex" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Apartments/Duplex</option>
                                    <option value="Construction/Extension/Renovation" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Construction/Extension/Renovation
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Coloring And Painting</label>
                                <select class="form-control selectbox" name="coloringAndPainting"
                                    id="coloringAndPainting">
                                    <option value="Painted" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Painted</option>
                                    <option value="Not Painted" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Not Painted</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i>
                                    Flooring Finishing</label>
                                <input type="text" name="flooringFinishing" id="flooringFinishing"
                                value="{{old('flooringFinishing')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i> Inner
                                    Wall Ceiling</label>
                                <input type="text" name="innerWallCeiling" id="innerWallCeiling"
                                value="{{old('innerWallCeiling')}}" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type Of Land</label>
                                <select class="form-control selectbox" name="topography" id="topography">
                                    <option value="Planning" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Planning</option>
                                    <option value="Khet" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Khet</option>
                                    <option value="Flat" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Flat</option>
                                    <option value="Slightly Slope" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Slightly Slope</option>
                                    <option value="Low Land" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Low Land</option>
                                    <option value="Irregural Shape" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Irregural Shape</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Bounded by Brick Wall."></i>
                                    Boundary</label>
                                <input type="text" name="boundary" id="boundary" class="form-control"
                                value="{{old('boundary')}}" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 2 And Half"></i> No Of Floor
                                    (Storie)</label>
                                <input type="text" name="noOfFloorStorie" id="noOfFloorStorie"
                                value="{{old('noOfFloorStorie')}}" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Compound Wall</label>
                                <select class="form-control selectbox" name="compoundWall" id="compoundWall">
                                    <option value="Constructed" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Constructed</option>
                                    <option value="Not Constructed" {{ old('typeOfAccess') == "Earthen" ?'selected' : ''}}>Not Constructed</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Internal Remarks</label>
                                <input type="text" name="internalRemarks" id="internalRemarks"
                                value="{{old('internalRemarks')}}" class="form-control">
                            </div>
                            <input type="hidden" name="isAvailabilityTelephone" id="isAvailabilityTelephone"
                                required="" class="form-control" value="Yes">
                            <input type="hidden" name="isAvailabilityInternet" id="isAvailabilityInternet"
                                required="" class="form-control" value="Yes">
                            <input type="hidden" name="isAvailabilitySewerage" id="isAvailabilitySewerage"
                                required="" class="form-control" value="Yes">
                            <input type="hidden" name="isAvailabilityElectricity"
                                id="isAvailabilityElectricity" required="" class="form-control"
                                value="Yes">
                            <input type="hidden" name="isAvailabilityWaterSupply"
                                id="isAvailabilityWaterSupply" required="" class="form-control"
                                value="Yes">
                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>5 UPLOAD DOCUMENT</b></h6>
                                </label>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                <input type="file" name="UploadPicture" id="UploadPicture">
                                <table class="table table-bordered dataTable" style="width:100%"
                                    id="TblUploadPicture">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="20">Sno</th>
                                            <th scope="col">File Name <a href="#" class="text-danger"
                                                    data-toggle="modal" data-target="#ViewAllPictureModal"> View</a>
                                            </th>
                                            <th scope="col" width="30">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload CAD Jpg Doc</label>
                                <input type="file" name="UploadDocument" id="UploadDocument">
                                <table class="table table-bordered dataTable" style="width:100%"
                                    id="TblUploadDocument">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="20">Sno</th>
                                            <th scope="col">File Name <a href="#" class="text-danger"
                                                    data-toggle="modal" data-target="#ViewAllCADJpgModal"> View</a></th>
                                            <th scope="col" width="30">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Legal Scan Doc</label>
                                <input type="file" name="UploadScanDocument" id="UploadScanDocument">
                                <table class="table table-bordered dataTable" style="width:100%"
                                    id="TblUploadScanDocument">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="20">Sno</th>
                                            <th scope="col">File Name <a href="#" class="text-danger"
                                                    data-toggle="modal" data-target="#ViewAllScanModal"> View</a></th>
                                            <th scope="col" width="30">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Internal CAD Doc</label>
                                <input type="file" name="UploadInternalDocument" id="UploadInternalDocument">
                                <table class="table table-bordered dataTable" style="width:100%"
                                    id="TblUploadInternalDocument">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="20">Sno</th>
                                            <th scope="col">File Name</th>
                                            <th scope="col" width="30">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="button" class="btn btn-info float-right btn-sm ml-3"
                                    id="BtnSaveValuation">Submit</button>
                                <button type="button" class="btn btn-primary float-right btn-sm"
                                    id="BtnSaveValuationAndStay">Submit &amp; Stay</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
       $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();

  $("#success-alert").fadeTo(2000, 1000).slideUp(1000, function(){
    $("#success-alert").slideUp(1000);
  });

  // ----------- Menu -------------
  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
      .parent()
      .hasClass("active")
    ) {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
      .parent()
      .removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
      $(this)
      .parent()
      .addClass("active");
    }
  });

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });

  // ----------- Data Table -------------
  // $('#TblDataTable thead tr').clone(true).appendTo( '#TblDataTable thead' );
  //   $('#TblDataTable thead tr:eq(1) th').each( function (i) {
  //       var title = $(this).text();
  //       $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
  //
  //       $( 'input', this ).on( 'keyup change', function () {
  //           if ( table.column(i).search() !== this.value ) {
  //               table
  //                   .column(i)
  //                   .search( this.value )
  //                   .draw();
  //           }
  //       } );
  //   } );

  var table = $('#TblDataTable').DataTable(
    {
      colReorder: true,
      orderCellsTop: true,
      "autoWidth": false,
      "paging":   false,
      "scrollX": true,
      "sScrollY": "500",
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'print',
          text: "Print",
          //messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.<br>',
          customize: function(win)
          {

            var last = null;
            var current = null;
            var bod = [];

            var css = '@page { size: landscape; }',
            head = win.document.head || win.document.getElementsByTagName('head')[0],
            style = win.document.createElement('style');

            style.type = 'text/css';
            style.media = 'print';

            if (style.styleSheet)
            {
              style.styleSheet.cssText = css;
            }
            else
            {
              style.appendChild(win.document.createTextNode(css));
            }

            head.appendChild(style);
          },
          exportOptions: {
            // columns: ':visible'
            columns: function (idx, data, node) {
              //console.log(node.innerHTML);
              if (node.innerHTML != "#" && node.innerHTML != "Action")
              return ':visible'
            }
          }
        },
        {
          extend: 'excelHtml5',
          text: "Export to Excel",
          exportOptions: {
            columns: function (idx, data, node) {
              if (node.innerHTML != "#" && node.innerHTML != "Action")
              return ':visible'
            }
          }
        }
      ]
    });
    $('#TblDataTable_filter input').addClass('filterClass');

    //-------------- MANGE VALUATION -------------

    $.ajax({
      url: $('#TxtBaseUrl').val() + 'valuation/RandomNumber',
      datatype: "json",
      type: "post",
      contenttype: 'application/json; charset=utf-8',
      data: '',
      async: true,
      success: function (data) {
        CheckSession(data);
        $('#TxtGuidId').val(data);
      },
      error: function (xhr) {
        alert('Error Occured During Data Submission....');
      }
    });

    // $("#TxtRopaniAPLalpurja,#TxtAnnaAPLalpurja,#TxtPaisaAPLalpurja,#TxtDamAPLalpurja").change(function() {
    //   var Ropani = Number($("#TxtRopaniAPLalpurja").val());
    //   var Anna = Number($("#TxtAnnaAPLalpurja").val());
    //   var Paisa = Number($("#TxtPaisaAPLalpurja").val());
    //   var Dam = Number($("#TxtDamAPLalpurja").val());
    //   var SqFAPLalpurja = (Ropani*16*342.25)+(Anna*342.25)+(Paisa*85.6)+(Dam*21.4);
    //   $('#TxtSqFAPLalpurja').val(SqFAPLalpurja.toFixed(2));
    //   $('#TxtSqMAPLalpurja').val((SqFAPLalpurja.toFixed(2)*0.092903).toFixed(2));
    //   $('#TxtRAPDAPLalpurja').val(Ropani+'-'+Anna+'-'+Paisa+'-'+Dam);
    //   $('#TxtAreaInAnnaAPLalpurja').val(Number(SqFAPLalpurja.toFixed(2)/ 342.25).toFixed(2));
    // });

    $("#TxtSqMAPLalpurja").change(function() {
      var SqF = $(this).val()*10.76;
      //console.log('SqF :'+Number(SqF).toFixed(2));
      $('#TxtSqFAPLalpurja').val(($(this).val()*10.76).toFixed(2));
      var TotalRopani = SqF/(16*342.25);
      //console.log('TotalRopani :'+TotalRopani);
      var OnlyRopani = TotalRopani.toString().split(".")[0];
       //console.log('OnlyRopani :'+Number(OnlyRopani).toFixed(2));
       var RemainingRopani = (TotalRopani-OnlyRopani);
       //console.log('RemainingRopani :'+RemainingRopani);
       var TotalAana = RemainingRopani*(16);
       //console.log('TotalAana :'+TotalAana);
       var OnlyAana = TotalAana.toString().split(".")[0];
       //console.log('OnlyAana :'+Number(OnlyAana).toFixed(2));
       var RemainingAana = (TotalAana-OnlyAana);
       //console.log('RemainingAana :'+RemainingAana);
       var RemainingAanaToSQF = RemainingAana*342.25;
       //console.log('RemainingAanaToSQF :'+RemainingAanaToSQF);

       var TotalPaisa = RemainingAanaToSQF/(85.6);
       //console.log('TotalPaisa :'+TotalPaisa);
       var OnlyPaisa = TotalPaisa.toString().split(".")[0];
       //console.log('OnlyPaisa :'+Number(OnlyPaisa).toFixed(2));
       var RemainingPaisa = (TotalPaisa-OnlyPaisa);
       //console.log('RemainingPaisa :'+RemainingPaisa);

       var RemainingPaisaToSQF = RemainingPaisa*85.6;
       //console.log('RemainingPaisaToSQF :'+RemainingPaisaToSQF);
       var OnlyDam = RemainingPaisaToSQF/(21.4);
       //console.log('OnlyDam :'+Number(OnlyDam).toFixed(2));

       //var AreaInAnna = Number(SqF.toFixed(2)/ 342.25).toFixed(2);
       //console.log('AreaInAnna :'+Number(AreaInAnna).toFixed(2));

      $('#TxtRopaniAPLalpurja').val(OnlyRopani);
      $('#TxtAnnaAPLalpurja').val(OnlyAana);
      $('#TxtPaisaAPLalpurja').val(OnlyPaisa);
      $('#TxtDamAPLalpurja').val(Number(OnlyDam).toFixed(2));

       $('#TxtRAPDAPLalpurja').val(Number(OnlyRopani)+'-'+Number(OnlyAana)+'-'+Number(OnlyPaisa)+'-'+Number(OnlyDam).toFixed(2));
       $('#TxtAreaInAnnaAPLalpurja').val(Number(SqF/ 342.25).toFixed(2));

      //console.log(SqF);
    //   total_sqmt = .092903 * SqF, 
    //   total_paisa = SqF / 85.56, 
    //   total_dhur = SqF / 182.25, 
    //   ropaniPart = Math.floor(total_paisa / 64), 
    //   remainingPaisa = total_paisa - 64 * ropaniPart, 
    //   aanaPart = Math.floor(remainingPaisa / 4), 
    //   remainingPaisa -= 4 * aanaPart, 
    //   paisaPart = Math.floor(remainingPaisa), 
    //   remainingPaisa -= paisaPart, 
    //   damPart = 4 * remainingPaisa, 
    //   bighaPart = Math.floor(total_dhur / 400), 
    //   remainingDhur = total_dhur - 400 * bighaPart, 
    //   kathhaPart = Math.floor(remainingDhur / 20), 
    //   remainingDhur -= 20 * kathhaPart, 
    //   dhurPart = remainingDhur, 
    //   damPart = damPart>1?damPart.toFixed(1):0;
    //   $('#TxtRopaniAPLalpurja').val(ropaniPart);
    //   $('#TxtAnnaAPLalpurja').val(aanaPart);
    //   $('#TxtPaisaAPLalpurja').val(paisaPart);
    //   $('#TxtDamAPLalpurja').val(damPart);
    //  // $('#TxtRopaniAPLalpurja').blur();
    //   //console.log(ropaniPart +'-'+ aanaPart +'-'+ paisaPart +'-'+ damPart);
    //   var Ropani = Number($("#TxtRopaniAPLalpurja").val());
    //   var Anna = Number($("#TxtAnnaAPLalpurja").val());
    //   var Paisa = Number($("#TxtPaisaAPLalpurja").val());
    //   var Dam = Number($("#TxtDamAPLalpurja").val());
    //   var SqFAPLalpurja = (Ropani*16*342.25)+(Anna*342.25)+(Paisa*85.6)+(Dam*21.4);
    //   $('#TxtSqFAPLalpurja').val(($(this).val()*10.7639).toFixed(2));
    //   //$('#TxtSqMAPLalpurja').val((SqFAPLalpurja.toFixed(2)*0.092903).toFixed(2));
    //   $('#TxtRAPDAPLalpurja').val(Ropani+'-'+Anna+'-'+Paisa+'-'+Dam);
    //   $('#TxtAreaInAnnaAPLalpurja').val(Number(SqFAPLalpurja.toFixed(2)/ 342.25).toFixed(2));
    });

    $('#BtnAddAreaAPLalpurja').on('click', function() {
      if($('#TxtKitaNo').val()==''){
        alert('Please enter Kita Number');
        $('#TxtKitaNo').focus();
        return;
      }

      var rowCount = $('#TblAreaAsPerLalpurja tbody tr').length;

      if($('#TxtSheetNo').val()=='' && rowCount===0){
        alert('Please enter Sheet Number');
        $('#TxtSheetNo').focus();
        return;
      }

      if($('#TxtSqMAPLalpurja').val()=='' || $('#TxtSqMAPLalpurja').val()==0){
        alert('Please enter area in SM as per lalpurja');
        $('#TxtSqMAPLalpurja').focus();
        return;
      }
      $(this).prop( "disabled", true );
      var formData = {
        GuidId: $('#TxtGuidId').val(),
        KitaNo: $('#TxtKitaNo').val(),
        SheetNo: $('#TxtSheetNo').val(),
        RopaniAPLalpurja: $('#TxtRopaniAPLalpurja').val(),
        AnnaAPLalpurja: $('#TxtAnnaAPLalpurja').val(),
        PaisaAPLalpurja: $('#TxtPaisaAPLalpurja').val(),
        DamAPLalpurja: $('#TxtDamAPLalpurja').val(),
        RAPDAPLalpurja: $('#TxtRAPDAPLalpurja').val(),
        SqFAPLalpurja: $('#TxtSqFAPLalpurja').val(),
        SqMAPLalpurja: $('#TxtSqMAPLalpurja').val(),
        AreaInAnnaAPLalpurja: $('#TxtAreaInAnnaAPLalpurja').val()
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/savetempareaasperlalpurja',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: false,
        success: function (data) {
          CheckSession(data);
          if(data==1){
            var formData1 = {
              GuidId: $('#TxtGuidId').val(),
              ValuationId: $('#TxtValuationId').val()
            };

            $.ajax({
              url: $('#TxtBaseUrl').val() + 'valuation/listtempareaasperlalpurja',
              datatype: "json",
              type: "post",
              contenttype: 'application/json; charset=utf-8',
              data: formData1,
              async: false,
              success: function (data) {
                //console.log(data);
                CheckSession(data);
                var obj = $.parseJSON(data);

                $('#TxtKitaNo,#TxtSheetNo,#TxtRopaniAPLalpurja,#TxtAnnaAPLalpurja,#TxtPaisaAPLalpurja,#TxtDamAPLalpurja,#TxtSqMAPLalpurja,#TxtRAPDAPLalpurja,#TxtSqFAPLalpurja,#TxtAreaInAnnaAPLalpurja').val('');
                $('#TxtKitaNo').focus();
                $("#TblAreaAsPerLalpurja > tbody").find("tr").remove();
                var TotalRopani = 0,TotalAnna = 0,TotalPaisa = 0,TotalDam = 0,TotalRAPD = 0,TotalSqM = 0,TotalSqF = 0,TotalAreaInAnnaAPLalpurja=0;
                $.each(obj, function(i, item) {
                  TotalRopani = TotalRopani + Number(item.RopaniAPLalpurja);
                  TotalAnna = TotalAnna + Number(item.AnnaAPLalpurja);
                  TotalPaisa = TotalPaisa + Number(item.PaisaAPLalpurja);
                  TotalDam = TotalDam + Number(item.DamAPLalpurja);
                  //TotalRAPD = TotalRopani +'-'+TotalAnna+'-'+TotalPaisa+'-'+TotalDam;
                  TotalSqM = TotalSqM + Number(item.SqMAPLalpurja);
                  TotalSqF = TotalSqF + Number(item.SqFAPLalpurja);
                  TotalAreaInAnnaAPLalpurja = TotalAreaInAnnaAPLalpurja + Number(item.AreaInAnnaAPLalpurja);
                  $('#TblAreaAsPerLalpurja > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.KitaNo+'</td><td>'+item.SheetNo+'</td><td>'+item.RopaniAPLalpurja+'</td><td>'+item.AnnaAPLalpurja+'</td><td>'+item.PaisaAPLalpurja+'</td><td>'+item.DamAPLalpurja+'</td><td>'+item.SqMAPLalpurja+'</td><td>'+item.RAPDAPLalpurja+'</td><td>'+item.SqFAPLalpurja+'</td><td>'+item.AreaInAnnaAPLalpurja+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveAreaAsPerLalpurja" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
                });

                var _TotalPaisa =0,_TotalDamFinal=0;
                if(TotalDam>=4){
                  var _Paisa = Number(TotalDam/4).toFixed(2);
                  _TotalPaisa = _Paisa.split(".").shift();
                  _TotalDamFinal = Number((_TotalPaisa * 4))-Number(TotalDam);
                }
                else{
                  _TotalDamFinal = TotalDam;
                }

                var _TotalPaisa1 = Number(TotalPaisa)+Number(_TotalPaisa);
                var _TotalAnna=0,_TotalPisaFinal=0;
                if(_TotalPaisa1>=4){
                  var _Aana = Number(_TotalPaisa1/4).toFixed(2);
                  _TotalAnna = _Aana.split(".").shift();
                  var _TotalPisaFinal = Number(_TotalAnna * 4)-Number(_TotalPaisa1);
                }
                else{
                  _TotalPisaFinal = _TotalPaisa1;
                }

                var _TotalAnna1 = Number(TotalAnna)+Number(_TotalAnna);
                var _TotalRopani=0,_TotalAnnaFinal=0;
                if(_TotalAnna1>=16){
                  var _TotalAnna11 = Number(_TotalAnna1/16).toFixed(2);
                  _TotalRopani = _TotalAnna11.split(".").shift();
                  var _TotalAnnaFinal = Number(_TotalRopani * 16)-Number(_TotalAnna1);
                }
                else{
                  _TotalAnnaFinal = _TotalAnna1;
                }

                TotalRAPD = Number(TotalRopani)+Number(_TotalRopani) +'-'+Number(_TotalAnnaFinal.toString().replace("-", ""))+'-'+Number(_TotalPisaFinal.toString().replace("-", ""))+'-'+Number(_TotalDamFinal.toFixed(2).toString().replace("-", ""));

                $('#LblTotalRopani').text(TotalRopani.toFixed(2)); $('#TxtTotalRopani').val(TotalRopani.toFixed(2));
                $('#LblTotalAnna').text(TotalAnna.toFixed(2)); $('#TxtTotalAnna').val(TotalAnna.toFixed(2));
                $('#LblTotalPaisa').text(TotalPaisa.toFixed(2)); $('#TxtTotalPaisa').val(TotalPaisa.toFixed(2));
                $('#LblTotalDam').text(TotalDam.toFixed(2)); $('#TxtTotalDam').val(TotalDam.toFixed(2));
                $('#LblTotalRAPD').text(TotalRAPD); $('#TxtTotalRAPD').val(TotalRAPD);
                $('#LblTotalSqM').text(TotalSqM.toFixed(2)); $('#TxtTotalSqM').val(TotalSqM.toFixed(2));
                $('#LblTotalSqF').text(TotalSqF.toFixed(2)); $('#TxtTotalSqF').val(TotalSqF.toFixed(2));
                $('#LblTotalAreaInAnna').text(TotalAreaInAnnaAPLalpurja.toFixed(2)); $('#TxtTotalAreaInAnna').val(TotalAreaInAnnaAPLalpurja.toFixed(2));
                CalculateConsiderationArea();
                CalculationAreaRate();
              },
              error: function (xhr) {
                alert('Error Occured During Data Submission....');
              }
            });
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
      $(this).prop( "disabled", false);
    });

    $(document.body).on('click','.BtnRemoveAreaAsPerLalpurja',function(){
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempareaasperlalpurja',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $('#TxtKitaNo').focus();
          $("#TblAreaAsPerLalpurja > tbody").find("tr").remove();
          var TotalRopani = 0,TotalAnna = 0,TotalPaisa = 0,TotalDam = 0,TotalRAPD=0,TotalSqM = 0,TotalSqF = 0,TotalAreaInAnnaAPLalpurja=0;
          $.each(obj, function(i, item) {
            TotalRopani = TotalRopani + Number(item.RopaniAPLalpurja);
            TotalAnna = TotalAnna + Number(item.AnnaAPLalpurja);
            TotalPaisa = TotalPaisa + Number(item.PaisaAPLalpurja);
            TotalDam = TotalDam + Number(item.DamAPLalpurja);
            TotalSqM = TotalSqM + Number(item.SqMAPLalpurja);
            TotalSqF = TotalSqF + Number(item.SqFAPLalpurja);
            TotalAreaInAnnaAPLalpurja = TotalAreaInAnnaAPLalpurja + Number(item.AreaInAnnaAPLalpurja);
            $('#TblAreaAsPerLalpurja > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.KitaNo+'</td><td>'+item.SheetNo+'</td><td>'+item.RopaniAPLalpurja+'</td><td>'+item.AnnaAPLalpurja+'</td><td>'+item.PaisaAPLalpurja+'</td><td>'+item.DamAPLalpurja+'</td><td>'+item.SqMAPLalpurja+'</td><td>'+item.RAPDAPLalpurja+'</td><td>'+item.SqFAPLalpurja+'</td><td>'+item.AreaInAnnaAPLalpurja+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveAreaAsPerLalpurja" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
          });

          var _TotalPaisa =0,_TotalDamFinal=0;
          if(TotalDam>=4){
            var _TotalDam = Number(TotalDam/4).toFixed(2);
            _TotalPaisa = _TotalDam.split(".").shift();
            _TotalDamFinal = Number((_TotalPaisa * 4))-Number(TotalDam);
          }
          else{
            _TotalDamFinal = TotalDam;
          }

          var _TotalPaisa1 = Number(TotalPaisa)+Number(_TotalPaisa);
          var _TotalAnna=0,_TotalPisaFinal=0;
          if(_TotalPaisa1>=4){
            var _TotalPaisa11 = Number(_TotalPaisa1/4).toFixed(2);
            _TotalAnna = _TotalPaisa11.split(".").shift();
            var _TotalPisaFinal = Number(_TotalAnna * 4)-Number(_TotalPaisa1);
          }
          else{
            _TotalPisaFinal = _TotalPaisa1;
          }

          var _TotalAnna1 = Number(TotalAnna)+Number(_TotalAnna);
          var _TotalRopani=0,_TotalAnnaFinal=0;
          if(_TotalAnna1>=16){
            var _TotalAnna11 = Number(_TotalAnna1/16).toFixed(2);
            _TotalRopani = _TotalAnna11.split(".").shift();
            var _TotalAnnaFinal = Number(_TotalRopani * 16)-Number(_TotalAnna1);
          }
          else{
            _TotalAnnaFinal = _TotalAnna1;
          }

          TotalRAPD = Number(TotalRopani)+Number(_TotalRopani) +'-'+Number(_TotalAnnaFinal.toString().replace("-", ""))+'-'+Number(_TotalPisaFinal.toString().replace("-", ""))+'-'+Number(_TotalDamFinal.toFixed(2).toString().replace("-", ""));

          $('#LblTotalRopani').text(TotalRopani.toFixed(2)); $('#TxtTotalRopani').val(TotalRopani.toFixed(2));
          $('#LblTotalAnna').text(TotalAnna.toFixed(2)); $('#TxtTotalAnna').val(TotalAnna.toFixed(2));
          $('#LblTotalPaisa').text(TotalPaisa.toFixed(2)); $('#TxtTotalPaisa').val(TotalPaisa.toFixed(2));
          $('#LblTotalDam').text(TotalDam.toFixed(2)); $('#TxtTotalDam').val(TotalDam.toFixed(2));
          $('#LblTotalRAPD').text(TotalRAPD); $('#TxtTotalRAPD').val(TotalRAPD);
          $('#LblTotalSqM').text(TotalSqM.toFixed(2)); $('#TxtTotalSqM').val(TotalSqM.toFixed(2));
          $('#LblTotalSqF').text(TotalSqF.toFixed(2)); $('#TxtTotalSqF').val(TotalSqF.toFixed(2));
          $('#LblTotalAreaInAnna').text(TotalAreaInAnnaAPLalpurja.toFixed(2)); $('#TxtTotalAreaInAnna').val(TotalAreaInAnnaAPLalpurja.toFixed(2));
          CalculateConsiderationArea();
          CalculationAreaRate();
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $("#TxtAnnaAPLalpurja").blur(function(){ if($(this).val()>16){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true ); return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });
    $("#TxtPaisaAPLalpurja").blur(function(){ if($(this).val()>4){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true );  return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });
    $("#TxtDamAPLalpurja").blur(function(){ if($(this).val()>4){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true ); return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });

    $("#TxtConstructionEstimateValue").blur(function(){
      var _v3 = Number($('#TxtBankId').attr("myfairmarketvalue"));
      //var k =Number($(this).val());
      $("#TxtConstructionDistressValue").val(Number((Number($(this).val())/100)*_v3).toFixed(2));
      $("#TxtTotalDistressValueOfBuilding").val(Number(((Number($(this).val())+Number($("#TxtFairMarketValueOfLand").val()))/100)*_v3).toFixed(2));
    });


    $("#TxtSideA,#TxtSideB,#TxtSideC").change(function() {
      var SideA = Number($("#TxtSideA").val());
      var SideB = Number($("#TxtSideB").val());
      var SideC = Number($("#TxtSideC").val());
      var SideS = (SideA+SideB+SideC)/2;
      $('#TxtSideS').val(SideS.toFixed(2));
      var _a = Number(SideS)*(Number(SideS)-Number(SideA))*(Number(SideS)-Number(SideB))*(Number(SideS)-Number(SideC));
      $('#TxtSqFAPMeasurement').val(Math.sqrt(Number(Math.abs(_a))).toFixed(2));
      $('#TxtSqMAPMeasurement').val((Number($('#TxtSqFAPMeasurement').val())*0.092903).toFixed(2));
      var SqFAPMeasurement = $('#TxtSqFAPMeasurement').val();
      $('#TxtAreaInAnnaAPMeasurement').val(Number(SqFAPMeasurement/342.25).toFixed(2));
    });

    $('#BtnAddAreaAPMeasurement').on('click', function() {
      if($('#TxtAreaSymbol').val()==''){ alert('Please slect Area Symbol.'); $('#TxtAreaSymbol').focus(); return; }
      if($('#TxtSideA').val()==''){ alert('Please enter Side A.'); $('#TxtSideA').focus(); return; }
      if($('#TxtSideB').val()==''){ alert('Please enter Side B.'); $('#TxtSideB').focus(); return; }
      if($('#TxtSideC').val()==''){ alert('Please enter Side C.'); $('#TxtSideC').focus(); return; }
      if($('#TxtSqFAPMeasurement').val()==''){ alert('Invalid Area.'); $('#TxtSideA').focus(); return; }
      $(this).prop( "disabled", true );
      var formData = {
        GuidId: $('#TxtGuidId').val(),
        AreaSymbol: $('#TxtAreaSymbol').val(),
        SideA: $('#TxtSideA').val(),
        SideB: $('#TxtSideB').val(),
        SideC: $('#TxtSideC').val(),
        SideS: $('#TxtSideS').val(),
        SqFAPMeasurement: $('#TxtSqFAPMeasurement').val(),
        SqMAPMeasurement: $('#TxtSqMAPMeasurement').val(),
        AreaInAnnaAPMeasurement: $('#TxtAreaInAnnaAPMeasurement').val(),
        AreaInRPADAsPerMeasurement: SqFToRAPD(Number($('#TxtSqFAPMeasurement').val()).toFixed(2)),
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/savetempareaaspercalculation',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: false,
        success: function (data) {
          CheckSession(data);
          if(data==1){
            var formData1 = {
              GuidId: $('#TxtGuidId').val(),
              ValuationId: $('#TxtValuationId').val()
            };
            $.ajax({
              url: $('#TxtBaseUrl').val() + 'valuation/listtempareaaspercalculation',
              datatype: "json",
              type: "post",
              contenttype: 'application/json; charset=utf-8',
              data: formData1,
              async: false,
              success: function (data) {
                CheckSession(data);
                $('#TxtAreaSymbol,#TxtSideA,#TxtSideB,#TxtSideC,#TxtSideS,#TxtSqFAPMeasurement,#TxtSqMAPMeasurement,#TxtAreaInAnnaAPMeasurement').val('');
                BindAreaAsPerCalculation(data);
              },
              error: function (xhr) {
                alert('Error Occured During Data Submission....');
              }
            });
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
      $(this).prop( "disabled", false);
    });

    $(document.body).on('click','.BtnRemoveAreaAsPerCal',function(){
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempareaaspercalculation',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          BindAreaAsPerCalculation(data);
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    function BindAreaAsPerCalculation(data){
      var obj = $.parseJSON(data);
      $('#TxtAreaSymbol').focus();
      $("#TblAreaAsPerMeasurement > tbody").find("tr").remove();
      var TotalSideA = 0,TotalSideB = 0,TotalSideC = 0,TotalSideS = 0,TotalSqFAPMeasurement = 0,TotalSqMAPMeasurement = 0,TotalAreaInAnnaAPMeasurement=0;
      $.each(obj, function(i, item) {
        TotalSideA = TotalSideA + Number(item.SideA);
        TotalSideB = TotalSideB + Number(item.SideB);
        TotalSideC = TotalSideC + Number(item.SideC);
        TotalSideS = TotalSideS + Number(item.SideS);
        TotalSqFAPMeasurement = TotalSqFAPMeasurement + Number(item.SqFAPMeasurement);
        TotalSqMAPMeasurement = TotalSqMAPMeasurement + Number(item.SqMAPMeasurement);
        TotalAreaInAnnaAPMeasurement = TotalAreaInAnnaAPMeasurement + Number(item.AreaInAnnaAPMeasurement);
        var AreaInRPADAsPerMeasurement = SqFToRAPD(Number(item.SqFAPMeasurement).toFixed(2));
        $('#TblAreaAsPerMeasurement > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.AreaSymbol+'</td><td>'+item.SideA+'</td><td>'+item.SideB+'</td><td>'+item.SideC+'</td><td>'+item.SideS+'</td><td>'+item.SqFAPMeasurement+'</td><td>'+item.SqMAPMeasurement+'</td><td>'+item.AreaInAnnaAPMeasurement+'</td><td>'+AreaInRPADAsPerMeasurement+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveAreaAsPerCal" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
      });

      $('#LblTotalAreaSideA').text(TotalSideA.toFixed(2)); $('#TxtTotalAreaSideA').val(TotalSideA.toFixed(2));
      $('#LblTotalAreaSideB').text(TotalSideB.toFixed(2)); $('#TxtTotalAreaSideB').val(TotalSideB.toFixed(2));
      $('#LblTotalAreaSideC').text(TotalSideC.toFixed(2)); $('#TxtTotalAreaSideC').val(TotalSideC.toFixed(2));
      $('#LblTotalAreaSideS').text(TotalSideS.toFixed(2)); $('#TxtTotalAreaSideS').val(TotalSideS.toFixed(2));
      $('#LblTotalSqFAsPerCal').text(Number(TotalSqFAPMeasurement).toFixed(2)); $('#TxtTotalSqFAsPerCal').val(TotalSqFAPMeasurement);
      $('#LblTotalSqMAsPerCal').text(Number(TotalSqMAPMeasurement).toFixed(2)); $('#TxtTotalSqMAsPerCal').val(TotalSqMAPMeasurement.toFixed(2));
      $('#LblTotalAreaInAnnaAPMeasurement').text(Number(TotalAreaInAnnaAPMeasurement).toFixed(2)); $('#TxtTotalAreaInAnnaAPMeasurement').val(TotalAreaInAnnaAPMeasurement.toFixed(2));
      var TotalAreaInRPADAsPerMeasurement = SqFToRAPD(Number(TotalSqFAPMeasurement).toFixed(2));
      $('#LblTotalAreaInRPADAsPerMeasurement').text(TotalAreaInRPADAsPerMeasurement); $('#TxtTotalAreaInRPADAsPerMeasurement').val(TotalAreaInRPADAsPerMeasurement);

      CalculateConsiderationArea();
      CalculationAreaRate();
    }

    function SqFToRAPD(SqF){
    //  // total_sqft = $("#squareFeet").val(), total_sqft *= 1, convertFromTotalSqft(total_sqft, 'en');


    //  total_sqmt = .092903 * SqF, 
    //  total_paisa = SqF / 85.56, 
    //  total_dhur = SqF / 182.25, 
    //  ropaniPart = Math.floor(total_paisa / 64), 
    //  remainingPaisa = total_paisa - 64 * ropaniPart, 
    //  aanaPart = Math.floor(remainingPaisa / 4), 
    //  remainingPaisa -= 4 * aanaPart, 
    //  paisaPart = Math.floor(remainingPaisa), 
    //  remainingPaisa -= paisaPart, 
    //  damPart = 4 * remainingPaisa, 
    //  bighaPart = Math.floor(total_dhur / 400), 
    //  remainingDhur = total_dhur - 400 * bighaPart, 
    //  kathhaPart = Math.floor(remainingDhur / 20), 
    //  remainingDhur -= 20 * kathhaPart, 
    //  dhurPart = remainingDhur, 
    //  //"np" == e ? (ropaniText = " à¤°à¥‹à¤ªà¤¨à¥€ ", aanaText = " à¤†à¤¨à¤¾ ", paisaText = " à¤ªà¥ˆà¤¸à¤¾ ", damText = " à¤¦à¤¾à¤® ", bighaText = " à¤¬à¤¿à¤—à¤¾ ", kathhaText = " à¤•à¤ à¥à¤ à¤¾ ", dhurText = " à¤§à¥à¤° ", sqmtText = " à¤µà¤°à¥à¤— à¤®à¤¿à¤Ÿà¤° ", sqftText = " à¤µà¤°à¥à¤— à¤«à¤¿à¤Ÿ ") : (ropaniText = " Ropani ", aanaText = " Aana ", paisaText = " Paisa ", damText = " Dam ", bighaText = " Bigha ", kathhaText = " Kathha ", dhurText = " Dhur ", sqmtText = " Square Meter ", sqftText = " Square Feet "), 
    //  //ropaniResult = ropaniPart + ropaniText + aanaPart + aanaText + paisaPart + paisaText + damPart.toFixed(2) + damText, 
    //  //bighaResult = bighaPart + bighaText + kathhaPart + kathhaText + dhurPart.toFixed(2) + dhurText, 
    //  //squareFeetResult = t.toFixed(2) + sqftText, squareMeterResult = total_sqmt.toFixed(2) + sqmtText,
    //  //  $("#ropaniResult").html(ropaniResult), 
    //  //  $("#bighaResult").html(bighaResult), 
    //  //  $("#squareFeetResult").html(squareFeetResult), 
    //  //  $("#squareMeterResult").html(squareMeterResult)
    //   damPart = damPart>1?damPart.toFixed(2):0;
    //   //console.log(ropaniPart +'-'+ aanaPart +'-'+ paisaPart +'-'+ damPart);



     
    //   // var Ropanis =  (SqF/342.25)/16;
    //   // var OnlyRopni = Ropanis.toString().split(".").shift();
    //   // var RemainingRopni = '0.'+Ropanis.toString().split(".").pop();

    //   // var Aanas = RemainingRopni*16;
    //   // var OnlyAana = Aanas.toString().split(".").shift();
    //   // var RemainingAana = '0.'+Aanas.toString().split(".").pop();

    //   // var Paisas = RemainingAana*342.25;
    //   // var OnlyPaisa1 = Paisas.toString().split(".").shift();
    //   // var OnlyPaisa2 = (Paisas.toString().split(".").shift())/85.6;
    //   // var OnlyPaisa3 = Number(OnlyPaisa2).toFixed(2);
    //   // var OnlyPaisa4 =0;
    //   // if(Paisas>=85)
    //   // OnlyPaisa4=OnlyPaisa3;
    //   // else
    //   // OnlyPaisa4=0;
    //   // var OnlyPaisa=OnlyPaisa4.toString().split(".").shift();

    //   // var OnlyDam1 = '0.'+OnlyPaisa2.toString().split(".").pop();
    //   // var OnlyDam =Number((OnlyDam1*85.6)/21.39).toFixed(2);
    //  // console.log(Number(OnlyRopni) +'-'+Number(OnlyAana)+'-'+Number(OnlyPaisa)+'-'+Number(OnlyDam));
    //   return ropaniPart +'-'+ aanaPart +'-'+ paisaPart +'-'+ damPart; //Number(OnlyRopni) +'-'+Number(OnlyAana)+'-'+Number(OnlyPaisa)+'-'+Number(OnlyDam);


    var TotalRopani = SqF/(16*342.25);
    var OnlyRopani = TotalRopani.toString().split(".")[0];
     var RemainingRopani = (TotalRopani-OnlyRopani);
     var TotalAana = RemainingRopani*(16);
     var OnlyAana = TotalAana.toString().split(".")[0];
     var RemainingAana = (TotalAana-OnlyAana);
     var RemainingAanaToSQF = RemainingAana*342.25;
     var TotalPaisa = RemainingAanaToSQF/(85.6);
     var OnlyPaisa = TotalPaisa.toString().split(".")[0];
     var RemainingPaisa = (TotalPaisa-OnlyPaisa);
     var RemainingPaisaToSQF = RemainingPaisa*85.6;
     var OnlyDam = RemainingPaisaToSQF/(21.4);
    return Number(OnlyRopani)+'-'+Number(OnlyAana)+'-'+Number(OnlyPaisa)+'-'+Number(OnlyDam).toFixed(2);
    }

    function convertFromTotalSqft(t, e) {
      total_sqmt = .092903 * t, 
      total_paisa = t / 85.56, 
      total_dhur = t / 182.25, 
      ropaniPart = Math.floor(total_paisa / 64), 
      remainingPaisa = total_paisa - 64 * ropaniPart, 
      aanaPart = Math.floor(remainingPaisa / 4), 
      remainingPaisa -= 4 * aanaPart, 
      paisaPart = Math.floor(remainingPaisa), 
      remainingPaisa -= paisaPart, 
      damPart = 4 * remainingPaisa, 
      bighaPart = Math.floor(total_dhur / 400), 
      remainingDhur = total_dhur - 400 * bighaPart, 
      kathhaPart = Math.floor(remainingDhur / 20), 
      remainingDhur -= 20 * kathhaPart, 
      dhurPart = remainingDhur, 
      "np" == e ? (ropaniText = " à¤°à¥‹à¤ªà¤¨à¥€ ", aanaText = " à¤†à¤¨à¤¾ ", paisaText = " à¤ªà¥ˆà¤¸à¤¾ ", damText = " à¤¦à¤¾à¤® ", bighaText = " à¤¬à¤¿à¤—à¤¾ ", kathhaText = " à¤•à¤ à¥à¤ à¤¾ ", dhurText = " à¤§à¥à¤° ", sqmtText = " à¤µà¤°à¥à¤— à¤®à¤¿à¤Ÿà¤° ", sqftText = " à¤µà¤°à¥à¤— à¤«à¤¿à¤Ÿ ") : (ropaniText = " Ropani ", aanaText = " Aana ", paisaText = " Paisa ", damText = " Dam ", bighaText = " Bigha ", kathhaText = " Kathha ", dhurText = " Dhur ", sqmtText = " Square Meter ", sqftText = " Square Feet "), 
      ropaniResult = ropaniPart + ropaniText + aanaPart + aanaText + paisaPart + paisaText + damPart.toFixed(2) + damText, 
      bighaResult = bighaPart + bighaText + kathhaPart + kathhaText + dhurPart.toFixed(2) + dhurText, 
      squareFeetResult = t.toFixed(2) + sqftText, squareMeterResult = total_sqmt.toFixed(2) + sqmtText,
      //  $("#ropaniResult").html(ropaniResult), 
      //  $("#bighaResult").html(bighaResult), 
      //  $("#squareFeetResult").html(squareFeetResult), 
      //  $("#squareMeterResult").html(squareMeterResult)
       damPart = damPart>1?damPart.toFixed(2):0;
       return ropaniPart +'-'+ aanaPart +'-'+ paisaPart +'-'+ damPart;
  }

    function ToTwoDecimalPlaces(input) {
      var value =Number(input);
      var splitValue = value.toString().split(".");
      if (Number(splitValue[1]) > 0) {
        return  value.toFixed(2);
      }
      else {
        return  splitValue[0];
      }
    }

    $("#TxtDeductionOfRoadSqF,#TxtLandDevelopmentPercent,#TxtDeductionForHighTensionSqF,#TxtDeductionForLowLandSqF,#TxtDeductionForRiverSqF,#TxtDeductionForBoundryCorrection,#TxtDeductionForIrregularShapeSloppyLand").change(function() {
      CalculateConsiderationArea();
      CalculationAreaRate();
    });

    function CalculateConsiderationArea(){
      var _v1= Number($('#TxtTotalAreaInAnna').val());
      var _v2= Number($('#TxtTotalAreaInAnnaAPMeasurement').val());
      var DeductionOfRoadSqF = Number($("#TxtDeductionOfRoadSqF").val());
      var LandDevelopmentPercent = Number($("#TxtLandDevelopmentPercent").val());
      var DeductionForHighTensionSqF = Number($("#TxtDeductionForHighTensionSqF").val());
      var DeductionForLowLandSqF = Number($("#TxtDeductionForLowLandSqF").val());
      var DeductionForRiverSqF = Number($("#TxtDeductionForRiverSqF").val());
      var BoundryCorrectionPercent = Number($("#TxtDeductionForBoundryCorrection").val());
      var IrregularShapePercent = Number($("#TxtDeductionForIrregularShapeSloppyLand").val());
      if(_v2<_v1){
        var TotalSqFAsPerCal = Number($("#TxtTotalSqFAsPerCal").val());
        var _v1 =(TotalSqFAsPerCal/100)*LandDevelopmentPercent;
        var _v2 =(TotalSqFAsPerCal/100)*BoundryCorrectionPercent;
        var _v3 =(TotalSqFAsPerCal/100)*IrregularShapePercent;
        var Val = TotalSqFAsPerCal-(DeductionOfRoadSqF+DeductionForHighTensionSqF+DeductionForLowLandSqF+DeductionForRiverSqF+(_v1)+(_v2)+(_v3));
        
        $('#TxtSqMAPConsideration').val((Number(Val)*0.092903).toFixed(2));
        $('#TxtSqFAPConsideration').val(Number(Val).toFixed(2));

        var TotalRAPD = SqFToRAPD(Val);
        $('#TxtRAPDAPConsideration').val(TotalRAPD);
        $('#TxtAnnaAPConsideration').val((Number(Val)/342.25).toFixed(2));

        var x1 =Number((TotalSqFAsPerCal/100)*LandDevelopmentPercent);
        $('#TxtLandDevelopmentSqF').val(Number(x1).toFixed(2));
        $('#TxtAfterLandDevelopmentAreaInAnna').val((Number(x1/342.25)).toFixed(2));
        $('#TxtAfterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

        var x2 =Number((TotalSqFAsPerCal/100)*BoundryCorrectionPercent);
        $('#TxtDeductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
        $('#TxtAfterBoundryCorrectionAreaInAnna').val((Number(x2/342.25)).toFixed(2));
        $('#TxtAfterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

        var x3 =Number((TotalSqFAsPerCal/100)*IrregularShapePercent);
        $('#TxtAfterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
        $('#TxtAfterIrregularShapeSloppyLandAreaInAnna').val((Number(x3/342.25)).toFixed(2));
        $('#TxtAfterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
      }
      else{
        var TotalSqF = Number($("#TxtTotalSqF").val());
        var _v1 =(TotalSqF/100)*LandDevelopmentPercent;
        var _v2 =(TotalSqF/100)*BoundryCorrectionPercent;
        var _v3 =(TotalSqF/100)*IrregularShapePercent;
        var Val = TotalSqF-(DeductionOfRoadSqF+DeductionForHighTensionSqF+DeductionForLowLandSqF+DeductionForRiverSqF+(_v1)+(_v2)+(_v3));
      
        $('#TxtSqMAPConsideration').val((Number(Val)*0.092903).toFixed(2));
        $('#TxtSqFAPConsideration').val(Number(Val).toFixed(2));
        var TotalRAPD = SqFToRAPD(Val);
        $('#TxtRAPDAPConsideration').val(TotalRAPD);
        $('#TxtAnnaAPConsideration').val((Number(Val)/342.25).toFixed(2));

        var x1 =Number((TotalSqF/100)*LandDevelopmentPercent);
        $('#TxtLandDevelopmentSqF').val(Number(x1).toFixed(2));
        $('#TxtAfterLandDevelopmentAreaInAnna').val((Number(x1/342.25)).toFixed(2));
        $('#TxtAfterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

        var x2 =Number((TotalSqF/100)*BoundryCorrectionPercent);
        $('#TxtDeductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
        $('#TxtAfterBoundryCorrectionAreaInAnna').val((Number(x2/342.25)).toFixed(2));
        $('#TxtAfterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

        var x3 =Number((TotalSqF/100)*IrregularShapePercent);
        $('#TxtAfterIrregularShapeSloppyLandAreaInAnna').val((Number(x3/342.25)).toFixed(2));
        $('#TxtAfterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
        $('#TxtAfterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
      }

      $('#TxtAfterDeductionOfRoadAreaInAnna').val((Number(DeductionOfRoadSqF/342.25)).toFixed(2));
      $('#TxtAfterDeductionOfRoadAreaInRPAD').val(SqFToRAPD(Number(DeductionOfRoadSqF).toFixed(2)));

      $('#TxtAfterHighTensionAreaInAnna').val((Number(DeductionForHighTensionSqF/342.25)).toFixed(2));
      $('#TxtAfterHighTensionAreaInRPAD').val(SqFToRAPD(Number(DeductionForHighTensionSqF).toFixed(2)));

      $('#TxtAfterLowLandAreaInAnna').val((Number(DeductionForLowLandSqF/342.25)).toFixed(2));
      $('#TxtAfterLowLandAreaInRPAD').val(SqFToRAPD(Number(DeductionForLowLandSqF).toFixed(2)));

      $('#TxtAfterRiverAreaInAnna').val((Number(DeductionForRiverSqF/342.25)).toFixed(2));
      $('#TxtAfterRiverAreaInRPAD').val(SqFToRAPD(Number(DeductionForRiverSqF).toFixed(2)));
    }

    $("#TxtPerAnnaAPGovRate").change(function() {
      $('#TxtPerSqFAPGovRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
      $('#TxtPerRopaniAPGovRate').val(Number(Number($(this).val())*16).toFixed(2));
      CalculationAreaRate();
    });

    $("#TxtPerAnnaAPMarketRate").change(function() {
      $('#TxtPerSqFAPMarketRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
      $('#TxtPerRopaniAPMarketRate').val(Number(Number($(this).val())*16).toFixed(2));
      CalculationAreaRate();
    });

    function CalculationAreaRate(){
      var v1 = Number($('#TxtPerAnnaAPGovRate').val());
      var v2 = Number($('#TxtPerAnnaAPMarketRate').val());

      var _v1 = Number($('#TxtBankId').attr("mygovernmentvalue"));

      if(Number($('#TxtBankId').attr("myisfairmarketcalculationgovwise"))===0) _v1=0;
      var _v2 =Number($('#TxtBankId').attr("mycommercialvalue"));
      var v3 = ((v1/100)*_v1)+((v2/100)*_v2);
      $('#TxtPerAnnaAPFairRate').val(v3.toFixed(2));
      $('#TxtPerSqFAPFairRate').val(Number(Number(v3.toFixed(2)) / 342.25).toFixed(2));
      $('#TxtPerRopaniAPFairRate').val(Number(Number(v3.toFixed(2))*16).toFixed(2));

      var _v11 = Number($('#TxtBankId').attr("mygovernmentvalue"));
      var _v3 = Number($('#TxtBankId').attr("myfairmarketvalue"));
      if(Number($('#TxtBankId').attr("myisdistresscalculationgovwise"))===1){
        $('#TxtPerAnnaAPDistressRate').val(Number((v3.toFixed(2))/100*_v3)+Number((v1.toFixed(2))/100*_v11) );
      }
      else {
        $('#TxtPerAnnaAPDistressRate').val(Number((v3.toFixed(2))/100*_v3).toFixed(2) );
      }
      $('#TxtPerSqFAPDistressRate').val(Number(Number($('#TxtPerAnnaAPDistressRate').val()) / 342.25).toFixed(2));
      $('#TxtPerRopaniAPDistressRate').val(Number(Number($('#TxtPerAnnaAPDistressRate').val())*16).toFixed(2));

      var v4 = Number($('#TxtTotalAreaInAnna').val());
      var v5 = Number($('#TxtAnnaAPConsideration').val());
      if(v5<v4){
        $('#TxtGovernmentValueOfLand').val(Number(Number($('#TxtPerAnnaAPGovRate').val()) * Number($('#TxtAnnaAPConsideration').val())).toFixed(2));
        $('#TxtCommercialValueOfLand').val(Number(Number($('#TxtPerAnnaAPMarketRate').val()) * Number($('#TxtAnnaAPConsideration').val())).toFixed(2));
        $('#TxtFairMarketValueOfLand').val(Number(Number($('#TxtPerAnnaAPFairRate').val()) * Number($('#TxtAnnaAPConsideration').val())).toFixed(2));
        $('#TxtDistressValueOfLand').val(Number(Number($('#TxtPerAnnaAPDistressRate').val()) * Number($('#TxtAnnaAPConsideration').val())).toFixed(2));
      }
      else{
        $('#TxtGovernmentValueOfLand').val(Number(Number($('#TxtPerAnnaAPGovRate').val()) * Number($('#TxtTotalAreaInAnna').val())).toFixed(2));
        $('#TxtCommercialValueOfLand').val(Number(Number($('#TxtPerAnnaAPMarketRate').val()) * Number($('#TxtTotalAreaInAnna').val())).toFixed(2));
        $('#TxtFairMarketValueOfLand').val(Number(Number($('#TxtPerAnnaAPFairRate').val()) * Number($('#TxtTotalAreaInAnna').val())).toFixed(2));
        $('#TxtDistressValueOfLand').val(Number(Number($('#TxtPerAnnaAPDistressRate').val()) * Number($('#TxtTotalAreaInAnna').val())).toFixed(2));
      }
    }

    $('#BtnAddBoundariesAsPerKitaNo').on('click', function(event) {
      event.preventDefault();

      if($('#TxtBoundariesKitaNo').val()==''){
        alert('Please enter Kita Number');
        $('#TxtBoundariesKitaNo').focus();
        return;
      }

      if($('#TxtEastAPBoundaries').val()==''){
        alert('Please enter East Boundaries');
        $('#TxtEastAPBoundaries').focus();
        return;
      }

      if($('#TxtWestAPBoundaries').val()==''){
        alert('Please enter West Boundaries');
        $('#TxtWestAPBoundaries').focus();
        return;
      }

      if($('#TxtNorthAPBoundaries').val()==''){
        alert('Please enter North Boundaries');
        $('#TxtNorthAPBoundaries').focus();
        return;
      }

      if($('#TxtSouthAPBoundaries').val()==''){
        alert('Please enter South Boundaries');
        $('#TxtSouthAPBoundaries').focus();
        return;
      }

      $(this).prop( "disabled", true );
      var formData = {
        GuidId: $('#TxtGuidId').val(),
        BoundariesKitaNo: $('#TxtBoundariesKitaNo').val(),
        EastAPBoundaries: $('#TxtEastAPBoundaries').val(),
        WestAPBoundaries: $('#TxtWestAPBoundaries').val(),
        NorthAPBoundaries: $('#TxtNorthAPBoundaries').val(),
        SouthAPBoundaries: $('#TxtSouthAPBoundaries').val(),
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/savetempboundariesasperkitano',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: false,
        success: function (data) {
          CheckSession(data);
          if(data==1){
            var formData1 = {
              GuidId: $('#TxtGuidId').val(),
              SNo: $(this).attr('SNo'),
              ValuationId: $('#TxtValuationId').val(),
              DataSource: $(this).attr('DataSource')
            };
            $.ajax({
              url: $('#TxtBaseUrl').val() + 'valuation/listtempboundariesasperkitano',
              datatype: "json",
              type: "post",
              contenttype: 'application/json; charset=utf-8',
              data: formData1,
              async: false,
              success: function (data) {
                CheckSession(data);
                var obj = $.parseJSON(data);
                $('#TxtBoundariesKitaNo,#TxtEastAPBoundaries,#TxtWestAPBoundaries,#TxtNorthAPBoundaries,#TxtSouthAPBoundaries').val('');
                $('#TxtBoundariesKitaNo').focus();
                $("#TblBoundariesAsPerKitaNo > tbody").find("tr").remove();
                $.each(obj, function(i, item) {
                  $('#TblBoundariesAsPerKitaNo > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.BoundariesKitaNo+'</td><td>'+item.EastAPBoundaries+'</td><td>'+item.WestAPBoundaries+'</td><td>'+item.NorthAPBoundaries+'</td><td>'+item.SouthAPBoundaries+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBoundariesAsPerKitaNo" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
                });
              },
              error: function (xhr) {
                alert('Error Occured During Data Submission....');
              }
            });
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....1');
        }
      });
      $(this).prop( "disabled", false);
    });

    $(document.body).on('click','.BtnRemoveBoundariesAsPerKitaNo',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempboundariesasperkitano',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblBoundariesAsPerKitaNo > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblBoundariesAsPerKitaNo > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.BoundariesKitaNo+'</td><td>'+item.EastAPBoundaries+'</td><td>'+item.WestAPBoundaries+'</td><td>'+item.NorthAPBoundaries+'</td><td>'+item.SouthAPBoundaries+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBoundariesAsPerKitaNo" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $('#BtnAddBoundariesAsPerSiteVisit').on('click', function(event) {
      event.preventDefault();

      if($('#TxtAPSiteVisitBoundariesKitaNo').val()==''){
        alert('Please enter Kita Number');
        $('#TxtAPSiteVisitBoundariesKitaNo').focus();
        return;
      }

      if($('#TxtEastAPSiteVisitBoundaries').val()==''){
        alert('Please enter East Boundaries');
        $('#TxtEastAPSiteVisitBoundaries').focus();
        return;
      }

      if($('#TxtWestAPSiteVisitBoundaries').val()==''){
        alert('Please enter West Boundaries');
        $('#TxtWestAPSiteVisitBoundaries').focus();
        return;
      }

      if($('#TxtNorthAPSiteVisitBoundaries').val()==''){
        alert('Please enter North Boundaries');
        $('#TxtNorthAPSiteVisitBoundaries').focus();
        return;
      }

      if($('#TxtSouthAPSiteVisitBoundaries').val()==''){
        alert('Please enter South Boundaries');
        $('#TxtSouthAPSiteVisitBoundaries').focus();
        return;
      }

      $(this).prop( "disabled", true );
      var formData = {
        GuidId: $('#TxtGuidId').val(),
        APSiteVisitBoundariesKitaNo: $('#TxtAPSiteVisitBoundariesKitaNo').val(),
        EastAPSiteVisitBoundaries: $('#TxtEastAPSiteVisitBoundaries').val(),
        WestAPSiteVisitBoundaries: $('#TxtWestAPSiteVisitBoundaries').val(),
        NorthAPSiteVisitBoundaries: $('#TxtNorthAPSiteVisitBoundaries').val(),
        SouthAPSiteVisitBoundaries: $('#TxtSouthAPSiteVisitBoundaries').val(),
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/savetempboundariesaspersitevisitkitano',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: false,
        success: function (data) {
          CheckSession(data);
          if(data==1){
            var formData1 = {
              GuidId: $('#TxtGuidId').val(),
              SNo: $(this).attr('SNo'),
              ValuationId: $('#TxtValuationId').val(),
              DataSource: $(this).attr('DataSource')
            };
            $.ajax({
              url: $('#TxtBaseUrl').val() + 'valuation/listtempboundariesaspersitevisitkitano',
              datatype: "json",
              type: "post",
              contenttype: 'application/json; charset=utf-8',
              data: formData1,
              async: false,
              success: function (data) {
                CheckSession(data);
                var obj = $.parseJSON(data);
                $('#TxtAPSiteVisitBoundariesKitaNo,#TxtEastAPSiteVisitBoundaries,#TxtWestAPSiteVisitBoundaries,#TxtNorthAPSiteVisitBoundaries,#TxtSouthAPSiteVisitBoundaries').val('');
                $('#TxtAPSiteVisitBoundariesKitaNo').focus();
                $("#TblBoundariesAsPerSiteVisit > tbody").find("tr").remove();
                $.each(obj, function(i, item) {
                  $('#TblBoundariesAsPerSiteVisit > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.APSiteVisitBoundariesKitaNo+'</td><td>'+item.EastAPSiteVisitBoundaries+'</td><td>'+item.WestAPSiteVisitBoundaries+'</td><td>'+item.NorthAPSiteVisitBoundaries+'</td><td>'+item.SouthAPSiteVisitBoundaries+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBoundariesAsPerKitaNoSiteVisit" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
                });
              },
              error: function (xhr) {
                alert('Error Occured During Data Submission....');
              }
            });
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....1');
        }
      });
      $(this).prop( "disabled", false);
    });

    $(document.body).on('click','.BtnRemoveBoundariesAsPerKitaNoSiteVisit',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempboundariesaspersitevisitkitano',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblBoundariesAsPerSiteVisit > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblBoundariesAsPerSiteVisit > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.APSiteVisitBoundariesKitaNo+'</td><td>'+item.EastAPSiteVisitBoundaries+'</td><td>'+item.WestAPSiteVisitBoundaries+'</td><td>'+item.NorthAPSiteVisitBoundaries+'</td><td>'+item.SouthAPSiteVisitBoundaries+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBoundariesAsPerKitaNoSiteVisit" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $('#BtnAddBuildingCalculation').on('click', function(event) {
      event.preventDefault();

      if($('#TxtFloor').val()==''){
        alert('Please select floor.');
        $('#TxtFloor').focus();
        return;
      }

      if($('#TxtFloorAreaInSqF').val()==''){
        alert('Please enter Floor Area In SqF.');
        $('#TxtFloorAreaInSqF').focus();
        return;
      }

      if($('#TxtFloorRate').val()==''){
        alert('Please enter Floor Rate.');
        $('#TxtFloorRate').focus();
        return;
      }

      if($('#TxtFloorAge').val()==''){
        alert('Please enter Floor Age');
        $('#TxtFloorAge').focus();
        return;
      }

      if($('#TxtFloorDepriciationPercentage').val()==''){
        alert('Please enter Floor Depriciation');
        $('#TxtFloorDepriciationPercentage').focus();
        return;
      }

      $(this).prop( "disabled", true );
      //var Fa = Number($('#TxtFloorAmount').val());
      var Fna = Number($('#TxtFloorNetAmount').val());
      var _v3 = Number($('#TxtBankId').attr("myfairmarketvalue"));

      var a= Number($('#TxtFloorAge').val());
      var b= Number($('#TxtFloorDepriciationPercentage').val());

      //var dv = ((Fna-((Fna/100)*(a+b)))/100)*_v3;
      var formData = {
        GuidId: $('#TxtGuidId').val(),
        Floor: $('#TxtFloor').val(),
        FloorAreaInSqF: $('#TxtFloorAreaInSqF').val(),
        FloorRate: $('#TxtFloorRate').val(),
        FloorAmount:$('#TxtFloorAmount').val(),
        FloorAge: $('#TxtFloorAge').val(),
        FloorDepriciationPercentage: $('#TxtFloorDepriciationPercentage').val(),
        SanitaryPulumbingPercentage: $('#TxtSanitaryPulumbingPercentage').val(),
        ElectricityWorkPercentage: $('#TxtElectricityWorkPercentage').val(),
        FloorNetAmount:$('#TxtFloorNetAmount').val(),
        FloorDepriciationAmount:(Fna/100)*(a*b),
        FloorFairMarketValue:Fna-((Fna/100)*(a*b)),
        DistressValue:((Fna-((Fna/100)*(a*b)))/100)*_v3,
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/savetempbuildingcalculation',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: false,
        success: function (data) {
          CheckSession(data);
          if(data==1){
            var formData1 = {
              GuidId: $('#TxtGuidId').val(),
              ValuationId: $('#TxtValuationId').val()
            };
            $.ajax({
              url: $('#TxtBaseUrl').val() + 'valuation/listtempbuildingcalculation',
              datatype: "json",
              type: "post",
              contenttype: 'application/json; charset=utf-8',
              data: formData1,
              async: false,
              success: function (data) {
                CheckSession(data);
                $('#TxtFloor,#TxtFloorAreaInSqF,#TxtFloorNetAmount').val('');
                $('#TxtFloor').focus();
                BindBuildingCalculation(data);
              },
              error: function (xhr) {
                alert('Error Occured During Data Submission....');
              }
            });
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....1');
        }
      });
      $(this).prop( "disabled", false);
    });

    $(document.body).on('click','.BtnRemoveBuildingCalculation',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempbuildingcalculation',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          BindBuildingCalculation(data);
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    function BindBuildingCalculation(data){
      var obj = $.parseJSON(data);
      $("#TblBuildingCalculation > tbody").find("tr").remove();
      var TotalBuildingAreaSqF=0,TotalBuildingAmount = 0,TotalBuildingDepriciation = 0,TotalFloorNetAmount=0,TotalBuildingFairMarketValue = 0,TotalBuildingDistressValue=0;
      $.each(obj, function(i, item) {
        TotalBuildingAreaSqF = TotalBuildingAreaSqF + Number(item.FloorAreaInSqF);
        TotalBuildingAmount = TotalBuildingAmount + Number(item.FloorAmount);
        TotalFloorNetAmount = TotalFloorNetAmount + Number(item.FloorNetAmount);
        TotalBuildingDepriciation = TotalBuildingDepriciation + Number(item.FloorDepriciationAmount);
        TotalBuildingFairMarketValue = TotalBuildingFairMarketValue + Number(item.FloorFairMarketValue);
        TotalBuildingDistressValue = TotalBuildingDistressValue + Number(item.DistressValue);
        $('#TblBuildingCalculation > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.Floor+'</td><td>'+item.FloorAreaInSqF+'</td><td>'+item.FloorRate+'</td><td>'+item.FloorAmount+'</td><td>'+item.FloorAge+'</td><td>'+item.FloorDepriciationPercentage+'</td><td>'+item.SanitaryPulumbingPercentage+'</td><td>'+item.ElectricityWorkPercentage+'</td><td>'+item.FloorNetAmount+'</td><td>'+item.FloorDepriciationAmount+'</td><td>'+item.FloorFairMarketValue+'</td><td>'+item.DistressValue+'</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBuildingCalculation" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
      });


      $('#LblTotalBuildingAreaSqF').text(TotalBuildingAreaSqF.toFixed(2)); $('#TxtTotalBuildingAreaSqF').val(TotalBuildingAreaSqF.toFixed(2));
      $('#LblTotalBuildingAmount').text(TotalBuildingAmount.toFixed(2)); $('#TxtTotalBuildingAmount').val(TotalBuildingAmount.toFixed(2));
      $('#LblTotalNetBuildingAmount').text(TotalFloorNetAmount.toFixed(2)); $('#TxtTotalNetBuildingAmount').val(TotalFloorNetAmount.toFixed(2));
      $('#LblTotalBuildingDepriciation').text(TotalBuildingDepriciation.toFixed(2)); $('#TxtTotalBuildingDepriciation').val(TotalBuildingDepriciation.toFixed(2));
      $('#LblTotalBuildingFairMarketValue').text(TotalBuildingFairMarketValue.toFixed(2)); $('#TxtTotalBuildingFairMarketValue').val(TotalBuildingFairMarketValue.toFixed(2));
      $('#LblTotalBuildingDistressValue').text(TotalBuildingDistressValue.toFixed(2)); $('#TxtTotalBuildingDistressValue').val(TotalBuildingDistressValue.toFixed(2));
    }

    $("#TxtFloorAreaInSqF").blur(function(){
      $('#TxtFloorAmount').val( (Number($("#TxtFloorAreaInSqF").val()) * Number($("#TxtFloorRate").val())).toFixed(2) );
    });

    $("#TxtFloorRate").blur(function(){
      $('#TxtFloorAmount').val( (Number($("#TxtFloorAreaInSqF").val()) * Number($("#TxtFloorRate").val())).toFixed(2) );
    });

    // $("#TxtFloorAge").blur(function(){
    //   var a= Number($('#TxtFloorDepriciation').val());
    //   var b= Number($('#TxtFloorAge').val());
    //   var c= Number($('#TxtFloorAmount').val());
    //   $('#TxtFloorNetAmount').val( ((c/100)* (a*b)).toFixed(2) );
    // });

    $("#TxtFloorAreaInSqF,#TxtFloorRate,#TxtFloorAge,#TxtFloorDepriciationPercentage,#TxtSanitaryPulumbingPercentage,#TxtElectricityWorkPercentage").blur(function(){
      var a= Number($('#TxtFloorDepriciationPercentage').val());
      var b= Number($('#TxtFloorAge').val());
      var c= Number($('#TxtFloorAmount').val());
      var d= Number((c/100)*Number($('#TxtSanitaryPulumbingPercentage').val()));
      var e= Number((c/100)*Number($('#TxtElectricityWorkPercentage').val()));
      //$('#TxtFloorNetAmount').val( Number(((c+d+e)/100)* (a*b) ).toFixed(2) );
      $('#TxtFloorNetAmount').val(Number(c+d+e).toFixed(2) );
    });

    $("#UploadDocument").change(function (e) {
      e.preventDefault();
      var name = document.getElementById("UploadDocument").files[0].name;
      if(document.getElementById("UploadDocument").files[0].size/1024/1024<=2)
      {
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          alert("Invalid Image File Only allowed .png,.jpg or .jpeg");
          $("#UploadDocument").val('');
        }
        else{
          var form_data = new FormData();
          form_data.append("file", document.getElementById('UploadDocument').files[0]);
          form_data.append("GuidId", $('#TxtGuidId').val());
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'valuation/UploadTempDocument',
            type: "post",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            async: true,
            success: function (data) {
              CheckSession(data);
              $("#UploadDocument").val('');
              if (data === "1") {
                var formData1 = {
                  GuidId: $('#TxtGuidId').val(),
                  ValuationId: $('#TxtValuationId').val()
                };
                $.ajax({
                  url: $('#TxtBaseUrl').val() + 'valuation/listtempuploaddocument',
                  datatype: "json",
                  type: "post",
                  contenttype: 'application/json; charset=utf-8',
                  data: formData1,
                  async: false,
                  success: function (data) {
                    CheckSession(data);
                    var obj = $.parseJSON(data);
                    $("#TblUploadDocument > tbody").find("tr").remove();
                    $.each(obj, function(i, item) {
                      $('#TblUploadDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadDocument/'+item.FileFullName+'" target="_blank" class="BtnDownloadUploadDocument" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveUploadDocument" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
                    });
                  },
                  error: function (xhr) {
                    alert('Error Occured During Data Submission....');
                  }
                });
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      }
      else{
        alert("File size must under 2 MB, This File size is :"+ (document.getElementById("UploadDocument").files[0].size/1024/1024).toFixed(2) +" MB" );
        $("#UploadDocument").val('');
      }
    });

    $(document.body).on('click','.BtnRemoveUploadDocument',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempuploaddocument',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblUploadDocument > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblUploadDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadDocument/'+item.FileFullName+'" target="_blank" class="BtnDownloadUploadDocument" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveUploadDocument" SNo="'+item.SNo+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $("#UploadPicture").change(function (e) {
      e.preventDefault();
      var name = document.getElementById("UploadPicture").files[0].name;
      if(document.getElementById("UploadPicture").files[0].size/1024/1024<=2){
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          alert("Invalid Image File Only allowed .png,.jpg or .jpeg");
          $("#UploadPicture").val('');
        }
        else{
          var form_data = new FormData();
          form_data.append("file", document.getElementById('UploadPicture').files[0]);
          form_data.append("GuidId", $('#TxtGuidId').val());
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'valuation/UploadTempPicture',
            type: "post",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            async: true,
            success: function (data) {
              CheckSession(data);
              $("#UploadPicture").val('');
              if (data === "1") {
                var formData1 = {
                  GuidId: $('#TxtGuidId').val(),
                  ValuationId: $('#TxtValuationId').val()
                };
                $.ajax({
                  url: $('#TxtBaseUrl').val() + 'valuation/listtempuploadpicture',
                  datatype: "json",
                  type: "post",
                  contenttype: 'application/json; charset=utf-8',
                  data: formData1,
                  async: false,
                  success: function (data) {
                    CheckSession(data);
                    var obj = $.parseJSON(data);
                    $("#TblUploadPicture > tbody").find("tr").remove();
                    $.each(obj, function(i, item) {
                      $('#TblUploadPicture > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadPicture/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveUploadPicture" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
                    });
                  },
                  error: function (xhr) {
                    alert('Error Occured During Data Submission....');
                  }
                });
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      }
      else{
        alert("File size must under 2 MB, This File size is :"+ (document.getElementById("UploadPicture").files[0].size/1024/1024).toFixed(2) +" MB" );
        $("#UploadPicture").val('');
      }
    });

    $(document.body).on('click','.BtnRemoveUploadPicture',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/deletetempuploadpicture',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblUploadPicture > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblUploadPicture > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadPicture/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveUploadPicture" SNo="'+item.SNo+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $("#UploadScanDocument").change(function (e) {
      e.preventDefault();
      var name = document.getElementById("UploadScanDocument").files[0].name;
      if(document.getElementById("UploadScanDocument").files[0].size/1024/1024<=2){
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1)
        {
          alert("Invalid Image File Only allowed .png,.jpg or .jpeg");
          $("#UploadScanDocument").val('');
        }
        else{
          var form_data = new FormData();
          form_data.append("file", document.getElementById('UploadScanDocument').files[0]);
          form_data.append("GuidId", $('#TxtGuidId').val());
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'valuation/UploadTempScan',
            type: "post",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            async: true,
            success: function (data) {
              CheckSession(data);
              $("#UploadScanDocument").val('');
              if (data === "1") {
                var formData1 = {
                  GuidId: $('#TxtGuidId').val(),
                  ValuationId: $('#TxtValuationId').val()
                };
                $.ajax({
                  url: $('#TxtBaseUrl').val() + 'valuation/ListTempUploadScan',
                  datatype: "json",
                  type: "post",
                  contenttype: 'application/json; charset=utf-8',
                  data: formData1,
                  async: false,
                  success: function (data) {
                    CheckSession(data);
                    var obj = $.parseJSON(data);
                    $("#TblUploadScanDocument > tbody").find("tr").remove();
                    $.each(obj, function(i, item) {
                      $('#TblUploadScanDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadScanDocument/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveScanDocument" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
                    });
                  },
                  error: function (xhr) {
                    alert('Error Occured During Data Submission....');
                  }
                });
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      }
      else{
        alert("File size must under 2 MB, This File size is :"+ (document.getElementById("UploadScanDocument").files[0].size/1024/1024).toFixed(2) +" MB" );
        $("#UploadScanDocument").val('');
      }
    });

    $(document.body).on('click','.BtnRemoveScanDocument',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/DeleteTempUploadScan',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblUploadScanDocument > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblUploadScanDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadScanDocument/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveScanDocument" SNo="'+item.SNo+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $("#UploadInternalDocument").change(function (e) {
      e.preventDefault();
      var name = document.getElementById("UploadInternalDocument").files[0].name;
      if(document.getElementById("UploadInternalDocument").files[0].size/1024/1024<=2){
        var ext = name.split('.').pop().toLowerCase();
        var form_data = new FormData();
        form_data.append("file", document.getElementById('UploadInternalDocument').files[0]);
        form_data.append("GuidId", $('#TxtGuidId').val());
        $.ajax({
          url: $('#TxtBaseUrl').val() + 'valuation/UploadTempInternalDocument',
          type: "post",
          data: form_data,
          contentType: false,
          cache: false,
          processData: false,
          async: true,
          success: function (data) {
            CheckSession(data);
            $("#UploadInternalDocument").val('');
            if (data === "1") {
              var formData1 = {
                GuidId: $('#TxtGuidId').val(),
                ValuationId: $('#TxtValuationId').val()
              };
              $.ajax({
                url: $('#TxtBaseUrl').val() + 'valuation/ListTempInternalDocument',
                datatype: "json",
                type: "post",
                contenttype: 'application/json; charset=utf-8',
                data: formData1,
                async: false,
                success: function (data) {
                  CheckSession(data);
                  var obj = $.parseJSON(data);
                  $("#TblUploadInternalDocument > tbody").find("tr").remove();
                  $.each(obj, function(i, item) {
                    $('#TblUploadInternalDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadInternalDocument/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveInternalDocument" SNo="'+item.SNo+'" DataSource="'+item.datasource+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
                  });
                },
                error: function (xhr) {
                  alert('Error Occured During Data Submission....');
                }
              });
            } else {
              alert('Error Occured During Data Submission....');
            }
          },
          error: function (xhr) {
            alert('Error Occured During Data Submission....');
          }
        });
      }
      else{
        alert("File size must under 2 MB, This File size is :"+ (document.getElementById("UploadInternalDocument").files[0].size/1024/1024).toFixed(2) +" MB" );
        $("#UploadInternalDocument").val('');
      }
    });

    $(document.body).on('click','.BtnRemoveInternalDocument',function(){
      event.preventDefault();
      var formData1 = {
        GuidId: $('#TxtGuidId').val(),
        SNo: $(this).attr('SNo'),
        ValuationId: $('#TxtValuationId').val(),
        DataSource: $(this).attr('DataSource')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'valuation/DeleteTempInternalDocument',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData1,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $("#TblUploadInternalDocument > tbody").find("tr").remove();
          $.each(obj, function(i, item) {
            $('#TblUploadInternalDocument > tbody').append('<tr><th scope="row">'+(i+1)+'</th><td>'+item.FileName+'</td><td><a href="'+$('#TxtBaseUrl').val()+'TempUploadInternalDocument/'+item.FileFullName+'" target="_blank" class="" SNo="'+item.SNo+'" tabindex="-1"><i class="fa fa-download"></i></a> &nbsp; <a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveInternalDocument" SNo="'+item.SNo+'" tabindex="-1"><i class="far fa-trash-alt"></i></a></td></tr>');
          });
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });
    
    $('#TxtRAPDAPConsideration').on('dblclick', function(event) {
       $('#TxtRAPDAPConsideration').prop( "readonly", false );
    });
    
    $('#TxtAnnaAPConsideration').on('dblclick', function(event) {
       $('#TxtAnnaAPConsideration').prop( "readonly", false );
    });
    
    // $('#TxtSqMAPConsideration').on('dblclick', function(event) {
    //   $('#TxtSqMAPConsideration').prop( "readonly", false );
    // });
    
    // $('#TxtSqFAPConsideration').on('dblclick', function(event) {
    //   $('#TxtSqFAPConsideration').prop( "readonly", false );
    // });
    
    $("#TxtAnnaAPConsideration").change(function() {
      CalculationAreaRate();
    });

    $("#BtnSaveValuation,#BtnSaveValuationAndStay").click(function(){
      if($(this).attr('id')=='BtnSaveValuationAndStay'){
        $('#TxtSaveAndStay').val('Y');
      }
      var curStep = $('#FrmValuation'),
      curInputs = curStep.find("input"),
      isValid = true;
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }
      curInputs = curStep.find("select");
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }

      if (!isValid){
        return;
      }

      var AreaAsPerLalpurja  =$("#TblAreaAsPerLalpurja > tbody tr").find("td:first")[0].innerText;
      if(AreaAsPerLalpurja===''){
        isValid = false;
        alert('AREA AS PER LALPURJA');
        $('#TxtKitaNo').focus();
        return;
      }

      var AreaAsPerMeasurement  =$("#TblAreaAsPerMeasurement > tbody tr").find("td:first")[0].innerText;
      if(AreaAsPerMeasurement===''){
        isValid = false;
        alert('AREA OF LAND BASED ON ACTUAL MEASUREMENT');
        $('#TxtAreaSymbol').focus();
        return;
      }

      var BoundariesAsPerKitaNo = $("#TblBoundariesAsPerKitaNo > tbody tr").find("td:first")[0].innerText;
      if(BoundariesAsPerKitaNo===''){
        isValid = false;
        alert('PERMANET OF THE BOUNDARIES As per the four Boundaries');
        $('#TxtBoundariesKitaNo').focus();
        return;
      }

      var BoundariesAsPerSiteVisit  = $("#TblBoundariesAsPerSiteVisit > tbody tr").find("td:first")[0].innerText;
      if(BoundariesAsPerSiteVisit===''){
        isValid = false;
        alert('PERMANET OF THE BOUNDARIES As per the Site Visit Four Boundaries');
        $('#TxtAPSiteVisitBoundariesKitaNo').focus();
        return;
      }

      if($('#TxtValuationType').val()==='Land & Building'){
        var BuildingCalculation = $("#TblBuildingCalculation > tbody tr").find("td:first")[0].innerText;
        if(BuildingCalculation===''){
          isValid = false;
          alert('BUILDING CALCULATIONS');
          $('#TxtFloor').focus();
          return;
        }
      }

      if (isValid){
        $("#FrmValuation").submit();
      }

    });


    // ----------- Create New Client -------------
    $('#TxtClient').selectpicker();

    // $('#TxtCRegNo,#TxtCPanNo,#TxtCDateOfIssuePanNo,#TxtCPlaceOfIssuePanNo,#TxtCShareHolders').prop("disabled", true);
    // $('#TxtORegNo,#TxtOPanNo,#TxtODateOfIssuePanNo,#TxtOPlaceOfIssuePanNo,#TxtOShareHolders').prop("disabled", true);
    //
    // $('#RbtnPersonalClient').on('click', function() {
    //   $('#TxtCRegNo,#TxtCPanNo,#TxtCDateOfIssuePanNo,#TxtCPlaceOfIssuePanNo,#TxtCShareHolders').prop("disabled", true);
    //   $('#TxtCFatherName,#TxtCGrandFatherName,#TxtCPlaceOfIssueCitizenshipNo,#TxtCCitizenshipNo,#TxtCDateOfIssueCitizenshipNo').prop("disabled", false);
    // });
    //
    // $('#RbtnCompanyClient').on('click', function() {
    //   $('#TxtCRegNo,#TxtCPanNo,#TxtCDateOfIssuePanNo,#TxtCPlaceOfIssuePanNo,#TxtCShareHolders').prop("disabled", false);
    //   $('#TxtCFatherName,#TxtCGrandFatherName,#TxtCCitizenshipNo,#TxtCDateOfIssueCitizenshipNo,#TxtCPlaceOfIssueCitizenshipNo').prop("disabled", true);
    // });
    //
    // $('#RbtnPersonalOwner').on('click', function() {
    //   $('#TxtORegNo,#TxtOPanNo,#TxtODateOfIssuePanNo,#TxtOPlaceOfIssuePanNo,#TxtOShareHolders').prop("disabled", true);
    //   $('#TxtOFatherName,#TxtOGrandFatherName,#TxtOPlaceOfIssueCitizenshipNo,#TxtOCitizenshipNo,#TxtODateOfIssueCitizenshipNo').prop("disabled", false);
    // });
    //
    // $('#RbtnCompanyOwner').on('click', function() {
    //   $('#TxtORegNo,#TxtOPanNo,#TxtODateOfIssuePanNo,#TxtOPlaceOfIssuePanNo,#TxtOShareHolders').prop("disabled", false);
    //   $('#TxtOFatherName,#TxtOGrandFatherName,#TxtOCitizenshipNo,#TxtODateOfIssueCitizenshipNo,#TxtOPlaceOfIssueCitizenshipNo').prop("disabled", true);
    // });

    $('#ChkOwnerAndClientSame').on('click', function() {
      if($(this).prop("checked") == true){
        $('#TxtOFullName').val($('#TxtCFullName').val());
        $('#TxtOFatherName').val($('#TxtCFatherName').val());
        $('#TxtOGrandFatherName').val($('#TxtCGrandFatherName').val());
        $('#TxtOHusbandName').val($('#TxtCHusbandName').val());
        $('#TxtOFatherInLawName').val($('#TxtCFatherInLawName').val());
        $('#TxtOSpouseName').val($('#TxtCSpouseName').val());
        $('#TxtOAddress').val($('#TxtCAddress').val());
        $('#TxtODistrict').val($('#TxtCDistrict').val());
        $('#TxtOCitizenshipNo').val($('#TxtCCitizenshipNo').val());
        $('#TxtODateOfIssueCitizenshipNo').val($('#TxtCDateOfIssueCitizenshipNo').val());
        $('#TxtOPlaceOfIssueCitizenshipNo').val($('#TxtCPlaceOfIssueCitizenshipNo').val());
        $('#TxtOContactNo').val($('#TxtCContactNo').val());
        $('#TxtORegNo').val($('#TxtCRegNo').val());
        $('#TxtOPanNo').val($('#TxtCPanNo').val());
        $('#TxtODateOfIssuePanNo').val($('#TxtCDateOfIssuePanNo').val());
        $('#TxtOPlaceOfIssuePanNo').val($('#TxtCPlaceOfIssuePanNo').val());
        $('#TxtOShareHolders').val($('#TxtCShareHolders').val());
      }
      else if($(this).prop("checked") == false){
        $('#TxtOFullName,#TxtOFatherName,#TxtOGrandFatherName,#TxtOSpouseName,#TxtOAddress,#TxtODistrict,#TxtOCitizenshipNo,#TxtODateOfIssueCitizenshipNo,#TxtOPlaceOfIssueCitizenshipNo,#TxtOContactNo,#TxtORegNo,#TxtOPanNo,#TxtODateOfIssuePanNo,#TxtOPlaceOfIssuePanNo,#TxtOShareHolders').val('');
      }
    });

    $(".BtnDeleteClient").on("click").click(function (n) {
      var formData = {
        ClientId: $(this).attr('ClientId')
      };
      bootbox.confirm("Are you sure you want to delete <strong>"+ $(this).attr('ClientName') +"</strong> client...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/deleteclientbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                location.reload();
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });

    // --------------------------
    $(".BtnPrePrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationpreprint/ValuationPrePrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            //newWin.print();
            //newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });
    // -----------
    $(".BtnPrabhuPrePrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationpraphubankpreprint/ValuationPraphuBankPrePrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            // newWin.print();
            // newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });
    // -----------
    $(".BtnSbiPrePrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationsbibankpreprint/ValuationSbiBankPrePrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            // newWin.print();
            // newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });
    // -----------
    $(".BtnNicPrePrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationnicbankpreprint/ValuationNicBankPrePrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            // newWin.print();
            // newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });
    // --------------------------
    $(".BtnFinalPrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationfinalprint/ValuationFinalPrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            //newWin.print();
            //newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
          $(".PrintSectionPrePrint").html('');
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });

    // --------------------------
    $(".BtnNicFinalPrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationfinalprint/ValuationNicFinalPrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            //newWin.print();
            //newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
          $(".PrintSectionPrePrint").html('');
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });

    $(".BtnPrabhuFinalPrint").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      $(".section-detail").html('');
      var _url=$('#TxtBaseUrl').val()+'valuation/valuationfinalprint/ValuationPrabhuFinalPrint';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          $(".PrintSectionPrePrint").html(datap);
          var divToPrint=document.getElementById("PrintDiv");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          setTimeout(function(){
            //newWin.print();
            //newWin.close();
            $(".PrintSectionPrePrint").html('');
          }, 500);
          $(".PrintSectionPrePrint").html('');
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });

    $(".BtnDeleteValution").off("click").click(function (n) {
      alert('i am delete');
      // var ValuationId = $(this).attr('ValuationId');
      // $(".section-detail").html('');
      // var _url=$('#TxtBaseUrl').val()+'valuation/valuationfinalprint/ValuationFinalPrint';
      // $.ajax({
      //   url: _url,
      //   datatype: "json",
      //   type: "post",
      //   contenttype: 'application/json; charset=utf-8',
      //   async: false,
      //   data: { ValuationId: ValuationId },
      //   success: function (datap) {
      //     $(".PrintSectionPrePrint").html(datap);
      //     var divToPrint=document.getElementById("PrintDiv");
      //     newWin= window.open("");
      //     newWin.document.write(divToPrint.outerHTML);
      //     setTimeout(function(){
      //       //newWin.print();
      //       //newWin.close();
      //       $(".PrintSectionPrePrint").html('');
      //     }, 500);
      //     $(".PrintSectionPrePrint").html('');
      //   },
      //   error: function (xhr) {
      //     alert(xhr);
      //   }
      // });
    });

    $(".BtnValutionComplete").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      var _url=$('#TxtBaseUrl').val()+'valuation/MakeValutionComplete';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          location.reload();
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });

    // $(".BtnMakeBilling").off("click").click(function (n) {
    //   var ValuationId = $(this).attr('ValuationId');
    //   var _url=$('#TxtBaseUrl').val()+'valuation/MakePaymentPending';
    //   $.ajax({
    //     url: _url,
    //     datatype: "json",
    //     type: "post",
    //     contenttype: 'application/json; charset=utf-8',
    //     async: false,
    //     data: { ValuationId: ValuationId },
    //     success: function (datap) {
    //       location.reload();
    //     },
    //     error: function (xhr) {
    //       alert(xhr);
    //     }
    //   });
    // });
    //
    // $(".BtnPaymentDone").off("click").click(function (n) {
    //   var ValuationId = $(this).attr('ValuationId');
    //   var _url=$('#TxtBaseUrl').val()+'valuation/MakePaymentDone';
    //   $.ajax({
    //     url: _url,
    //     datatype: "json",
    //     type: "post",
    //     contenttype: 'application/json; charset=utf-8',
    //     async: false,
    //     data: { ValuationId: ValuationId },
    //     success: function (datap) {
    //       location.reload();
    //     },
    //     error: function (xhr) {
    //       alert(xhr);
    //     }
    //   });
    // });

    $(".BtnValutionCancel").off("click").click(function (n) {
      var ValuationId = $(this).attr('ValuationId');
      var _url=$('#TxtBaseUrl').val()+'valuation/MakeValutionCancel';
      $.ajax({
        url: _url,
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        async: false,
        data: { ValuationId: ValuationId },
        success: function (datap) {
          location.reload();
        },
        error: function (xhr) {
          alert(xhr);
        }
      });
    });

    $(".BtnMyLatestValuation").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/index';
      window.location.href = _url;
    });

    $(".BtnMyCompletedValuation").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/Listcompletedvaluation';
      window.location.href = _url;
    });

    $(".BtnMyTotalValuation").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/ListTotalvaluation';
      window.location.href = _url;
    });

    $(".BtnMyPaymentPending").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/ListPaymentPending';
      window.location.href = _url;
    });

    $(".BtnMyPaymentDone").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/ListPaymentDone';
      window.location.href = _url;
    });

    $(".BtnMyCanceledValuation").off("click").click(function (n) {
      var _url=$('#TxtBaseUrl').val()+'dashboard/ListCanceledValuation';
      window.location.href = _url;
    });

    // ----------------- MANAGE USER-------------------------
    $('#UserMasterModal').on('shown.bs.modal', function() {
      if($('#TxtTag').val()===''){
        $('#TxtTag').val("NEW");
      }
      $('#TxtFullName').trigger('focus');
    });

    $("#UserMasterModal").on('hidden.bs.modal', function () {
      if ($('#TxtUserId').val() !== '')
      window.location.reload();
    });

    $("#BtnSaveUserMaster").click(function(){
      var curStep = $(this).closest(".modal"),
      curInputs = curStep.find("input"),
      isValid = true;
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }

      if (isValid){
        var formData = {
          Tag: $('#TxtTag').val(),
          UserId: $("#TxtUserId").val(),
          FullName: $("#TxtFullName").val(),
          MobileNo: $("#TxtContactNo").val(),
          EmailId: $("#TxtEmailId").val(),
          Address: $("#TxtAddress").val(),
          LoginUserName: $("#TxtLoginUserName").val(),
          Password: $("#TxtPassword").val(),
          IsActive: $("#ChkIsActive").val(),
        };

        $.ajax({
          url: $('#TxtBaseUrl').val() + 'master/saveuser',
          datatype: "json",
          type: "post",
          contenttype: 'application/json; charset=utf-8',
          data: formData,
          async: true,
          success: function (data) {
            CheckSession(data);
            if (data === "1") {
              $('#TxtUserId').val(data);
              $("#TxtFullName,#TxtContactNo,#TxtEmailId,#TxtAddress,#TxtLoginUserName,#TxtPassword,#TxtRePassword").val('');
              $("#ChkStatus").val('1');
              alert('Data Submitted Successfully....');
              $("#TxtFullName").focus();
              if ($('#TxtTag').val() === 'EDIT') {
                $('#UserMasterModal').modal('hide');
              }

            } else {
              alert('Error Occured During Data Submission...');
            }
          },
          error: function (xhr) {
            alert('Error Occured During Data Submission...');
          }
        });
      }
    });

    $(".BtnEditUser").on("click").click(function (n) {
      var formData = {
        UserId: $(this).attr('UserId')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/listuserbyid',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $('#TxtUserId').val(obj[0]['UserId']);
          $('#TxtTag').val('EDIT');
          $('#TxtFullName').val(obj[0]['FullName']);
          $('#TxtContactNo').val(obj[0]['MobileNo']);
          $('#TxtEmailId').val(obj[0]['EmailId']);
          $('#TxtAddress').val(obj[0]['Address']);
          $('#TxtLoginUserName').val(obj[0]['LoginUserName']);
          $('#TxtPassword').val(obj[0]['Password']);
          $('#TxtRePassword').val(obj[0]['Password']);
          $('#ChkIsActive').val(obj[0]['IsActive']);

          $("#TxtLoginUserName").prop("disabled", true);
          $("#TxtPassword").prop("disabled", true);
          $("#TxtRePassword").prop("disabled", true);

          $('#UserMasterModal').modal('show');
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $(".BtnDeleteUser").on("click").click(function (n) {
      var formData = {
        UserId: $(this).attr('UserId')
      };
      bootbox.confirm("Are you sure you want to delete <strong>"+ $(this).attr('UserName') +"</strong> user...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/deleteuserbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                location.reload();
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });

    $(".BtnResetPassword").on("click").click(function (n) {
      var formData = {
        UserId: $(this).attr('UserId')
      };
      bootbox.confirm("Are you sure you want to reset password of <strong>"+ $(this).attr('UserName') +"</strong> user...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/resetpasswordbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                alert('Password reset Successfully...');
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });

    // ----------------- MANAGE BANK-------------------------
    $('#BankMasterModal').on('shown.bs.modal', function() {
      if($('#TxtTag').val()===''){
        $('#TxtTag').val("NEW");
      }
      $('#TxtBankName').trigger('focus');
    });

    $("#BankMasterModal").on('hidden.bs.modal', function () {
      if ($('#TxtBankId').val() !== '')
      window.location.reload();
    });

    $("#BtnSaveBank").click(function(){
      var curStep = $(this).closest(".modal"),
      curInputs = curStep.find("input"),
      isValid = true;
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }

      if (isValid){
        var formData = {
          Tag: $('#TxtTag').val(),
          BankId: $("#TxtBankId").val(),
          BankName: $("#TxtBankName").val(),
          CommercialValue: $("#TxtCommercialValue").val(),
          FairMarketValue: $("#TxtFairMarketValue").val(),
          GovernmentValue: $("#TxtGovernmentValue").val(),
          IsFairMarketCalculationGovWise: $("#IsFairMarketCalculationGovWise").prop("checked") ? 1:0,
          IsFairMarketCalculationMarketWise: $("#IsFairMarketCalculationMarketWise").prop("checked") ? 1:0,
          IsDistressCalculationGovWise: $("#IsDistressCalculationGovWise").prop("checked") ? 1:0,
          IsDistressCalculationFairMarketWise: $("#IsDistressCalculationFairMarketWise").prop("checked") ? 1:0,
          UserId: $("#TxtUserId").val(),
        };

        $.ajax({
          url: $('#TxtBaseUrl').val() + 'master/savebank',
          datatype: "json",
          type: "post",
          contenttype: 'application/json; charset=utf-8',
          data: formData,
          async: true,
          success: function (data) {
            CheckSession(data);
            if (data === "1") {
              $('#TxtBankId').val(data);
              $("#TxtBankName,#TxtCommercialValue,#TxtCommercialValue,#TxtFairMarketValue,#TxtGovernmentValue").val('');
              alert('Data Submitted Successfully....');
              $("#TxtBankName").focus();
              if ($('#TxtTag').val() === 'EDIT') {
                $('#BankMasterModal').modal('hide');
              }
            } else {
              alert('Error Occured During Data Submission....');
            }
          },
          error: function (xhr) {
            alert('Error Occured During Data Submission....');
          }
        });
      }
    });

    $(".BtnEditBank").on("click").click(function (n) {
      var formData = {
        BankId: $(this).attr('BankId')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/listbankbyid',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $('#TxtBankId').val(obj[0]['BankId']);
          $('#TxtTag').val('EDIT');
          $('#TxtBankName').val(obj[0]['BankName']);
          $('#TxtCommercialValue').val(obj[0]['CommercialValue']);
          $('#TxtFairMarketValue').val(obj[0]['FairMarketValue']);
          $('#TxtGovernmentValue').val(obj[0]['GovernmentValue']);
          if(obj[0]['IsFairMarketCalculationGovWise']=="1"){
            $( "#IsFairMarketCalculationGovWise" ).prop( "checked", true);
          }
          else{
            $( "#IsFairMarketCalculationGovWise" ).prop( "checked", false);
          }
          if(obj[0]['IsFairMarketCalculationMarketWise']=="1"){
            $( "#IsFairMarketCalculationMarketWise" ).prop( "checked", true);
          }
          else{
            $( "#IsFairMarketCalculationMarketWise" ).prop( "checked", false);
          }
          if(obj[0]['IsDistressCalculationGovWise']=="1"){
            $( "#IsDistressCalculationGovWise" ).prop( "checked", true);
          }
          else{
            $( "#IsDistressCalculationGovWise" ).prop( "checked", false);
          }
          if(obj[0]['IsDistressCalculationFairMarketWise']=="1"){
            $( "#IsDistressCalculationFairMarketWise" ).prop( "checked", true);
          }
          else{
            $( "#IsDistressCalculationFairMarketWise" ).prop( "checked", false);
          }
          $('#BankMasterModal').modal('show');
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });


    $(".BtnDeleteBank").on("click").click(function (n) {
      var formData = {
        BankId: $(this).attr('BankId')
      };
      bootbox.confirm("Are you sure you want to delete <strong>"+ $(this).attr('BankName') +"</strong> bank...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/deletebankbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                location.reload();
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });

    // ----------------- MANAGE BRANCH-------------------------
    $('#BranchMasterModal').on('shown.bs.modal', function() {
      if($('#TxtTag').val()===''){
        $('#TxtTag').val("NEW");
      }
      $('#TxtBankId').trigger('focus');
    });

    $("#BranchMasterModal").on('hidden.bs.modal', function () {
      if ($('#TxtBranchId').val() !== '')
      window.location.reload();
    });

    $("#BtnSaveBranch").click(function(){
      var curStep = $(this).closest(".modal"),
      curInputs = curStep.find("input"),
      isValid = true;
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }

      if (isValid){
        var formData = {
          Tag: $('#TxtTag').val(),
          BranchId: $("#TxtBranchId").val(),
          BankId: $("#TxtBankId").val(),
          BranchName: $("#TxtBranchName").val(),
          ContactNo: $("#TxtContactNo").val(),
          EmailId: $("#TxtEmailId").val(),
          Address: $("#TxtAddress").val(),
          UserId: $("#TxtUserId").val(),
        };

        $.ajax({
          url: $('#TxtBaseUrl').val() + 'master/savebranch',
          datatype: "json",
          type: "post",
          contenttype: 'application/json; charset=utf-8',
          data: formData,
          async: true,
          success: function (data) {
            CheckSession(data);
            if (data === "1") {
              $('#TxtBranchId').val(data);
              $('#TxtBankId').val('');
              $("#TxtBranchName,#TxtContactNo,#TxtEmailId,#TxtAddress").val('');
              alert('Data Submitted Successfully....');
              $("#TxtBankId").focus();
              if ($('#TxtTag').val() === 'EDIT') {
                $('#BranchMasterModal').modal('hide');
              }
            } else {
              alert('Error Occured During Data Submission....');
            }
          },
          error: function (xhr) {
            alert('Error Occured During Data Submission....');
          }
        });
      }
    });

    $('body').on('click','.BtnEditBranch',function(n){
      var formData = {
        BranchId: $(this).attr('BranchId')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/ListBranchById',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          //console.log(data);
          CheckSession(data);
          var obj = $.parseJSON(data);
          $('#TxtTag').val('EDIT');
          $('#TxtBranchId').val(obj[0]['BranchId']);
          $('#TxtBankId').val(obj[0]['BankId']);
          $('#TxtBranchName').val(obj[0]['BranchName']);
          $('#TxtContactNo').val(obj[0]['ContactNo']);
          $('#TxtEmailId').val(obj[0]['EmailId']);
          $('#TxtAddress').val(obj[0]['Address']);
          $('#BranchMasterModal').modal('show');
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });

    $(".BtnDeleteBranch").on("click").click(function (n) {
      var formData = {
        BranchId: $(this).attr('BranchId')
      };
      bootbox.confirm("Are you sure you want to delete <strong>"+ $(this).attr('BranchName') +"</strong> branch...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/deletebranchbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                location.reload();
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });


    // ----------------- MANAGE LEDGER MASTER-------------------------
    $('#LedgerMasterModal').on('shown.bs.modal', function() {
      if($('#TxtTag').val()===''){
        $('#TxtTag').val("NEW");
      }
      $('#TxtCFullName').trigger('focus');
    });

    $("#LedgerMasterModal").on('hidden.bs.modal', function () {
      if ($('#TxtClientId').val() !== '')
      window.location.reload();
    });

    $("#BtnSaveLedgerMaster").click(function(){
      var curStep = $(this).closest(".modal"),
      curInputs = curStep.find("input"),
      isValid = true;
      for(var i=0; i<curInputs.length; i++){
        if (!$(curInputs[i]).valid()){
          isValid = false;
        }
      }

      if (isValid){
        var formData = {
          Tag: $('#TxtTag').val(),
          ClientId: $("#TxtClientId").val(),
          CFullName: $("#TxtCFullName").val(),
          CContactNo: $("#TxtCContactNo").val(),
          CAddress: $("#TxtCAddress").val(),
          Category: $("#TxtCategory").val(),
          UserId: $("#TxtUserId").val(),
        };

        $.ajax({
          url: $('#TxtBaseUrl').val() + 'master/saveledgermaster',
          datatype: "json",
          type: "post",
          contenttype: 'application/json; charset=utf-8',
          data: formData,
          async: true,
          success: function (data) {
            CheckSession(data);
            if (data === "1") {
              $('#TxtClientId').val(data);
              $("#TxtCFullName,#TxtCContactNo,#TxtCAddress,#TxtCategory").val('');
              alert('Data Submitted Successfully....');
              $("#TxtCFullName").focus();
              if ($('#TxtTag').val() === 'EDIT') {
                $('#LedgerMasterModal').modal('hide');
              }
            } else {
              alert('Error Occured During Data Submission....');
            }
          },
          error: function (xhr) {
            alert('Error Occured During Data Submission....');
          }
        });
      }
    });

    $(".BtnEditLedgerMaster").on("click").click(function (n) {
      var formData = {
        ClientId: $(this).attr('ClientId')
      };
      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/listledgermasterbyId',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          CheckSession(data);
          var obj = $.parseJSON(data);
          $('#TxtClientId').val(obj[0]['ClientId']);
          $('#TxtTag').val('EDIT');
          $('#TxtCFullName').val(obj[0]['CFullName']);
          $('#TxtCContactNo').val(obj[0]['CContactNo']);
          $('#TxtCAddress').val(obj[0]['CAddress']);
          $('#TxtCategory').val(obj[0]['Category']);
          $('#LedgerMasterModal').modal('show');
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission....');
        }
      });
    });


    $(".BtnDeleteLedgerMaster").on("click").click(function (n) {
      var formData = {
        ClientId: $(this).attr('ClientId')
      };
      bootbox.confirm("Are you sure you want to delete <strong>"+ $(this).attr('CFullName') +"</strong> bank...?", function(result)
      {
        if(result===true)
        {
          $.ajax({
            url: $('#TxtBaseUrl').val() + 'master/deleteclientbyid',
            datatype: "json",
            type: "post",
            contenttype: 'application/json; charset=utf-8',
            data: formData,
            async: true,
            success: function (data) {
              CheckSession(data);
              if (data === "1") {
                location.reload();
              } else {
                alert('Error Occured During Data Submission....');
              }
            },
            error: function (xhr) {
              alert('Error Occured During Data Submission....');
            }
          });
        }
      });
    });

    $("#TxtOldPassword").blur(function(){
      var formData = {
        UserId: $("#TxtUserId").val(),
        Password: $("#TxtOldPassword").val()
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/checkoldpassword',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          CheckSession(data);
          if (data === "1") {
            $('#lblchangepasswordmsg').text('');
          } else {
            $('#lblchangepasswordmsg').text('Old Password not matched');
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission...');
        }
      });

    });

    $("#TxtNewPassword").blur(function(){
      if($('#TxtNewPassword').val()!='' && $('#TxtReNewPassword').val()!=''){
        if($('#TxtNewPassword').val()!=$('#TxtReNewPassword').val()){
          $('#BtnChangePassword').prop( "disabled", true );
          $('#lblchangepasswordmsg').text('New Password and Re New Password not matched');
        }
        else{
          $('#lblchangepasswordmsg').text('');
            $('#BtnChangePassword').prop( "disabled", false );
        }
      }
    });

    $("#TxtReNewPassword").blur(function(){
      if($('#TxtNewPassword').val()!='' && $('#TxtReNewPassword').val()!=''){
        if($('#TxtNewPassword').val()!=$('#TxtReNewPassword').val()){
          $('#BtnChangePassword').prop( "disabled", true );
          $('#lblchangepasswordmsg').text('New Password and Re New Password not matched');
          return;
        }
        else{
          $('#lblchangepasswordmsg').text('');
            $('#BtnChangePassword').prop( "disabled", false );
        }
      }
    });


    $("#BtnChangePassword").click(function(){
      var formData = {
        UserId: $("#TxtUserId").val(),
        Password: $("#TxtNewPassword").val()
      };

      $.ajax({
        url: $('#TxtBaseUrl').val() + 'master/changepassword',
        datatype: "json",
        type: "post",
        contenttype: 'application/json; charset=utf-8',
        data: formData,
        async: true,
        success: function (data) {
          CheckSession(data);
          if (data === "1") {
            $('#lblchangepasswordmsgsucess').text('Password Successfully changed');
          } else {
            alert('Error Occured During Chnage Password...');
          }
        },
        error: function (xhr) {
          alert('Error Occured During Data Submission...');
        }
      });

    });



  }); // -----------CLOSE DOCUMENT READY---------------

  function CheckSession(data){
    var n = data.indexOf("<!DOCTYPE html>");
    if (Number(n)>0){
      window.location.href = $('#TxtBaseUrl').val();
    }
  }

    </script>


    <script>
        $(documnet).on('click','.addAreaAPLalpurja',function(){

        })
    </script>
    
@endpush