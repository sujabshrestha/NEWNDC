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
                                            <option disabled selected="selected">Select Floor</option>
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
                                        <label>Area/Sq. Ft.</label>
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
                                    {{-- <div class="form-group col-md-12">
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
                                    </div> --}}
                                </div>
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
        $(document).on('keyup','#sqm_as_lalpurja',function(){
            var SqM = $(this).val()     
            var SqF = $(this).val()*10.76;
            //console.log('SqF :'+Number(SqF).toFixed(2));
            $('#sqFAPLalpurja').val(($(this).val()*10.76).toFixed(2));
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

            $('#ropani_as_lalpurja').val(OnlyRopani);
            $('#anna_as_lalpurja').val(OnlyAana);
            $('#paisa_as_lalpurja').val(OnlyPaisa);
            $('#dam_as_lalpurja').val(Number(OnlyDam).toFixed(2));
            $('#sqf_as_lalpurja').val(SqF.toFixed(2));
            $('#rapd_as_lalpurja').val(Number(OnlyRopani)+'-'+Number(OnlyAana)+'-'+Number(OnlyPaisa)+'-'+Number(OnlyDam).toFixed(2));
            $('#area_in_anna_as_lalpurja').val(Number(SqF/ 342.25).toFixed(2));


        })


        $("#sideA,#sideB,#sideC").keyup(function() {
            var SideA = Number($("#sideA").val());
            var SideB = Number($("#sideB").val());
            var SideC = Number($("#sideC").val());
            var SideS = (SideA+SideB+SideC)/2;
            $('#sideS').val(SideS.toFixed(2));
            var _a = Number(SideS)*(Number(SideS)-Number(SideA))*(Number(SideS)-Number(SideB))*(Number(SideS)-Number(SideC));
            $('#sqFAPMeasurement').val(Math.sqrt(Number(Math.abs(_a))).toFixed(2));
            $('#sqMAPMeasurement').val((Number($('#sqFAPMeasurement').val())*0.092903).toFixed(2));
            var SqFAPMeasurement = $('#sqFAPMeasurement').val();
            $('#areaInAnnaAPMeasurement').val(Number(SqFAPMeasurement/342.25).toFixed(2));
        });
    </script>



    <script>
            //  BUILDING CALCULATIONS
            $(document).on('keyup','#floorAreaInSqF,#floorRate,#sanitaryPulumbingPercentage,#electricityWorkPercentage,#floorDepriciationPercentage',function(){
                var floorArea = $('#floorAreaInSqF').val();
                var floorRate = $('#floorRate').val();
                var floorAmt = floorArea*floorRate;
                $('#floorAmount').val(floorAmt);

                var sanitary = $('#sanitaryPulumbingPercentage').val()/100;
                var electric = $('#electricityWorkPercentage').val()/100;
                var depriciation = $('#floorDepriciationPercentage').val()/100;

                var sanitaryAmt = sanitary*floorAmt;
                var electricAmt = electric*floorAmt;
                var depriciationAmt = depriciation*floorAmt;
                var floorNetAmount = sanitaryAmt+electricAmt+depriciationAmt+floorAmt;
                $('#floorNetAmount').val(floorNetAmount);

            })
    </script>


    <script>
        //   Government Rate of Land
        $(document).on('keyup','#perAnnaAPGovRate',function(){
            var perAnnaAPGovRate = $('#perAnnaAPGovRate').val();
            var perSqFAPGovRate = (perAnnaAPGovRate/342.25).toFixed(2);
            var perRopaniAPGovRate = perAnnaAPGovRate*16;
            $('#perSqFAPGovRate').val(perSqFAPGovRate);
            $('#perRopaniAPGovRate').val(perRopaniAPGovRate);
        })
        // Market Rate of Land
        $(document).on('keyup','#perAnnaAPMarketRate',function(){
            var perAnnaAPMarketRate = $('#perAnnaAPMarketRate').val();
            var perSqFAPMarketRate = (perAnnaAPMarketRate/342.25).toFixed(2);
            var perRopaniAPMarketRate = perAnnaAPMarketRate*16;
            $('#perSqFAPMarketRate').val(perSqFAPMarketRate);
            $('#perRopaniAPMarketRate').val(perRopaniAPMarketRate);
        })
    </script>

    <script>
        $("#deductionOfRoadSqF,#landDevelopmentPercent,#deductionForHighTensionSqF,#deductionForLowLandSqF,#deductionForRiverSqF,#deductionForBoundryCorrection,#deductionForIrregularShapeSloppyLand").change(function() {
      CalculateConsiderationArea();
      CalculationAreaRate();
    });

    function CalculateConsiderationArea(){
      var _v1= Number($('#totalAreaInAnna').val());
      var _v2= Number($('#totalAreaInAnnaAPMeasurement').val());
      var DeductionOfRoadSqF = Number($("#deductionOfRoadSqF").val());
      var LandDevelopmentPercent = Number($("#landDevelopmentPercent").val());
      var DeductionForHighTensionSqF = Number($("#deductionForHighTensionSqF").val());
      var DeductionForLowLandSqF = Number($("#deductionForLowLandSqF").val());
      var DeductionForRiverSqF = Number($("#deductionForRiverSqF").val());
      var BoundryCorrectionPercent = Number($("#deductionForBoundryCorrection").val());
      var IrregularShapePercent = Number($("#deductionForIrregularShapeSloppyLand").val());
      if(_v2<_v1){
        var TotalSqFAsPerCal = Number($("#totalSqFAsPerCal").val());
        var _v1 =(TotalSqFAsPerCal/100)*LandDevelopmentPercent;
        var _v2 =(TotalSqFAsPerCal/100)*BoundryCorrectionPercent;
        var _v3 =(TotalSqFAsPerCal/100)*IrregularShapePercent;
        var Val = TotalSqFAsPerCal-(DeductionOfRoadSqF+DeductionForHighTensionSqF+DeductionForLowLandSqF+DeductionForRiverSqF+(_v1)+(_v2)+(_v3));
        
        $('#sqMAPConsideration').val((Number(Val)*0.092903).toFixed(2));
        $('#sqFAPConsideration').val(Number(Val).toFixed(2));

        var TotalRAPD = SqFToRAPD(Val);
        $('#TxtRAPDAPConsideration').val(TotalRAPD);
        $('#TxtAnnaAPConsideration').val((Number(Val)/342.25).toFixed(2));

        var x1 =Number((TotalSqFAsPerCal/100)*LandDevelopmentPercent);
        $('#landDevelopmentSqF').val(Number(x1).toFixed(2));
        $('#afterLandDevelopmentAreaInAnna').val((Number(x1/342.25)).toFixed(2));
        $('#afterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

        var x2 =Number((TotalSqFAsPerCal/100)*BoundryCorrectionPercent);
        $('#deductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
        $('#afterBoundryCorrectionAreaInAnna').val((Number(x2/342.25)).toFixed(2));
        $('#afterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

        var x3 =Number((TotalSqFAsPerCal/100)*IrregularShapePercent);
        $('#afterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
        $('#afterIrregularShapeSloppyLandAreaInAnna').val((Number(x3/342.25)).toFixed(2));
        $('#afterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
      }
      else{
        alert('asdkhkhk');
        var TotalSqF = Number($("#totalSqF").val());
        var _v1 =(TotalSqF/100)*LandDevelopmentPercent;
        var _v2 =(TotalSqF/100)*BoundryCorrectionPercent;
        var _v3 =(TotalSqF/100)*IrregularShapePercent;
        var Val = TotalSqF-(DeductionOfRoadSqF+DeductionForHighTensionSqF+DeductionForLowLandSqF+DeductionForRiverSqF+(_v1)+(_v2)+(_v3));
      
        $('#sqMAPConsideration').val((Number(Val)*0.092903).toFixed(2));
        $('#sqFAPConsideration').val(Number(Val).toFixed(2));
        var TotalRAPD = SqFToRAPD(Val);
        $('#rAPDAPConsideration').val(TotalRAPD);
        $('#annaAPConsideration').val((Number(Val)/342.25).toFixed(2));

        var x1 =Number((TotalSqF/100)*LandDevelopmentPercent);
        $('#landDevelopmentSqF').val(Number(x1).toFixed(2));
        $('#afterLandDevelopmentAreaInAnna').val((Number(x1/342.25)).toFixed(2));
        $('#afterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

        var x2 =Number((TotalSqF/100)*BoundryCorrectionPercent);
        $('#deductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
        $('#afterBoundryCorrectionAreaInAnna').val((Number(x2/342.25)).toFixed(2));
        $('#afterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

        var x3 =Number((TotalSqF/100)*IrregularShapePercent);
        $('#afterIrregularShapeSloppyLandAreaInAnna').val((Number(x3/342.25)).toFixed(2));
        $('#afterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
        $('#afterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
      }

      $('#afterDeductionOfRoadAreaInAnna').val((Number(DeductionOfRoadSqF/342.25)).toFixed(2));
      $('#afterDeductionOfRoadAreaInRPAD').val(SqFToRAPD(Number(DeductionOfRoadSqF).toFixed(2)));

      $('#afterHighTensionAreaInAnna').val((Number(DeductionForHighTensionSqF/342.25)).toFixed(2));
      $('#afterHighTensionAreaInRPAD').val(SqFToRAPD(Number(DeductionForHighTensionSqF).toFixed(2)));

      $('#afterLowLandAreaInAnna').val((Number(DeductionForLowLandSqF/342.25)).toFixed(2));
      $('#afterLowLandAreaInRPAD').val(SqFToRAPD(Number(DeductionForLowLandSqF).toFixed(2)));

      $('#afterRiverAreaInAnna').val((Number(DeductionForRiverSqF/342.25)).toFixed(2));
      $('#afterRiverAreaInRPAD').val(SqFToRAPD(Number(DeductionForRiverSqF).toFixed(2)));
    }

    $("#perAnnaAPGovRate").change(function() {
      $('#perSqFAPGovRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
      $('#perRopaniAPGovRate').val(Number(Number($(this).val())*16).toFixed(2));
      CalculationAreaRate();
    });

    $("#perAnnaAPMarketRate").change(function() {
      $('#perSqFAPMarketRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
      $('#perRopaniAPMarketRate').val(Number(Number($(this).val())*16).toFixed(2));
      CalculationAreaRate();
    });

    function CalculationAreaRate(){
      var v1 = Number($('#perAnnaAPGovRate').val());
      var v2 = Number($('#perAnnaAPMarketRate').val());

      var _v1 = Number($('#bankId').attr("mygovernmentvalue"));

      if(Number($('#bankId').attr("myisfairmarketcalculationgovwise"))===0) _v1=0;
      var _v2 =Number($('#bankId').attr("mycommercialvalue"));
      var v3 = ((v1/100)*_v1)+((v2/100)*_v2);
      $('#perAnnaAPFairRate').val(v3.toFixed(2));
      $('#perSqFAPFairRate').val(Number(Number(v3.toFixed(2)) / 342.25).toFixed(2));
      $('#perRopaniAPFairRate').val(Number(Number(v3.toFixed(2))*16).toFixed(2));

      var _v11 = Number($('#bankId').attr("mygovernmentvalue"));
      var _v3 = Number($('#bankId').attr("myfairmarketvalue"));
      if(Number($('#bankId').attr("myisdistresscalculationgovwise"))===1){
        $('#perAnnaAPDistressRate').val(Number((v3.toFixed(2))/100*_v3)+Number((v1.toFixed(2))/100*_v11) );
      }
      else {
        $('#perAnnaAPDistressRate').val(Number((v3.toFixed(2))/100*_v3).toFixed(2) );
      }
      $('#perSqFAPDistressRate').val(Number(Number($('#perAnnaAPDistressRate').val()) / 342.25).toFixed(2));
      $('#perRopaniAPDistressRate').val(Number(Number($('#perAnnaAPDistressRate').val())*16).toFixed(2));

      var v4 = Number($('#totalAreaInAnna').val());
      var v5 = Number($('#annaAPConsideration').val());
      if(v5<v4){
        $('#governmentValueOfLand').val(Number(Number($('#perAnnaAPGovRate').val()) * Number($('#annaAPConsideration').val())).toFixed(2));
        $('#commercialValueOfLand').val(Number(Number($('#perAnnaAPMarketRate').val()) * Number($('#annaAPConsideration').val())).toFixed(2));
        $('#fairMarketValueOfLand').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($('#annaAPConsideration').val())).toFixed(2));
        $('#distressValueOfLand').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($('#annaAPConsideration').val())).toFixed(2));
      }
      else{
        $('#governmentValueOfLand').val(Number(Number($('#perAnnaAPGovRate').val()) * Number($('#totalAreaInAnna').val())).toFixed(2));
        $('#commercialValueOfLand').val(Number(Number($('#perAnnaAPMarketRate').val()) * Number($('#totalAreaInAnna').val())).toFixed(2));
        $('#fairMarketValueOfLand').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($('#totalAreaInAnna').val())).toFixed(2));
        $('#distressValueOfLand').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($('#totalAreaInAnna').val())).toFixed(2));
      }
    }

    </script>


   
    
@endpush