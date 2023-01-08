@extends('layouts.admin.master')

@section('title', 'NDC | Valuation Long Form ')

@section('breadcrumb', 'Valuation Long Form ')

@push('styles')
    <style>
        .required {
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
                    <a class="btn btn-secondary float-right " href="{{ url()->previous() }}">Previous Page</a>

                </div>
                <hr>
                <div class="col-md-12">
                    <form action="http://ndcnepal.com.np/ndc/valuation/savevaluation" method="post">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group>
                                    <label style="color:
                                    #dc1de9;margin-bottom: 0px;">
                                    <h6><b>1 GENERAL DETAILS</b></h6>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-left:6px;padding-right:6px;">

                                <div class="form-group">
                                    <label>Valuation Id</label>
                                    <input type="text" name="valuation_id" id="valuation_id" required=""
                                        value="NDC-" class="form-control" tabindex="-1" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" name="valuation_type" id="valuationType"
                                    required="" valuationtype="" autofocus="">
                                    <option disabled selected>Select Valuation Type</option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Land') selected @endif value="Land">Land Only
                                    </option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Land_Building') selected @endif value="Land_Building">Land
                                        &amp; Building</option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Apartment') selected @endif value="Apartment">Appartment
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="bankId">Bank <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" name="bank_id" id="bankId" required="">
                                    <option disabled selected> Select Bank </option>
                                    @if (isset($banks))
                                        @foreach ($banks as $bank)
                                            <option @if (isset($sitevisit) && $sitevisit->bank_id == $bank->id) selected @endif
                                                value="{{ $bank->id }}">{{ $bank->name }}</option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="branchId">Branch <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" name="branch_id" id="branchId" required="">
                                    <option disabled selected> Select Branch </option>
                                    @if (isset($branches))
                                        @foreach ($branches as $branch)
                                            <option @if (isset($sitevisit) && $sitevisit->branch_id == $branch->id) selected @endif
                                                value="{{ $branch->id }}">{{ $branch->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label> Client <span class="text-danger">*</span></label>
                                <select name="client_id" class="form-control" id="">

                                    @if (isset($clients))
                                        @foreach ($clients as $client)
                                            <option @if (isset($sitevisit) && $sitevisit->client_id == $client->id) selected @endif
                                                value="{{ $client->id }}">{{ $client->client_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>


                            <div class="form-group col-md-3">
                                <label for="siteEngineerId">Site Engineer <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" name="site_engineer" id="TxtSiteEngineerId"
                                    required="">
                                    <option disabled selected> Select Site Engineer </option>
                                    @if (isset($siteengineers))
                                        @foreach ($siteengineers as $user)
                                            <option @if (isset($sitevisit) && $sitevisit->site_engineer_id == $user->id) selected @endif
                                                value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Valuation Assignment No</label>
                                <input type="text" name="valuation_assignment_on" id="valuation_assignment_on"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Prepration Date (BS) <span class="required">*</span></label>
                                <input type="text" name="prepration_date" id="prepration_date" required=""
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Date (BS) (Ownership) <span class="required">*</span></label>
                                <input type="text" name="date_ownership" id="date_ownership" required=""
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="col-md-9"></div>
                            <input type="hidden" name="ownershipComesFrom" id="ownershipComesFrom">
                            <div class="form-group col-md-12 mb-2" style="padding-left:6px;padding-right:6px;">
                                <div class="form-check mt-4">

                                    @if (isset($patras))
                                        @foreach ($patras as $patra)
                                            <input type="checkbox" class="form-check-input" name="patra[]">
                                            <label class="form-check-label form-check-label mr-4"
                                                for="ChkRajinama">{{ $patra->title }}</label>
                                        @endforeach
                                    @endif


                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-12 mb-2" style="padding-left:6px;padding-right:6px;">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>2 LAND CALCULATIONS</b></h6>
                                </label>
                            </div>
                            <div class="form-group col-md-12 mb-2" style="padding-left:6px;padding-right:6px;">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(A) TOTAL AREA AS PER LALPURJA</b>
                                </label>
                            </div>

                            <form >
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Kita No</label>
                                    <input type="text" name="kita_no" id="kita_no" placeholder="Kita No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Sheet No</label>
                                    <input type="text" name="sheet_no" id="sheet_no" placeholder="Sheet No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Ropani</label>
                                    <input type="text" name="ropani_as_lalpurja" id="ropani_as_lalpurja"
                                        placeholder="Ropani" class="form-control" readonly="readonly" tabindex="-1">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Anna</label>
                                    <input type="text" name="anna_as_lalpurja" id="anna_as_lalpurja"
                                        placeholder="Anna" class="form-control" autocomplete="off" readonly="readonly"
                                        tabindex="-1">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Paisa</label>
                                    <input type="text" name="paisa_as_lalpurja" id="paisa_as_lalpurja"
                                        placeholder="Paisa" class="form-control" autocomplete="off" readonly="readonly"
                                        tabindex="-1">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Dam</label>
                                    <input type="text" name="dam_as_lalpurja" id="dam_as_lalpurja" placeholder="Dam"
                                        class="form-control" autocomplete="off" readonly="readonly" tabindex="-1">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Sq.M</label>
                                    <input type="text" name="sqm_as_lalpurja" id="sqm_as_lalpurja"
                                        placeholder="Area Sq.M" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in (R-A-P-D)</label>
                                    <input type="text" name="rapd_as_lalpurja" id="rapd_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Sq.F</label>
                                    <input type="text" name="sqf_as_lalpurja" id="sqf_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Anna</label>
                                    <input type="text" name="area_in_anna_as_lalpurja" id="area_in_anna_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label style="width: 100%;">&nbsp;</label>
                                    <button type="submit addAreaAPLalpurja"
                                    data-url="{{ route('receptionist.valuation.lalpurjaSubmit', $sitevisit->id) }}"
                                        id="addAreaAPLalpurja" class="btn btn-info "
                                        style="padding: 2px 5px;">ADD</button>
                                </div>
                            </form>

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
                                            <th scope="col"><label id="totalRopani"></label><input type="hidden"
                                                    name="totalRopani" id="totalRopani" value="0"></th>
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
                                            <th scope="col"><label id="totalAreaInAnna"></label> <input type="hidden"
                                                    name="totalAreaInAnna" id="totalAreaInAnna" value="0"></th>
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
                                    <option value="" selected="selected">Select Area Symbol</option>
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
                            <div class="form-group col-md-1" style="padding-left:6px;padding-right:6px;">
                                <label>Side A</label>
                                <input type="text" name="sideA" id="sideA" placeholder="Side A"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="padding-left:6px;padding-right:6px;">
                                <label>Side B</label>
                                <input type="text" name="sideB" id="sideB" placeholder="Side B"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="padding-left:6px;padding-right:6px;">
                                <label>Side C</label>
                                <input type="text" name="sideC" id="sideC" placeholder="Side C"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>S = (a+b+c)/2</label>
                                <input type="text" name="sideS" id="sideS" readonly="readonly" tabindex="-1"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.F</label>
                                <input type="text" name="sqFAPMeasurement" id="sqFAPMeasurement" readonly="readonly"
                                    tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.M</label>
                                <input type="text" name="sqMAPMeasurement" id="sqMAPMeasurement" readonly="readonly"
                                    tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                <label>Area in Anna</label>
                                <input type="text" name="areaInAnnaAPMeasurement" id="areaInAnnaAPMeasurement"
                                    readonly="readonly" tabindex="-1" class="form-control">
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
                                            <th scope="col"><label id="LblTotalAreaInAnnaAPMeasurement"></label><input
                                                    type="hidden" name="totalAreaInAnnaAPMeasurement"
                                                    id="totalAreaInAnnaAPMeasurement" value="0"></th>
                                            <th scope="col"><label
                                                    id="LblTotalAreaInRPADAsPerMeasurement"></label><input type="hidden"
                                                    name="totalAreaInRPADAsPerMeasurement"
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
                                <input type="text" name="deductionOfRoadSqF" id="deductionOfRoadSqF" required=""
                                    class="form-control" autocomplete="off" value="0">
                                <input type="hidden" name="afterDeductionOfRoadAreaInAnna"
                                    id="afterDeductionOfRoadAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterDeductionOfRoadAreaInRPAD"
                                    id="afterDeductionOfRoadAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Land Development (%)</label>
                                <input type="text" name="landDevelopmentPercent" id="landDevelopmentPercent"
                                    required="" class="form-control" autocomplete="off" value="0">
                                <input type="hidden" name="landDevelopmentSqF" id="landDevelopmentSqF" required=""
                                    class="form-control" autocomplete="off">
                                <input type="hidden" name="afterLandDevelopmentAreaInAnna"
                                    id="afterLandDevelopmentAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterLandDevelopmentAreaInRPAD"
                                    id="afterLandDevelopmentAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>High Tension (Sq.F)</label>
                                <input type="text" name="deductionForHighTensionSqF" id="deductionForHighTensionSqF"
                                    required="" class="form-control" autocomplete="off" value="0">
                                <input type="hidden" name="afterHighTensionAreaInAnna" id="afterHighTensionAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off">
                                <input type="hidden" name="afterHighTensionAreaInRPAD" id="afterHighTensionAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Low Land (Sq.F)</label>
                                <input type="text" name="deductionForLowLandSqF" id="deductionForLowLandSqF"
                                    required="" class="form-control" autocomplete="off" value="0">
                                <input type="hidden" name="afterLowLandAreaInAnna" id="afterLowLandAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off">
                                <input type="hidden" name="afterLowLandAreaInRPAD" id="afterLowLandAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>River (Sq.F)</label>
                                <input type="text" name="deductionForRiverSqF" id="deductionForRiverSqF"
                                    required="" class="form-control" autocomplete="off" value="0">
                                <input type="hidden" name="afterRiverAreaInAnna" id="afterRiverAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off">
                                <input type="hidden" name="afterRiverAreaInRPAD" id="afterRiverAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label>Boundry Correction %</label>
                                <input type="text" name="deductionForBoundryCorrection"
                                    id="deductionForBoundryCorrection" required="" class="form-control"
                                    autocomplete="off" value="0">
                                <input type="hidden" name="deductionForBoundryCorrectionSqF"
                                    id="deductionForBoundryCorrectionSqF" required="" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterBoundryCorrectionAreaInAnna"
                                    id="afterBoundryCorrectionAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterBoundryCorrectionAreaInRPAD"
                                    id="afterBoundryCorrectionAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="flex: 14%;max-width: 14%;">
                                <label style="padding-right:0px; font-size:12px;">Irregular Shape/Sloppy %</label>
                                <input type="text" name="deductionForIrregularShapeSloppyLand"
                                    id="deductionForIrregularShapeSloppyLand" required="" class="form-control"
                                    autocomplete="off" value="0">
                                <input type="hidden" name="afterIrregularShapeSloppyLandSqF"
                                    id="afterIrregularShapeSloppyLandSqF" required="" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInAnna"
                                    id="afterIrregularShapeSloppyLandAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off">
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInRPAD"
                                    id="afterIrregularShapeSloppyLandAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="clearfix" style="width: 100%;"></div>

                            <div class="form-group col-md-1" style="flex: 10%;max-width: 10%;">
                                <label>&nbsp;</label>
                                <label style="margin-bottom: 0px; text-transform: uppercase;">
                                    <b>Consideration</b></label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Sq.M)</label>
                                <input type="text" name="sqMAPConsideration" id="sqMAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (R-A-P-D)</label>
                                <input type="text" name="rAPDAPConsideration" id="rAPDAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Sq.F)</label>
                                <input type="text" name="sqFAPConsideration" id="sqFAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area in (Anna)</label>
                                <input type="text" name="annaAPConsideration" id="annaAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
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
                                <input type="text" name="perSqFAPGovRate" id="perSqFAPGovRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Gov.Page <span class="required">*</span></label>
                                <input type="text" name="govPage" id="govPage" required=""
                                    placeholder="Gov.Page" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPGovRate" id="perAnnaAPGovRate" required=""
                                    placeholder="Rate/Anna" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPGovRate" id="perRopaniAPGovRate" required=""
                                    readonly="readonly" tabindex="-1" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1"></div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPMarketRate" id="perSqFAPMarketRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPMarketRate" id="perAnnaAPMarketRate" required=""
                                    placeholder="Rate/Anna" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPMarketRate" id="perRopaniAPMarketRate"
                                    required="" readonly="readonly" tabindex="-1" class="form-control"
                                    autocomplete="off">
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
                                <input type="text" name="perSqFAPFairRate" id="perSqFAPFairRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPFairRate" id="perAnnaAPFairRate" required=""
                                    readonly="readonly" tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPFairRate" id="perRopaniAPFairRate" required=""
                                    readonly="readonly" tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="flex: 21.5%;max-width: 21.5%;"></div>
                            <div class="form-group col-md-2" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPDistressRate" id="perSqFAPDistressRate"
                                    required="" class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-1" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPDistressRate" id="perAnnaAPDistressRate"
                                    required="" readonly="readonly" tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPDistressRate" id="perRopaniAPDistressRate"
                                    required="" readonly="readonly" tabindex="-1" class="form-control">
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Total Value of Property Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Government Value of Land</label>
                                <input type="text" name="governmentValueOfLand" id="governmentValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Commercial Value of Land</label>
                                <input type="text" name="commercialValueOfLand" id="commercialValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fair Market Value of Land</label>
                                <input type="text" name="fairMarketValueOfLand" id="fairMarketValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Distress Value of Land</label>
                                <input type="text" name="distressValueOfLand" id="distressValueOfLand" required=""
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fair Mkrt Val Land &amp; Blding</label>
                                <input type="text" name="fairMarketValueOfLandAndBuimding"
                                    id="fairMarketValueOfLandAndBuimding" class="form-control" readonly="readonly"
                                    tabindex="-1">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Distrs Mkrt Val Land&amp;Blding</label>
                                <input type="text" name="totalDistressValueOfLandAndBuimding"
                                    id="totalDistressValueOfLandAndBuimding" class="form-control" readonly="readonly"
                                    tabindex="-1">
                            </div>

                            <div id="BuildingArea" class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-2">
                                        <label style="color: #dc1de9;margin-bottom: 0px;">
                                            <h6><b>3 BUILDING CALCULATIONS</b></h6>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 14%;max-width: 14%; padding-right:0px;">
                                        <label>Floor</label>
                                        <select class="form-control selectbox" name="floor" id="floor">
                                            <option value="" selected="selected">--Select Floor--</option>
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
                                    <div class="form-group col-md-2" style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Area (Per Sq Ft)</label>
                                        <input type="text" name="floorAreaInSqF" id="floorAreaInSqF"
                                            placeholder="Area (Per Sq Ft)" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 8%;max-width: 8%; padding-right:0px;">
                                        <label>Rate</label>
                                        <input type="text" name="floorRate" id="floorRate" placeholder="Rate"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Amount</label>
                                        <input type="text" name="floorAmount" id="floorAmount" readonly="readonly"
                                            tabindex="-1" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Floor Age</label>
                                        <input type="text" name="floorAge" id="floorAge" placeholder="Building Age"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 10%;max-width: 10%; padding-right:0px;">
                                        <label>Depriciation %</label>
                                        <input type="text" name="floorDepriciationPercentage"
                                            id="floorDepriciationPercentage" placeholder="Depriciation %"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 13%;max-width: 13%; padding-right:0px;">
                                        <label>Sanitary Pulumbing%</label>
                                        <input type="text" name="sanitaryPulumbingPercentage"
                                            id="sanitaryPulumbingPercentage" placeholder="" class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 10%;max-width: 10%;">
                                        <label>Electric Work%</label>
                                        <input type="text" name="electricityWorkPercentage"
                                            id="electricityWorkPercentage" placeholder="" class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1"
                                        style="flex: 8%;max-width: 8%; padding-left:0px; padding-right:0px;">
                                        <label>Total Amount</label>
                                        <input type="text" name="floorNetAmount" id="floorNetAmount"
                                            readonly="readonly" tabindex="-1" class="form-control">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 5%;max-width: 5%; padding-right:0px;">
                                        <label style="width: 100%;">&nbsp;</label>
                                        <button type="button" class="btn btn-info btn-sm" id="BtnAddBuildingCalculation"
                                            style="padding: 2px 5px;">ADD</button>
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
                                                    <th scope="col"><label id="LblTotalBuildingAreaSqF"></label><input
                                                            type="hidden" name="totalBuildingAreaSqF"
                                                            id="totalBuildingAreaSqF" value="0"></th>
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
                                                            name="totalNetBuildingAmount" id="totalNetBuildingAmount"
                                                            value="0"></th>
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
                                            class="form-control" autocomplete="off" required="" value="0">
                                    </div>
                                    <input type="hidden" name="constructionDistressValue"
                                        id="constructionDistressValue" tabindex="-1" readonly="readonly"
                                        class="form-control" autocomplete="off">
                                    <input type="hidden" name="totalDistressValueOfBuilding"
                                        id="totalDistressValueOfBuilding" tabindex="-1" readonly="readonly"
                                        class="form-control" autocomplete="off">
                                    <div class="form-group col-md-3">
                                        <label>Construction Approval Date (BS)</label>
                                        <input type="text" name="buildingConstructionApprovalDate"
                                            id="buildingConstructionApprovalDate" class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Year Construction Complite(BCC)</label>
                                        <input type="text" name="yearOfConstructionComplite"
                                            id="yearOfConstructionComplite" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Ex:- 800"></i>
                                            Area As Per Construction
                                        </label>
                                        <input type="text" name="totalAreaAsPerConstruction"
                                            id="totalAreaAsPerConstruction" required="" class="form-control"
                                            autocomplete="off" value="0">
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
                                    placeholder="Kita No" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>East</label>
                                <input type="text" name="eastAPBoundaries" id="eastAPBoundaries"
                                    placeholder="East" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>West</label>
                                <input type="text" name="westAPBoundaries" id="westAPBoundaries"
                                    placeholder="West" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>North</label>
                                <input type="text" name="northAPBoundaries" id="northAPBoundaries"
                                    placeholder="North" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>South</label>
                                <input type="text" name="southAPBoundaries" id="southAPBoundaries"
                                    placeholder="South" class="form-control" autocomplete="off">
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
                                    id="aPSiteVisitBoundariesKitaNo" placeholder="Kita No" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>East</label>
                                <input type="text" name="eastAPSiteVisitBoundaries" id="eastAPSiteVisitBoundaries"
                                    placeholder="East" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>West</label>
                                <input type="text" name="westAPSiteVisitBoundaries" id="westAPSiteVisitBoundaries"
                                    placeholder="West" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>North</label>
                                <input type="text" name="northAPSiteVisitBoundaries"
                                    id="northAPSiteVisitBoundaries" placeholder="North" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>South</label>
                                <input type="text" name="southAPSiteVisitBoundaries"
                                    id="southAPSiteVisitBoundaries" placeholder="South" class="form-control"
                                    autocomplete="off">
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
                                    required="" placeholder="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Kathmandu"></i>
                                    District <span class="required">*</span></label>
                                <input type="text" name="locationDistrict" id="locationDistrict" required=""
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>V.D.C/Municipality</label>
                                <select class="form-control" name="vdcType" id="vdcType">
                                    <option value="Rural Municipality" selected="selected">Rural Municipality
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
                                    Address of Land/Property(Property Location)<span class="required">*</span></label>
                                <input type="text" name="addressOfLand" id="addressOfLand" required=""
                                    class="form-control" autocomplete="off">
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
                                <input type="text" name="accessibilityWithRoadSize" id="accessibilityWithRoadSize"
                                    required="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    River <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithRiver" id="accessibilityWithRiver"
                                    required="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    High Tension Line <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithHighTension"
                                    id="accessibilityWithHighTension" required="" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type of Region</label>
                                <select class="form-control selectbox" name="typeOfRegion" id="typeOfRegion">
                                    <option value="Residential" selected="selected">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Agricultural">Agricultural</option>
                                    <option value="Others (Pls Specify)">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Motorable Access</label>
                                <select class="form-control selectbox" name="motorableAccess" id="motorableAccess">
                                    <option value="Yes" selected="selected">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>


                            <div class="form-group col-md-2">
                                <label>Property Usage</label>
                                <select class="form-control selectbox" name="propertyUsage" id="propertyUsage">
                                    <option value="Residential" selected="selected">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Residential &amp; Commercial">Residential &amp; Commercial</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type of Access</label>
                                <select class="form-control selectbox" name="typeOfAccess" id="typeOfAccess">
                                    <option value="Earthen" selected="selected">Earthen</option>
                                    <option value="Gravel">Gravel</option>
                                    <option value="Black Topped">Black Topped</option>
                                    <option value="RCC">RCC</option>
                                    <option value="Block Paved">Block Paved</option>
                                    <option value="Goreto Road">Goreto Road</option>
                                    <option value="Khet (No Road)">Khet (No Road)</option>
                                </select>
                            </div>


                            <input type="hidden" name="holdType" id="holdType" class="form-control"
                                value="Free Hold" autocomplete="off">
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Rectangular"></i>
                                    Shape</label>
                                <input type="text" name="buildingShape" id="buildingShape" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- East"></i>
                                    Facing</label>
                                <input type="text" name="buildingFacing" id="buildingFacing" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 8 M"></i>
                                    Frontage</label>
                                <input type="text" name="buildingFrontage" id="buildingFrontage"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Level with Road
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Same Level"></i>
                                </label>
                                <input type="text" name="levelWithRoad" id="levelWithRoad" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property for the Bank</label>
                                <select class="form-control selectbox" name="propertyForTheBank"
                                    id="propertyForTheBank">
                                    <option value="Recommended" selected="selected">Recommended</option>
                                    <option value="Not Recommended">Not Recommended</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>River / Stream near property</label>
                                <select class="form-control selectbox" name="riverStreamNearProperty"
                                    id="riverStreamNearProperty">
                                    <option value="No" selected="selected">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Heritage Sites Near property</label>
                                <select class="form-control selectbox" name="heritageSitesNearProperty"
                                    id="heritageSitesNearProperty">
                                    <option value="Yes" selected="selected">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property Ownership Type</label>
                                <select class="form-control selectbox" name="propertyOwnershipType"
                                    id="propertyOwnershipType">
                                    <option value="Single" selected="selected">Single</option>
                                    <option value="Joint">Joint</option>
                                    <option value="Company">Company</option>
                                    <option value="Individual (Joint Name)">Individual (Joint Name)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 7 M"></i>
                                    Narrowest Part of Land</label>
                                <input type="text" name="narrowestPartOfLand" id="narrowestPartOfLand"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 12 Feet"></i>
                                    Access in the Blue Print</label>
                                <input type="text" name="accessInTheBluePrint" id="accessInTheBluePrint"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Right of Way
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 13 Feet"></i>
                                </label>
                                <input type="text" name="rightOfWay" id="rightOfWay" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Frame Structure</label>
                                <select class="form-control selectbox" name="frameStructure" id="frameStructure">
                                    <option value="Frame Structure" selected="selected">Frame Structure</option>
                                    <option value="Load Bearing">Load Bearing</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Any Collateral Fall</label>
                                <select class="form-control selectbox" name="anyCollateralFall"
                                    id="anyCollateralFall">
                                    <option value="No" selected="selected">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Comments</label>
                                <input type="text" name="coments" id="coments" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Valuation For</label>
                                <select class="form-control selectbox" name="valuationFor" id="valuationFor">
                                    <option value="Vacant Land" selected="selected">Vacant Land</option>
                                    <option value="Land &amp; Building">Land &amp; Building</option>
                                    <option value="Readymade House">Readymade House</option>
                                    <option value="Apartments/Duplex">Apartments/Duplex</option>
                                    <option value="Construction/Extension/Renovation">Construction/Extension/Renovation
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Coloring And Painting</label>
                                <select class="form-control selectbox" name="coloringAndPainting"
                                    id="coloringAndPainting">
                                    <option value="Painted" selected="selected">Painted</option>
                                    <option value="Not Painted">Not Painted</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i>
                                    Flooring Finishing</label>
                                <input type="text" name="flooringFinishing" id="flooringFinishing"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i> Inner
                                    Wall Ceiling</label>
                                <input type="text" name="innerWallCeiling" id="innerWallCeiling"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type Of Land</label>
                                <select class="form-control selectbox" name="topography" id="topography">
                                    <option value="Planning" selected="selected">Planning</option>
                                    <option value="Khet">Khet</option>
                                    <option value="Flat">Flat</option>
                                    <option value="Slightly Slope">Slightly Slope</option>
                                    <option value="Low Land">Low Land</option>
                                    <option value="Irregural Shape">Irregural Shape</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Bounded by Brick Wall."></i>
                                    Boundary</label>
                                <input type="text" name="boundary" id="boundary" class="form-control"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 2 And Half"></i> No Of Floor
                                    (Storie)</label>
                                <input type="text" name="noOfFloorStorie" id="noOfFloorStorie"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Compound Wall</label>
                                <select class="form-control selectbox" name="compoundWall" id="compoundWall">
                                    <option value="Constructed" selected="selected">Constructed</option>
                                    <option value="Not Constructed">Not Constructed</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Internal Remarks</label>
                                <input type="text" name="internalRemarks" id="internalRemarks"
                                    class="form-control" autocomplete="off">
                            </div>
                            <input type="hidden" name="isAvailabilityTelephone" id="isAvailabilityTelephone"
                                required="" class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityInternet" id="isAvailabilityInternet"
                                required="" class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilitySewerage" id="isAvailabilitySewerage"
                                required="" class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityElectricity" id="isAvailabilityElectricity"
                                required="" class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityWaterSupply" id="isAvailabilityWaterSupply"
                                required="" class="form-control" autocomplete="off" value="Yes">
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
        $(document).on('change', '#sqm_as_lalpurja', function() {
            var currentthis = $(this);
            var sqm_as_lalpurja = currentthis.val();
            var ropani = (parseFloat(sqm_as_lalpurja) / 508.74);
            var aana = (parseFloat(sqm_as_lalpurja) / 31.79);
            var paisa = (parseFloat(sqm_as_lalpurja) / 7.95);
            var dam = (parseFloat(sqm_as_lalpurja) / 1.99);
            var sqft = (parseFloat(sqm_as_lalpurja) * 10.7639);
            console.log(aana);
            $('#ropani_as_lalpurja').val(ropani);
            $('#anna_as_lalpurja').val(aana);
            $('#paisa_as_lalpurja').val(paisa);
            $('#dam_as_lalpurja').val(dam);
            // alert(sqm_as_lalpurja);
        });
    </script>


    <script>
        $(document).on('click', '#addAreaAPLalpurja', function(e) {

            e.preventDefault();
            var currentevent = $(this);
            var kitano = $('#kita_no').val();
            var sheetno = $('#sheet_no').val();
            var ropani = $('#ropani_as_lalpurja').val();
            var aana = $('#anna_as_lalpurja').val();
            var paisa = $('#paisa_as_lalpurja').val();
            var dam = $('#dam_as_lalpurja').val();
            var rapd = $('#rapd_as_lalpurja').val();
            var sqf = $('#sqf_as_lalpurja').val();
            var sqm  = $('#sqm_as_lalpurja').val();
            var area = $('#area_in_anna_as_lalpurja').val();

            var route = $(this).data('url');

            $.ajax({
                type: "GET",
                url: route,

                data: {
                    kitano : kitano,
                    sheetno : sheetno,
                    ropani :ropani,
                    aana:aana,
                    paisa: paisa,
                    dam : dam,
                    rapd:rapd,
                    sqf:sqf,
                    sqm:sqm,
                    area: area
                },
                beforeSend: function(data) {
                    loader();
                },
                success: function(data) {

                    toastr.success(data.message);

                    currentevent.attr('disabled', false);

                },
                error: function(err) {
                    if (err.status == 422) {
                        $.each(err.responseJSON.errors, function(i, error) {
                            var el = $(document).find('[name="' + i + '"]');
                            el.after($('<span style="color: red;">' + error[0] + '</span>')
                                .fadeOut(4000));
                        });
                    }

                    currentevent.attr('disabled', false);
                },
                complete: function() {
                    $.unblockUI();
                }
            });

        });
    </script>
@endpush
