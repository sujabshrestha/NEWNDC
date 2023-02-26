@extends('layouts.paperworker.master')

@section('title', 'NDC | Valuation ')

@section('breadcrumb', 'Valuation ')

@push('styles')
    <link href="{{ asset('backendfiles/assets/css/elements/tooltip.css')}}" rel="stylesheet" type="text/css" />
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css" rel="stylesheet" type="text/css"/>

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
                    <form action="{{ route('paperworker.valuation.valuationFinalSubmit',$sitevisit->id) }}"
                        enctype="multipart/form-data" method="POST" id="mainForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="color:#dc1de9;margin-bottom: 0px;">
                                        <h6><b>1 GENERAL DETAILS</b></h6>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4" style="padding-left:6px;padding-right:6px;">

                                <div class="form-group">
                                    <label>Valuation Id</label>
                                    <input type="text" name="valuation_id" id="valuation_id" required="" readonly
                                        value="{{ $sitevisit->registration_id }}" class="form-control" tabindex="-1"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-sm-4">
                                <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" readonly name="valuation_type" id="valuationType"
                                    required="" valuationtype="" autofocus="">
                                    <option disabled selected>Select Valuation Type</option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Land') selected @endif value="Land">Land Only
                                    </option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'land_Building') selected @endif value="land_Building">Land
                                        &amp; Building</option>
                                    <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Apartment') selected @endif value="Apartment">Appartment
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-sm-4">
                                <label for="bankId">Bank <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" disabled readonly name="bank_id" id="bankId" required=""
                                    mycommercialvalue="{{ $sitevisit->bank->commercial_rate }}"
                                    mygovernmentvalue="{{ $sitevisit->bank->governmant_rate }}"
                                    myfairmarketvalue="{{ $sitevisit->bank->fair_market_rate }}"
                                    myisfairmarketcalculationgovwise="{{ $sitevisit->bank->govt_fair_market_cal }}"
                                    myisfairmarketcalculationmarketwise="{{ $sitevisit->bank->commercial_fair_market_cal }}"
                                    myisdistresscalculationgovwise="{{ $sitevisit->bank->govt_distress_cal }}"
                                    myisdistresscalculationfairmarketwise="{{ $sitevisit->bank->fair_market_distress_cal }}">
                                    <option disabled selected> Select Bank </option>
                                    @if (isset($banks))
                                        @foreach ($banks as $bank)
                                            <option @if (isset($sitevisit) && $sitevisit->bank_id == $bank->id) selected @endif
                                                value="{{ $bank->id }}"
                                                mycommercialvalue="{{ $bank->commercial_rate }}"
                                                mygovernmentvalue="{{ $bank->governmant_rate }}"
                                                myfairmarketvalue="{{ $bank->fair_market_rate }}">{{ $bank->name }}
                                            </option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>
                            <div class="form-group col-md-3 col-sm-4">
                                <label for="branchId">Branch <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" readonly name="branch_id" id="branchId"
                                    required="">
                                    <option disabled selected> Select Branch </option>
                                    @if (isset($branches))
                                        @foreach ($branches as $branch)
                                            <option @if (isset($sitevisit) && $sitevisit->branch_id == $branch->id) selected @endif
                                                value="{{ $branch->id }}">{{ $branch->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group col-md-3 col-sm-4">
                                <label> Client <span class="text-danger">*</span></label>
                                <select name="client_id" readonly class="form-control" id="">
                                    @if (isset($clients))
                                        @foreach ($clients as $client)
                                            <option @if (isset($sitevisit) && $sitevisit->client_id == $client->id) selected @endif
                                                value="{{ $client->id }}">{{ $client->client_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>


                            <div class="form-group col-md-3 col-sm-4">
                                <label for="siteEngineerId">Site Engineer <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" readonly name="site_engineer" id="TxtSiteEngineerId"
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
                            <div class="form-group col-md-3 col-sm-4" style="padding-left:6px;padding-right:6px;">
                                <label>Valuation Assignment No</label>
                                <input type="text" name="valuation_assignment_on" id="valuation_assignment_on"
                                    class="form-control"
                                    value="{{ $sitevisit->valuation_assignment_no ?? (old('valuation_assignment_on') ?? '') }}"
                                    autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-3 col-sm-4" style="padding-left:6px;padding-right:6px;">
                                <label>Preparation Date (BS) <span class="required">*</span></label>
                                {{-- {{$sitevisit->preparation_date}} --}}
                                <input type="text" name="prepration_date" id="prepration_date" required=""
                                    value="{{ ($sitevisit->preparation_date != null ? $sitevisit->preparation_date->format('Y-m-d') : '') ?? (old('prepration_date', date('Y-m-d')) ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3 col-sm-4" style="padding-left:6px;padding-right:6px;">
                                <label>Date (Ownership) (BS) <span class="required">*</span></label>
                                <input type="text" name="date_ownership" id="date_ownership" required=""
                                    value="{{ ($sitevisit->ownership_date != null ? $sitevisit->ownership_date->format('Y-m-d') : '') ?? (old('date_ownership', date('Y-m-d')) ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="col-md-9"></div>
                            <input type="hidden" name="ownershipComesFrom" id="ownershipComesFrom">
                            <div class="form-group col-md-12 mb-2" style="padding-left:6px;padding-right:6px;">
                                <div class="form-check mt-4">

                                    @if (isset($patras))
                                        @foreach ($patras as $patra)
                                            <input type="checkbox" class="form-check-input" value="{{ $patra->id }}"
                                                name="patra[]">
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

                            {{-- <form> --}}
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Kita No</label>
                                    <input type="text" name="kita_no" id="kita_no" placeholder="Kita No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Sheet No</label>
                                    <input type="text" name="sheet_no" id="sheet_no" placeholder="Sheet No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Ropani</label>
                                    <input type="text" name="ropani_as_lalpurja" id="ropani_as_lalpurja"
                                        placeholder="Ropani" class="form-control" readonly="readonly" tabindex="-1">
                                </div>
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Anna</label>
                                    <input type="text" name="anna_as_lalpurja" id="anna_as_lalpurja"
                                        placeholder="Anna" class="form-control" autocomplete="off" readonly="readonly"
                                        tabindex="-1">
                                </div>
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Paisa</label>
                                    <input type="text" name="paisa_as_lalpurja" id="paisa_as_lalpurja"
                                        placeholder="Paisa" class="form-control" autocomplete="off" readonly="readonly"
                                        tabindex="-1">
                                </div>
                                <div class="form-group col-md-2 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                    <label>Dam</label>
                                    <input type="text" name="dam_as_lalpurja" id="dam_as_lalpurja" placeholder="Dam"
                                        class="form-control" autocomplete="off" readonly="readonly" tabindex="-1">
                                </div>
                                <div class="form-group col-md-2 col-sm-3" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Sq.M</label>
                                    <input type="text" name="sqm_as_lalpurja" id="sqm_as_lalpurja"
                                        placeholder="Area Sq.M" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 col-sm-3" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in (R-A-P-D)</label>
                                    <input type="text" name="rapd_as_lalpurja" id="rapd_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2 col-sm-3" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Sq.F</label>
                                    <input type="text" name="sqf_as_lalpurja" id="sqf_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2 col-sm-3" style="padding-left:6px;padding-right:6px;">
                                    <label>Area in Anna</label>
                                    <input type="text" name="area_in_anna_as_lalpurja" id="area_in_anna_as_lalpurja"
                                        readonly="readonly" tabindex="-1" class="form-control">
                                </div>
                                <div class="form-group col-md-2" style="padding-left:6px;padding-right:6px;">
                                    <label style="width: 100%;">&nbsp;</label>
                                    <button type="submit addAreaAPLalpurja"
                                        data-url="{{ route('paperworker.valuation.lalpurjaSubmit', $sitevisit->id) }}"
                                        id="addAreaAPLalpurja" class="btn btn-info "
                                        style="padding: 2px 5px;">ADD</button>
                                </div>
                            {{-- </form> --}}

                            <div class="form-group col-md-12 appendLalpurja">
                                @include('Paperworker::paperworker.valuations.appendLalpurjaData')
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(B) AREA OF LAND BASED ON ACTUAL MEASUREMENT</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2 col-sm-3" style="padding-left:6px;padding-right:6px;">
                                <label>Area Symbol</label>
                                <select class="form-control selectbox" name="areaSymbol" id="areaSymbol">
                                    <option value="">Select Area Symbol</option>
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
                            <div class="form-group col-md-1 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                <label>Side A</label>
                                <input type="text" name="sideA" id="sideA" placeholder="Side A"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                <label>Side B</label>
                                <input type="text" name="sideB" id="sideB" placeholder="Side B"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1 col-sm-2" style="padding-left:6px;padding-right:6px;">
                                <label>Side C</label>
                                <input type="text" name="sideC" id="sideC" placeholder="Side C"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2 col-sm-3" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>S = (a+b+c)/2</label>
                                <input type="text" name="sideS" id="sideS" readonly="readonly" tabindex="-1"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-2 " style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.F</label>
                                <input type="text" name="sqFAPMeasurement" id="sqFAPMeasurement" readonly="readonly"
                                    tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-2" style="max-width:150px;padding-left:6px;padding-right:6px;">
                                <label>Area in Sq.M</label>
                                <input type="text" name="sqMAPMeasurement" id="sqMAPMeasurement" readonly="readonly"
                                    tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-2 col-sm-4" style="padding-left:6px;padding-right:6px;">
                                <label>Area in Anna</label>
                                <input type="text" name="areaInAnnaAPMeasurement" id="areaInAnnaAPMeasurement"
                                    readonly="readonly" tabindex="-1" class="form-control">
                            </div>
                            <div class="form-group col-md-1" style="flex: 5%;max-width: 5%; padding-left: 0px;">
                                <label style="width: 100%;">&nbsp;</label>
                                <button type="button" class="btn btn-info"
                                    data-url="{{ route('paperworker.valuation.landBasedSubmit', $sitevisit->id) }}"
                                    id="BtnAddAreaAPMeasurement" style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12 appendLandBased">
                                @include('Paperworker::paperworker.valuations.appendLandbasedData')
                            </div>
                        </div>
                        <div class="row">


                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(C) DEDUCTION PART</b>
                                </label>
                            </div> 
                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>Road (Sq.F)</label>
                                <input type="text" name="deductionOfRoadSqF" id="deductionOfRoadSqF" required=""
                                    class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionOfRoadSqF ?? (old('deductionOfRoadSqF') ?? 0) }}">
                                <input type="hidden" name="afterDeductionOfRoadAreaInAnna"
                                    id="afterDeductionOfRoadAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_road ?? (old('afterDeductionOfRoadAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterDeductionOfRoadAreaInRPAD"
                                    id="afterDeductionOfRoadAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_road ?? (old('deductionOfRoadSqF') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>Land Development (%)</label>

                                <input type="text" name="landDevelopmentPercent" id="landDevelopmentPercent"
                                    required="" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->landDevelopmentPercent ?? (old('landDevelopmentPercent') ?? 0) }}">
                                <input type="hidden" name="landDevelopmentSqF" id="landDevelopmentSqF" required=""
                                    class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_sqf_as_land_development ?? (old('landDevelopmentSqF') ?? 0) }}">
                                <input type="hidden" name="afterLandDevelopmentAreaInAnna"
                                    id="afterLandDevelopmentAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_land_development ?? (old('afterLandDevelopmentAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterLandDevelopmentAreaInRPAD"
                                    id="afterLandDevelopmentAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_land_development ?? (old('afterLandDevelopmentAreaInRPAD') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>High Tension (Sq.F)</label>
                                <input type="text" name="deductionForHighTensionSqF" id="deductionForHighTensionSqF"
                                    required="" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionForHighTensionSqF ?? (old('deductionForHighTensionSqF') ?? 0) }}">
                                <input type="hidden" name="afterHighTensionAreaInAnna" id="afterHighTensionAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_high_tension_deduction ?? (old('afterHighTensionAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterHighTensionAreaInRPAD" id="afterHighTensionAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_high_tension_deduction ?? (old('afterHighTensionAreaInRPAD') ?? 0) }}">
                            </div>

                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>Low Land (Sq.F)</label>
                                <input type="text" name="deductionForLowLandSqF" id="deductionForLowLandSqF"
                                    required="" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionForLowLandSqF ?? (old('deductionForLowLandSqF') ?? 0) }}">
                                <input type="hidden" name="afterLowLandAreaInAnna" id="afterLowLandAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_low_land_deduction ?? (old('afterLowLandAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterLowLandAreaInRPAD" id="afterLowLandAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_low_land_deduction ?? (old('afterLowLandAreaInRPAD') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>River (Sq.F)</label>
                                <input type="text" name="deductionForRiverSqF" id="deductionForRiverSqF"
                                    required="" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionForRiverSqF ?? (old('deductionForRiverSqF') ?? 0) }}">
                                <input type="hidden" name="afterRiverAreaInAnna" id="afterRiverAreaInAnna"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_river_deduction ?? (old('afterRiverAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterRiverAreaInRPAD" id="afterRiverAreaInRPAD"
                                    readonly="readonly" class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_river_deduction ?? (old('afterRiverAreaInRPAD') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label>Boundry Correction %</label>

                                <input type="text" name="deductionForBoundryCorrection"
                                    id="deductionForBoundryCorrection" required="" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionForBoundryCorrection ?? (old('deductionForBoundryCorrection') ?? 0) }}">
                                <input type="hidden" name="deductionForBoundryCorrectionSqF"
                                    id="deductionForBoundryCorrectionSqF" required="" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_sqf_as_boundry_correction_deduction ?? (old('deductionForBoundryCorrectionSqF') ?? 0) }}">
                                <input type="hidden" name="afterBoundryCorrectionAreaInAnna"
                                    id="afterBoundryCorrectionAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_boundry_correction_deduction ?? (old('afterBoundryCorrectionAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterBoundryCorrectionAreaInRPAD"
                                    id="afterBoundryCorrectionAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_boundry_correction_deduction ?? (old('afterBoundryCorrectionAreaInRPAD') ?? 0) }}">
                            </div>

                            <div class="form-group col-md-3" style="flex: 25%;max-width: 25%;">
                                <label style="padding-right:0px; font-size:14px;">Irregular Shape/Sloppy %</label>
                                <input type="text" name="deductionForIrregularShapeSloppyLand"
                                    id="deductionForIrregularShapeSloppyLand" required="" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->deductionForIrregularShapeSloppyLand ?? (old('deductionForIrregularShapeSloppyLand') ?? 0) }}">
                                <input type="hidden" name="afterIrregularShapeSloppyLandSqF"
                                    id="afterIrregularShapeSloppyLandSqF" required="" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_sqf_as_irregular_shape_deduction ?? (old('afterIrregularShapeSloppyLandSqF') ?? 0) }}">
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInAnna"
                                    id="afterIrregularShapeSloppyLandAreaInAnna" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_anna_as_irregular_shape_deduction ?? (old('afterIrregularShapeSloppyLandAreaInAnna') ?? 0) }}">
                                <input type="hidden" name="afterIrregularShapeSloppyLandAreaInRPAD"
                                    id="afterIrregularShapeSloppyLandAreaInRPAD" readonly="readonly" class="form-control"
                                    autocomplete="off"
                                    value="{{ $sitevisit->deduction->total_rapd_as_irregular_shape_deduction ?? (old('afterIrregularShapeSloppyLandAreaInRPAD') ?? 0) }}">
                            </div>
                            <div class="clearfix" style="width: 100%;"></div>

                            <div class="form-group col-md-1" style="flex: 10%;max-width: 15%;">

                                <label class="mt-4" style="margin-bottom: 0px; text-transform: uppercase;">
                                    <b>Consideration</b></label>
                            </div>
                            <div class="form-group col-md-2" style="flex: 20%;max-width: 20%;">
                                <label>Area in (Sq.M)</label>
                                <input type="text" name="sqMAPConsideration" id="sqMAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value="{{ $sitevisit->deduction->sqMAPConsideration ?? (old('sqMAPConsideration') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-2" style="flex: 20%;max-width: 20%;">
                                <label>Area in (R-A-P-D)</label>
                                <input type="text" name="rAPDAPConsideration" id="rAPDAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value="{{ $sitevisit->deduction->rAPDAPConsideration ?? (old('rAPDAPConsideration') ?? 0) }}">
                            </div>
                            <div class="form-group col-md-2" style="flex: 20%;max-width: 20%;">
                                <label>Area in (Sq.F)</label>
                                <input type="text" name="sqFAPConsideration" id="sqFAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value="{{ $sitevisit->deduction->sqFAPConsideration ?? (old('sqFAPConsideration') ?? 0) }}">
                            </div>
                            
                            <div class="form-group col-md-2" style="flex: 20%;max-width: 20%;">
                                <label>Area in (Anna)</label>
                                <input type="text" name="annaAPConsideration" id="annaAPConsideration" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value="{{ $sitevisit->deduction->annaAPConsideration ?? (old('annaAPConsideration') ?? 0) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px;">
                                    <b>(D) RATE OF LAND</b>
                                </label>
                            </div>
                            <div class="form-group col-md-6 mb-2 pr-0">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Government Rate of Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-1 mb-2 pr-0" style="flex: 5%;max-width: 5%;"></div>
                            <div class="form-group col-md-5 mb-2 pr-0">
                                <label
                                    style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase; padding-left: 32px;">
                                    <b><i class="fa fa-hashtag"></i> Market Rate of Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2 pr-0" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPGovRate" id="perSqFAPGovRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perSqFAPGovRate ?? (old('perSqFAPGovRate') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 pr-0" style="flex: 13%;max-width: 13%;">
                                <label>Gov.Page <span class="required">*</span></label>
                                <input type="text" name="govPage" id="govPage" required=""
                                    value={{ $sitevisit->rateofland->govPage ?? (old('govPage') ?? 0) }}
                                    placeholder="Gov.Page" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPGovRate" id="perAnnaAPGovRate" required=""
                                    value={{ $sitevisit->rateofland->perAnnaAPGovRate ?? (old('perAnnaAPGovRate') ?? 0) }}
                                    placeholder="Rate/Anna" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPGovRate" id="perRopaniAPGovRate" required=""
                                    readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perRopaniAPGovRate ?? (old('perRopaniAPGovRate') ?? 0) }}
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-1" style="flex: 5%;max-width: 5%;"></div>
                            <div class="form-group col-md-2 pr-0" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPMarketRate" id="perSqFAPMarketRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perSqFAPMarketRate ?? (old('perSqFAPMarketRate') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna <span class="required">*</span></label>
                                <input type="text" name="perAnnaAPMarketRate" id="perAnnaAPMarketRate" required=""
                                    placeholder="Rate/Anna" class="form-control" autocomplete="off"
                                    value={{ $sitevisit->rateofland->perAnnaAPMarketRate ?? (old('perAnnaAPMarketRate') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPMarketRate" id="perRopaniAPMarketRate"
                                    required="" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perRopaniAPMarketRate ?? (old('perRopaniAPMarketRate') ?? 0) }}
                                    class="form-control" autocomplete="off">
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Fair Market Rate</b>
                                </label>
                            </div>
                            <div class="form-group col-md-1 mb-2" style="flex: 5%;max-width: 5%;"></div>
                            <div class="form-group col-md-5 mb-2 pr-0">
                                <label
                                    style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase; padding-left: 32px;">
                                    <b><i class="fa fa-hashtag"></i> Distress Land Rate</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2 pr-0" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPFairRate" id="perSqFAPFairRate" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perSqFAPFairRate ?? (old('perSqFAPFairRate') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPFairRate" id="perAnnaAPFairRate" required=""
                                    readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perAnnaAPFairRate ?? (old('perAnnaAPFairRate') ?? 0) }}
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPFairRate" id="perRopaniAPFairRate" required=""
                                    readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perRopaniAPFairRate ?? (old('perRopaniAPFairRate') ?? 0) }}
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-2 pr-0" style="flex: 18%;max-width: 18%;"></div>
                            <div class="form-group col-md-2 pr-0" style="flex: 13%;max-width: 13%;">
                                <label>Area (Per Sq Ft)</label>
                                <input type="text" name="perSqFAPDistressRate" id="perSqFAPDistressRate"
                                    required="" class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perSqFAPDistressRate ?? (old('perSqFAPDistressRate') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 12%;max-width: 12%;">
                                <label>Rate/Anna</label>
                                <input type="text" name="perAnnaAPDistressRate" id="perAnnaAPDistressRate"
                                    required="" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perAnnaAPDistressRate ?? (old('perAnnaAPDistressRate') ?? 0) }}
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-1 pr-0" style="flex: 14%;max-width: 14%;">
                                <label>Rate/Ropani</label>
                                <input type="text" name="perRopaniAPDistressRate" id="perRopaniAPDistressRate"
                                    required="" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->perRopaniAPDistressRate ?? (old('perRopaniAPDistressRate') ?? 0) }}
                                    class="form-control">
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #202ed6;margin-bottom: 0px; text-transform: uppercase;">
                                    <b><i class="fa fa-hashtag"></i> Total Value of Property Land</b>
                                </label>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Government Value of Land</label>
                                <input type="text" name="governmentValueOfLand" id="governmentValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->governmentValueOfLand ?? (old('governmentValueOfLand') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Commercial Value of Land</label>
                                <input type="text" name="commercialValueOfLand" id="commercialValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->commercialValueOfLand ?? (old('commercialValueOfLand') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Fair Market Value of Land</label>
                                <input type="text" name="fairMarketValueOfLand" id="fairMarketValueOfLand"
                                    required="" class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->fairMarketValueOfLand ?? (old('fairMarketValueOfLand') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Distress Value of Land</label>
                                <input type="text" name="distressValueOfLand" id="distressValueOfLand" required=""
                                    class="form-control" readonly="readonly" tabindex="-1"
                                    value={{ $sitevisit->rateofland->distressValueOfLand ?? (old('distressValueOfLand') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Fair Mkrt Value Land &amp; Building</label>
                                <input type="text" name="fairMarketValueOfLandAndBuimding"
                                    id="fairMarketValueOfLandAndBuimding" class="form-control" readonly="readonly"
                                    tabindex="-1"
                                    value={{ $sitevisit->rateofland->fairMarketValueOfLandAndBuimding ?? (old('fairMarketValueOfLandAndBuimding') ?? 0) }}>
                            </div>
                            <div class="form-group col-md-2 ">
                                <label>Distrs Mkrt Value Land &amp; Building</label>
                                <input type="text" name="totalDistressValueOfLandAndBuimding"
                                    id="totalDistressValueOfLandAndBuimding" class="form-control" readonly="readonly"
                                    tabindex="-1"
                                    value={{ $sitevisit->rateofland->totalDistressValueOfLandAndBuimding ?? (old('totalDistressValueOfLandAndBuimding') ?? 0) }}>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div id="BuildingArea" class="col-md-12 mt-2"
                                style="border-top: solid 1px rgb(193, 192, 192)">
                                <div class="row mt-1">
                                    <div class="form-group col-md-12 mb-2">
                                        <label style="color: #dc1de9;margin-bottom: 0px;">
                                            <h6><b>3. BUILDING CALCULATIONS</b></h6>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Floor</label>
                                        <select class="form-control" name="floor" id="floor">
                                            <option value="">--Select Floor--</option>
                                            <option value="Semi_Basement">Semi Basement</option>
                                            <option value="Basement">Basement</option>
                                            <option value="Ground_Floor">Ground Floor</option>
                                            <option value="First_Floor">First Floor</option>
                                            <option value="Second_Floor">Second Floor</option>
                                            <option value="Third_Floor">Third Floor</option>
                                            <option value="Fourth_Floor">Fourth Floor</option>
                                            <option value="Fifth_Floor">Fifth Floor</option>
                                            <option value="Sixth_Floor">Sixth Floor</option>
                                            <option value="Seventh_Floor">Seventh Floor</option>
                                            <option value="Top_Floor">Top Floor</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Area (Per Sq Ft)</label>
                                        <input type="text" name="floorAreaInSqF" id="floorAreaInSqF"
                                            placeholder="Area (Per Sq Ft)" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Rate</label>
                                        <input type="text" name="floorRate" id="floorRate" placeholder="Rate"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Amount</label>
                                        <input type="text" name="floorAmount" id="floorAmount" readonly="readonly"
                                            tabindex="-1" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Floor Age</label>
                                        <input type="text" name="floorAge" id="floorAge" placeholder="Building Age"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Depriciation %</label>
                                        <input type="text" name="floorDepriciationPercentage"
                                            id="floorDepriciationPercentage" placeholder="Depriciation %"
                                            class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%; padding-right:0px;">
                                        <label>Sanitary Pulumbing%</label>
                                        <input type="text" name="sanitaryPulumbingPercentage"
                                            id="sanitaryPulumbingPercentage" placeholder="" class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-2" style="flex: 20%;max-width: 20%;">
                                        <label>Electric Work%</label>
                                        <input type="text" name="electricityWorkPercentage"
                                            id="electricityWorkPercentage" placeholder="" class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-1"
                                        style="flex: 20%;max-width: 20%; padding-left:0px; padding-right:0px;">
                                        <label>Total Amount</label>
                                        <input type="text" name="floorNetAmount" id="floorNetAmount"
                                            readonly="readonly" tabindex="-1" class="form-control">
                                    </div>
                                    <div class="form-group col-md-1" style="flex: 5%;max-width: 5%; padding-right:0px;">
                                        <label style="width: 100%;">&nbsp;</label>
                                        <button type="button"
                                            data-url="{{ route('paperworker.valuation.buildingValautionSubmit', $sitevisit->id) }}"
                                            class="btn btn-info" id="BtnAddBuildingCalculation"
                                            style="padding: 2px 5px;">ADD</button>
                                    </div>
                                    <div class="form-group col-md-12 appendBuildingValuationTable">
                                        @include('Paperworker::paperworker.valuations.appendBuildingValuationTable')
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label>Construction Estimate Value <span class="required">*</span></label>
                                        <input type="text" name="constructionEstimateValue"
                                            id="constructionEstimateValue" placeholder="Construction Estimate Value"
                                            class="form-control" autocomplete="off"
                                            value="{{ $sitevisit->construction_estimate_value ?? old('constructionEstimateValue') ?? '' }}">
                                    </div>
                                   
                                    <input type="hidden" name="constructionDistressValue" id="constructionDistressValue"
                                        tabindex="-1" readonly="readonly" class="form-control" autocomplete="off">
                                    <input type="hidden" name="totalDistressValueOfBuilding"
                                        id="totalDistressValueOfBuilding" tabindex="-1" readonly="readonly"
                                        class="form-control" autocomplete="off">

                                    <div class="form-group col-md-3">
                                        <label>Construction Approval Date (BS)</label>
                                        <input type="text" name="buildingConstructionApprovalDate"
                                            id="buildingConstructionApprovalDate" class="form-control" autocomplete="off"
                                            value="{{ $sitevisit->contruction_approval_date ?? '' }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Year Construction Complite(BCC)</label>
                                        <input type="text" name="yearOfConstructionComplite"
                                            value="{{ $sitevisit->year_construction_complite ?? '' }}"
                                            id="yearOfConstructionComplite" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Ex:- 800"></i>
                                            Area As Per Construction
                                        </label>
                                        <input type="text" name="totalAreaAsPerConstruction"
                                            id="totalAreaAsPerConstruction" class="form-control"
                                            autocomplete="off" value="{{ $sitevisit->area_as_per_construction ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">


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
                                <input type="text" name="eastAPBoundaries" id="eastAPBoundaries" placeholder="East"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>West</label>
                                <input type="text" name="westAPBoundaries" id="westAPBoundaries" placeholder="West"
                                    class="form-control" autocomplete="off">
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
                                <button type="button" class="btn btn-info"
                                    data-url="{{ route('paperworker.valuation.govBoundarySubmit', $sitevisit->id) }}"
                                    id="BtnAddBoundariesAsPerKitaNo" style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12 appendGovBoundaries">
                                @include('Paperworker::paperworker.valuations.appendgovBoundaryData')
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
                                <input type="text" name="aPSiteVisitBoundariesKitaNo" id="aPSiteVisitBoundariesKitaNo"
                                    placeholder="Kita No" class="form-control" autocomplete="off">
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
                                <input type="text" name="northAPSiteVisitBoundaries" id="northAPSiteVisitBoundaries"
                                    placeholder="North" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>South</label>
                                <input type="text" name="southAPSiteVisitBoundaries" id="southAPSiteVisitBoundaries"
                                    placeholder="South" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2 pl-0">
                                <label style="width:100%">&nbsp;</label>
                                <button type="button" class="btn btn-info"
                                    data-url="{{ route('paperworker.valuation.siteVisitBoundarySubmit', $sitevisit->id) }}"
                                    id="BtnAddBoundariesAsPerSiteVisit" style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="appendSiteVisitData">
                                    @include('Paperworker::paperworker.valuations.appendsitevisitBoundaryData')
                                </div>
                            </div>

                            <div class="form-group col-md-4" style="padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Ex:- 500 M From Shankhamul Chok and 1000M From Baneshwor Chok"></i>
                                    Location &amp; Access of The Land<span class="required">*</span></label>
                                <input type="text" name="locationOfAccessLand" id="locationOfAccessLand"
                                    value="{{ $sitevisit->valuationDetails->location_of_land ?? (old('locationOfAccessLand')) }}"
                                    required="" placeholder="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Kathmandu"></i>
                                    District <span class="required">*</span></label>
                                <input type="text" name="locationDistrict" id="locationDistrict" required=""
                                    value="{{ $sitevisit->valuationDetails->district ?? (old('locationDistrict')) }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2" style="padding:0px 6px 0px 6px">
                                <label>V.D.C/Municipality</label>
                                <select class="form-control" name="vdcType" id="vdcType">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->vdc_municipality : '') || old('vdcType') == 'Rural-Municipality' ? 'selected' : '' }}
                                        value="Rural-Municipality">Rural Municipality</option>
                                    <option
                                        {{ ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->vdc_municipality : '') || old('vdcType') == 'Municipality' ? 'selected' : '' }}
                                        value="Municipality">Municipality</option>
                                    <option
                                        {{ ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->vdc_municipality : '') || old('vdcType') == 'Sub-Metropolitan-City' ? 'selected' : '' }}
                                        value="Sub-Metropolitan-City">Sub Metropolitan City</option>
                                    <option
                                        {{ ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->vdc_municipality : '') || old('vdcType') == 'Metropolitan-City' ? 'selected' : '' }}
                                        value="Metropolitan-City">Metropolitan City</option>

                                </select>

                            </div>
                            <div class="form-group col-md-4" style="max-width: 450px; padding:0px 6px 0px 6px">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Ex:- Shankhamul -31 , Kathmandu - 31 Kathmandu Meropolitan City"></i>
                                    Address of Land/Property(Property Location)<span class="required">*</span></label>
                                <input type="text" name="addressOfLand" id="addressOfLand" required=""
                                    value="{{ $sitevisit->valuationDetails->address_of_land ?? (old('addressOfLand') ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">

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
                                    required=""
                                    value="{{ $sitevisit->valuationDetails->road_size ?? (old('accessibilityWithRoadSize') ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    River <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithRiver" id="accessibilityWithRiver"
                                    required=""
                                    value="{{ $sitevisit->valuationDetails->river ?? (old('accessibilityWithRiver') ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Not Seen near Site"></i>
                                    High Tension Line <span class="required">*</span></label>
                                <input type="text" name="accessibilityWithHighTension"
                                    id="accessibilityWithHighTension" required=""
                                    value="{{ $sitevisit->valuationDetails->hightension_line ?? (old('accessibilityWithHighTension') ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type of Region</label>
                                <select class="form-control selectbox" name="typeOfRegion" id="typeOfRegion">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('typeOfRegion') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_region : '') == 'Residential' ? 'selected' : '' }}
                                        value="Residential">Residential</option>
                                    <option
                                        {{ old('typeOfRegion') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_region : '') == 'Commercial' ? 'selected' : '' }}
                                        value="Commercial">Commercial</option>
                                    <option
                                        {{ old('typeOfRegion') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_region : '') == 'Agricultural' ? 'selected' : '' }}
                                        value="Agricultural">Agricultural</option>
                                    <option
                                        {{ old('typeOfRegion') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_region : '') == 'Others' ? 'selected' : '' }}
                                        value="Others">Others</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Motorable Access</label>
                                <select class="form-control selectbox" name="motorableAccess" id="motorableAccess">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('motorableAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->motorable_access : '') == 'Yes' ? 'selected' : '' }}
                                        value="Yes">Yes</option>
                                    <option
                                        {{ old('motorableAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->motorable_access : '') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>

                                </select>
                            </div>


                            <div class="form-group col-md-2">
                                <label>Property Usage</label>
                                <select class="form-control selectbox" name="propertyUsage" id="propertyUsage">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('propertyUsage') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_usage : '') == 'Residential' ? 'selected' : '' }}
                                        value="Residential">Residential</option>
                                    <option
                                        {{ old('propertyUsage') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_usage : '') == 'Commercial' ? 'selected' : '' }}
                                        value="Commercial">Commercial</option>
                                    <option
                                        {{ old('propertyUsage') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_usage : '') == 'Residential&Commercial' ? 'selected' : '' }}
                                        value="Residential&Commercial">Residential & Commercial</option>
                                    <option
                                        {{ old('propertyUsage') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_usage : '') == 'Others' ? 'selected' : '' }}
                                        value="Others">Others</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                    
                                    <label>Type of Access</label>
                                <select class="form-control selectbox" name="typeOfAccess" id="typeOfAccess">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Earthen' ? 'selected' : '' }}
                                        value="Earthen">Earthen</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Gravel' ? 'selected' : '' }}
                                        value="Gravel">Gravel</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Black-Topped' ? 'selected' : '' }}
                                        value="Black-Topped">Black Topped</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'RCC' ? 'selected' : '' }}
                                        value="RCC">RCC</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Block-Paved' ? 'selected' : '' }}
                                        value="Block-Paved">Block Paved</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Goreto-Road' ? 'selected' : '' }}
                                        value="Goreto-Road">Goreto Road</option>
                                    <option
                                        {{ old('typeOfAccess') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_access : '') == 'Khet(No Road)' ? 'selected' : '' }}
                                        value="Khet(No Road)">Khet (No Road)</option>

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
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->shape ?? (old('buildingShape') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- East"></i>
                                    Facing</label>
                                <input type="text" name="buildingFacing" id="buildingFacing" class="form-control"
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->facing ?? (old('buildingFacing') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 8 M"></i>
                                    Frontage</label>
                                <input type="text" name="buildingFrontage" id="buildingFrontage"
                                    class="form-control" autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->frontage ?? (old('buildingFrontage') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Level with Road
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Same Level"></i>
                                </label>
                                <input type="text" name="levelWithRoad" id="levelWithRoad" class="form-control"
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->level_with_road ?? (old('levelWithRoad') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property for the Bank</label>
                                <select class="form-control selectbox" name="propertyForTheBank"
                                    id="propertyForTheBank">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('propertyForTheBank') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_fot_the_bank : '') == 'Recommended' ? 'selected' : '' }}
                                        value="Recommended">Recommended</option>
                                    <option
                                        {{ old('propertyForTheBank') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_fot_the_bank : '') == 'Not-Recommended' ? 'selected' : '' }}
                                        value="Not-Recommended">Not Recommended</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>River / Stream near property</label>
                                <select class="form-control selectbox" name="riverStreamNearProperty"
                                    id="riverStreamNearProperty">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('riverStreamNearProperty') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->rive_near_by : '') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>
                                    <option
                                        {{ old('riverStreamNearProperty') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->rive_near_by : '') == 'Yes' ? 'selected' : '' }}
                                        value="Yes">Yes</option>

                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Heritage Sites Near property</label>
                                <select class="form-control selectbox" name="heritageSitesNearProperty"
                                    id="heritageSitesNearProperty">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('heritageSitesNearProperty') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->heritage_sites_near_by : '') == 'Yes' ? 'selected' : '' }}
                                        value="Yes">Yes</option>
                                    <option
                                        {{ old('heritageSitesNearProperty') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->heritage_sites_near_by : '') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property Ownership Type</label>
                                <select class="form-control selectbox" name="propertyOwnershipType"
                                    id="propertyOwnershipType">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('propertyOwnershipType') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_ownership_type : '') == 'Single' ? 'selected' : '' }}
                                        value="Single">Single</option>
                                    <option
                                        {{ old('propertyOwnershipType') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_ownership_type : '') == 'Joint' ? 'selected' : '' }}
                                        value="Joint">Joint</option>
                                    <option
                                        {{ old('propertyOwnershipType') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_ownership_type : '') == 'Company' ? 'selected' : '' }}
                                        value="Company">Company</option>
                                    <option
                                        {{ old('propertyOwnershipType') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->property_ownership_type : '') == 'Individual' ? 'selected' : '' }}
                                        value="Individual (Joint Name)">Individual (Joint Name)</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 7 M"></i>
                                    Narrowest Part of Land</label>
                                <input type="text" name="narrowestPartOfLand" id="narrowestPartOfLand"
                                    class="form-control" autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->narrowest_part_of_land ?? (old('narrowestPartOfLand') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 12 Feet"></i>
                                    Access in the Blue Print</label>
                                <input type="text" name="accessInTheBluePrint" id="accessInTheBluePrint"
                                    class="form-control" autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->access_in_the_blue_print ?? (old('accessInTheBluePrint') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Right of Way
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 13 Feet"></i>
                                </label>
                                <input type="text" name="rightOfWay" id="rightOfWay" class="form-control"
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->right_of_way ?? (old('rightOfWay') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Frame Structure</label>
                                <select class="form-control selectbox" name="frameStructure" id="frameStructure">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('frameStructure') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->frame_structure : '') == 'Frame-Structure' ? 'selected' : '' }}
                                        value="Frame-Structure">Frame Structure</option>
                                    <option
                                        {{ old('frameStructure') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->frame_structure : '') == 'Load-Bearing' ? 'selected' : '' }}
                                        value="Load-Bearing">Load Bearing</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Any Collateral Fall</label>
                                <select class="form-control selectbox" name="anyCollateralFall"
                                    id="anyCollateralFall">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('anyCollateralFall') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->any_collateral_fall : '') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>
                                    <option
                                        {{ old('anyCollateralFall') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->any_collateral_fall : '') == 'Yes' ? 'selected' : '' }}
                                        value="Yes">Yes</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Comments</label>
                                <input type="text" name="coments" id="coments" class="form-control"
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->comments ?? (old('coments') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Valuation For</label>
                                <select class="form-control selectbox" name="valuationFor" id="valuationFor">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                    
                                        {{ old('valuationFor') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->valuation_for : '') == 'Vacant-Land' ? 'selected' : '' }}
                                        value="Vacant-Land">Vacant Land</option>
                                    <option
                                        {{ old('valuationFor') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->valuation_for : '') == 'Land&Buildinf' ? 'selected' : '' }}
                                        value="Land&Building">Land &amp; Building</option>
                                    <option
                                        {{ old('valuationFor') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->valuation_for : '') == 'Readymade-House' ? 'selected' : '' }}
                                        value="Readymade-House">Readymade House</option>
                                    <option
                                        {{ old('valuationFor') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->valuation_for : '') == 'Apartments/Duplex' ? 'selected' : '' }}
                                        value="Apartments/Duplex">Apartments/Duplex</option>
                                    <option
                                        {{ old('valuationFor') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->valuation_for : '') == 'Construction/Extension/Renovation' ? 'selected' : '' }}
                                        value="Construction/Extension/Renovation">Construction/Extension/Renovation
                                    </option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Coloring And Painting</label>
                                <select class="form-control selectbox" name="coloringAndPainting"
                                    id="coloringAndPainting">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('coloringAndPainting') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->coloring : '') == 'Painted' ? 'selected' : '' }}
                                        value="Painted">Painted</option>
                                    <option
                                        {{ old('coloringAndPainting') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->coloring : '') == 'Not-Painted' ? 'selected' : '' }}
                                        value="Not-Painted">Not Painted</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>
                                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i>
                                    Flooring Finishing</label>
                                <input type="text" name="flooringFinishing" id="flooringFinishing"
                                    class="form-control" autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->florring_finishing ?? (old('flooringFinishing') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- has Been Well Finished."></i> Inner
                                    Wall Ceiling</label>
                                <input type="text" name="innerWallCeiling" id="innerWallCeiling"
                                    class="form-control" autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->inner_wall_ceiling ?? (old('innerWallCeiling') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Type Of Land</label>
                                <select class="form-control selectbox" name="topography" id="topography">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Planning' ? 'selected' : '' }}
                                        value="Planning">Planning</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Khet' ? 'selected' : '' }}
                                        value="Khet">Khet</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Flat' ? 'selected' : '' }}
                                        value="Flat">Flat</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Slightly-Slope' ? 'selected' : '' }}
                                        value="Slightly-Slope">Slightly Slope</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Low-Land' ? 'selected' : '' }}
                                        value="Low-Land">Low Land</option>
                                    <option
                                        {{ old('topography') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->type_of_land : '') == 'Irregural-Shape' ? 'selected' : '' }}
                                        value="Irregural-Shape">Irregural Shape</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- Bounded by Brick Wall."></i>
                                    Boundary</label>
                                <input type="text" name="boundary" id="boundary" class="form-control"
                                    autocomplete="off" required=""
                                    value="{{ $sitevisit->valuationDetails->boundary ?? (old('boundary') ?? '') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Ex:- 2 And Half"></i> No Of Floor
                                    (Storie)</label>
                                <input type="text" name="noOfFloorStorie" id="noOfFloorStorie"
                                    value="{{ $sitevisit->valuationDetails->no_of_floors ?? (old('noOfFloorStorie') ?? '') }}"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Compound Wall</label>
                                <select class="form-control selectbox" name="compoundWall" id="compoundWall">
                                    <option disabled selected>Choose One...</option>
                                    <option
                                        {{ old('compoundWall') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->compound_wall : '') == 'Constructed' ? 'selected' : '' }}
                                        value="Constructed">Constructed</option>
                                    <option
                                        {{ old('compoundWall') || ($sitevisit->valuationDetails != null ? $sitevisit->valuationDetails->compound_wall : '') == 'Not-Constructed' ? 'selected' : '' }}
                                        value="Not-Constructed">Not Constructed</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Internal Remarks</label>
                                <input type="text" name="internalRemarks" id="internalRemarks"
                                    class="form-control" autocomplete="off"
                                    value="{{ $sitevisit->valuationDetails->internal_remarks ?? (old('internalRemarks') ?? '') }}">
                            </div>
                            <input type="hidden" name="isAvailabilityTelephone" id="isAvailabilityTelephone"
                                class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityInternet" id="isAvailabilityInternet"
                                class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilitySewerage" id="isAvailabilitySewerage"
                                class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityElectricity" id="isAvailabilityElectricity"
                                class="form-control" autocomplete="off" value="Yes">
                            <input type="hidden" name="isAvailabilityWaterSupply" id="isAvailabilityWaterSupply"
                                class="form-control" autocomplete="off" value="Yes">
                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>5 UPLOAD DOCUMENT</b></h6>
                                </label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Upload Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>

                                    <input type="file" name="UploadPicture[]" multiple id="UploadPicture">
                                @include('Paperworker::paperworker.valuations.appendDocument')
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload CAD Jpg Doc</label>
                                <input type="file" name="UploadCADDocument[]" multiple id="UploadDocument">
                                @include('Paperworker::paperworker.valuations.appendCADDocument')
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Legal Scan Doc</label>
                                <input type="file" name="UploadScanDocuments[]" multiple=""
                                    id="UploadScanDocument">
                                @include('Paperworker::paperworker.valuations.appendLegalDocument')
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Internal CAD Doc</label>
                                <input type="file" name="UploadInternalDocuments[]" multiple=""
                                    id="UploadInternalDocument">
                                @include('Paperworker::paperworker.valuations.appendInternalCADDocument')
                            </div>

                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info float-right ml-3" form="mainForm">Submit</button>
                            </div>
                        </div>
                       
                       
                    </form>
                 
                  
                </div>

            </div>
        </div>
    </div>


@endsection
@push('scripts')
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>

    <script>
        var mainInput = document.getElementById("prepration_date");
        mainInput.nepaliDatePicker();

        var mainInput1 = document.getElementById("date_ownership");
        mainInput1.nepaliDatePicker();

        var mainInput2 = document.getElementById("buildingConstructionApprovalDate");
        mainInput2.nepaliDatePicker();
    </script>

    <script>
        $('.mainSubmit').click(function(){
            $('#mainForm').submit();
        });
    </script>
    <script>
        var data = "{{ $sitevisit->valuation_type }}";
        console.log(data);
        if (data == "Land") {
            $('#BuildingArea').addClass('d-none');
        }
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
            var sqm = $('#sqm_as_lalpurja').val();
            var area = $('#area_in_anna_as_lalpurja').val();

            var route = $(this).data('url');

            if (sqm == '' || kitano == '' || sheetno == '') {
                toastr.error('[Kitano, Sheetno, Area in Sq.M] cannot be empty');
            } else {
                $.ajax({
                    type: "GET",
                    url: route,

                    data: {
                        kitano: kitano,
                        sheetno: sheetno,
                        ropani: ropani,
                        aana: aana,
                        paisa: paisa,
                        dam: dam,
                        rapd: rapd,
                        sqf: sqf,
                        sqm: sqm,
                        area: area
                    },
                    beforeSend: function(data) {
                        loader();
                    },
                    success: function(data) {
                        $('.appendLalpurja').html(data.data.view);
                        toastr.success(data.message);
                        var kitano = $('#kita_no').val('');
                        var sheetno = $('#sheet_no').val('');
                        var ropani = $('#ropani_as_lalpurja').val('');
                        var aana = $('#anna_as_lalpurja').val('');
                        var paisa = $('#paisa_as_lalpurja').val('');
                        var dam = $('#dam_as_lalpurja').val('');
                        var rapd = $('#rapd_as_lalpurja').val('');
                        var sqf = $('#sqf_as_lalpurja').val('');
                        var sqm = $('#sqm_as_lalpurja').val('');
                        var area = $('#area_in_anna_as_lalpurja').val('');
                        var totalSqF = $('#totalSqF').val();
                        var rapd = SqFToRAPD(totalSqF);
                        $('#ltotalRAPD').text(rapd);
                        $('#totalRAPD').val(rapd);
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
            }




        });

        // Building Valuation Submit


        $("#floorAreaInSqF,#floorRate").keyup(function() {
            var floorAreaInSqF = $('#floorAreaInSqF').val();
            var floorRate = $('#floorRate').val();
            var floorAmount = floorAreaInSqF * floorRate;
            console.log(floorAreaInSqF, floorRate, floorAmount);
            $('#floorAmount').val(floorAmount);
        });

        $("#floorDepriciationPercentage,#sanitaryPulumbingPercentage,#electricityWorkPercentage").keyup(function() {
            var floorDepriciationPercentage = $('#floorDepriciationPercentage').val();
            var sanitaryPulumbingPercentage = $('#sanitaryPulumbingPercentage').val();
            var electricityWorkPercentage = $('#electricityWorkPercentage').val();
            var floorAmount = $('#floorAmount').val();

            var floorDepriciationAmount = (floorDepriciationPercentage / 100) * floorAmount;
            var sanitaryPulumbingAmount = (sanitaryPulumbingPercentage / 100) * floorAmount;
            var electricityWorkAmount = (electricityWorkPercentage / 100) * floorAmount;
            var floorNetAmount = floorDepriciationAmount + sanitaryPulumbingAmount + electricityWorkAmount + Number(
                floorAmount);
            // console.log(floorAmount, floorNetAmount);
            $('#floorNetAmount').val(Number(floorNetAmount).toFixed(2));
        });





        $(document).on('click', '#BtnAddBuildingCalculation', function(e) {

            e.preventDefault();
            var currentevent = $(this);

            var _v3 = Number($('#bankId').attr("myfairmarketvalue"));
        
            var floor = $('#floor').val();
            var floorAreaInSqF = $('#floorAreaInSqF').val();
            var floorRate = $('#floorRate').val();
            var floorAmount = $('#floorAmount').val();
            var floorAge = $('#floorAge').val();
            var floorDepriciationPercentage = $('#floorDepriciationPercentage').val();
            var sanitaryPulumbingPercentage = $('#sanitaryPulumbingPercentage').val();
            var electricityWorkPercentage = $('#electricityWorkPercentage').val();
            var floorNetAmount = $('#floorNetAmount').val();

            var floorDepriciationAmount =(floorNetAmount/100)*(floorAge*floorDepriciationPercentage).toFixed(2);
            var floorFairMarketValue = floorNetAmount-((floorNetAmount/100)*(floorAge*floorDepriciationPercentage)).toFixed(2);
            var distressValue = (((floorNetAmount-((floorNetAmount/100)*(floorAge*floorDepriciationPercentage)))/100)*_v3).toFixed(2);

            var route = $(this).data('url');

            if (floor == '' || floorAreaInSqF == '' || floorRate == '' || floorNetAmount == '') {
                toastr.error('[Floor, Area, Rate or Total Amount cannot be empty');
            } else {
                $.ajax({
                    type: "GET",
                    url: route,

                    data: {
                        floor: floor,
                        floorAreaInSqF: floorAreaInSqF,
                        floorRate: floorRate,
                        floorAmount: floorAmount,
                        floorAge: floorAge,
                        floorDepriciationPercentage: floorDepriciationPercentage,
                        sanitaryPulumbingPercentage: sanitaryPulumbingPercentage,
                        electricityWorkPercentage: electricityWorkPercentage,
                        floorNetAmount: floorNetAmount,
                        floorDepriciationAmount :floorDepriciationAmount ,
                        floorFairMarketValue :floorFairMarketValue ,
                        distressValue :distressValue ,

                    },
                    beforeSend: function(data) {
                        loader();
                    },
                    success: function(data) {
                        $('.appendBuildingValuationTable').html(data.data.view);
                        toastr.success(data.message);

                        $('#fairMarketValueOfLandAndBuimding').val(Number(Number($('#fairMarketValueOfLand').val()) + Number($(
                            '#LblTotalBuildingFairMarketValue').val())).toFixed(2));
                        $('#totalDistressValueOfLandAndBuimding').val(Number(Number($('#LblTotalBuildingDistressValue').val()) + Number($(
                            '#distressValueOfLand').val())).toFixed(2));

                        $('#floor').val();
                        $('#floorAreaInSqF').val();
                        $('#floorRate').val();
                        $('#floorAmount').val();
                        $('#floorAge').val();
                        $('#floorDepriciationPercentage').val();
                        $('#sanitaryPulumbingPercentage').val();
                        $('#electricityWorkPercentage').val();
                        $('#floorNetAmount').val();

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
            }




        });

        $(document).ready(function() {

            var totalSqF = $('#totalSqF').val();
            var TotalRAPD = SqFToRAPD(totalSqF);
            $('#ltotalRAPD').text(TotalRAPD);
            $('#totalRAPD').val(TotalRAPD);

            // Actual Measurement
            var totalSqFAsPerCal = $('#totalSqFAsPerCal').val();
            var TotalRAPDAsPerCal = SqFToRAPD(totalSqFAsPerCal);
            $('#LblTotalAreaInRPADAsPerMeasurement').text(TotalRAPDAsPerCal);
            $('#LblTotalAreaInRPADAsPerMeasurementVal').val(TotalRAPDAsPerCal);

            CalculateConsiderationArea();
            CalculationAreaRate();

            var annaCons = $('#annaAPConsideration').val();
            var govRate = $('#perAnnaAPGovRate').val();
            var marketRate = $('#perAnnaAPMarketRate').val();
            var fairMarketRate = $('#perAnnaAPFairRate').val();
            var distressLandRate = $('#perAnnaAPDistressRate').val();
            // console.log(marketRate,annaCons,marketRate*annaCons);
            $('#governmentValueOfLand').val((annaCons * govRate).toFixed(2));
            $('#commercialValueOfLand').val((annaCons * marketRate).toFixed(2));
            $('#fairMarketValueOfLand').val((annaCons * fairMarketRate).toFixed(2));
            $('#distressValueOfLand').val((annaCons * distressLandRate).toFixed(2));

            $('#fairMarketValueOfLandAndBuimding').val(Number(Number($('#fairMarketValueOfLand').val()) + Number($(
                            '#LblTotalBuildingFairMarketValue').val())).toFixed(2));
            $('#totalDistressValueOfLandAndBuimding').val(Number(Number($('#LblTotalBuildingDistressValue').val()) + Number($(
            '#distressValueOfLand').val())).toFixed(2));
        

        });



        //actual measurement
        $(document).on('click', '#BtnAddAreaAPMeasurement', function(e) {

            e.preventDefault();
            var currentevent = $(this);
            var sideA = $('#sideA').val();
            var areaSymbol = $('#areaSymbol').val();
            var sideB = $('#sideB').val();
            var sideC = $('#sideC').val();
            var sideS = $('#sideS').val();
            var sqFAPMeasurement = $('#sqFAPMeasurement').val();
            var sqMAPMeasurement = $('#sqMAPMeasurement').val();
            var areaInAnnaAPMeasurement = $('#areaInAnnaAPMeasurement').val();
            var totalRAPDAsPerCal = SqFToRAPD(sqFAPMeasurement);
            alert(totalRAPDAsPerCal);
            var route = $(this).data('url');


            if (areaSymbol == '' || sideB == '' || sideC == '' || sideA == '') {
                toastr.error("[Side A, Side B, Side C, Area Symbol ] is required");
            } else {
                $.ajax({
                    type: "GET",
                    url: route,

                    data: {
                        sideA: sideA,
                        areaSymbol: areaSymbol,
                        sideB: sideB,
                        sideC: sideC,
                        sqFAPMeasurement: sqFAPMeasurement,
                        sideS: sideS,
                        sqMAPMeasurement: sqMAPMeasurement,
                        areaInAnnaAPMeasurement: areaInAnnaAPMeasurement,
                        totalRAPDAsPerCal: totalRAPDAsPerCal

                    },
                    beforeSend: function(data) {
                        loader();
                    },
                    success: function(data) {
                        $('.appendLandBased').html(data.data.view);
                        toastr.success(data.message);
                        var sideA = $('#sideA').val('');
                        var areaSymbol = $('#areaSymbol').val('');
                        var sideB = $('#sideB').val('');
                        var sideC = $('#sideC').val('');
                        var sideS = $('#sideS').val('');
                        var sqFAPMeasurement = $('#sqFAPMeasurement').val('');
                        var sqMAPMeasurement = $('#sqMAPMeasurement').val('');
                        var areaInAnnaAPMeasurement = $('#areaInAnnaAPMeasurement').val('');
                        var totalSqFAsPerCal = $('#totalSqFAsPerCal').val();
                        var TotalRAPDAsPerCal = SqFToRAPD(totalSqFAsPerCal);
                        $('#LblTotalAreaInRPADAsPerMeasurement').text(TotalRAPDAsPerCal);
                        $('#LblTotalAreaInRPADAsPerMeasurement').val(TotalRAPDAsPerCal);

                        CalculateConsiderationArea();
                        CalculationAreaRate();

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
            }



        });


        //goverment

        $(document).on('click', '#BtnAddBoundariesAsPerKitaNo', function(e) {

            e.preventDefault();
            var currentevent = $(this);
            var boundariesKitaNo = $('#boundariesKitaNo').val();
            var eastAPBoundaries = $('#eastAPBoundaries').val();
            var westAPBoundaries = $('#westAPBoundaries').val();
            var northAPBoundaries = $('#northAPBoundaries').val();
            var southAPBoundaries = $('#southAPBoundaries').val();

            var route = $(this).data('url');


            if (boundariesKitaNo == '' || eastAPBoundaries == '' || westAPBoundaries == '' || northAPBoundaries ==
                '' || southAPBoundaries == '') {
                toastr.error("[Kita No , east, west, north , 'south'] boundaries are required");
            } else {
                $.ajax({
                    type: "GET",
                    url: route,

                    data: {
                        boundariesKitaNo: boundariesKitaNo,
                        eastAPBoundaries: eastAPBoundaries,
                        westAPBoundaries: westAPBoundaries,
                        northAPBoundaries: northAPBoundaries,
                        southAPBoundaries: southAPBoundaries,
                    },
                    beforeSend: function(data) {
                        // loader();
                    },
                    success: function(data) {
                        $('.appendGovBoundaries').html(data.data.view);
                        toastr.success(data.message);
                        $('#boundariesKitaNo').val('');
                        $('#eastAPBoundaries').val('');
                        $('#westAPBoundaries').val('');
                        $('#northAPBoundaries').val('');
                        $('#southAPBoundaries').val('');
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
                        // $.unblockUI();
                    }
                });
            }



        });

        //sitevisit
        $(document).on('click', '#BtnAddBoundariesAsPerSiteVisit', function(e) {

            e.preventDefault();
            var currentevent = $(this);
            var boundariesKitaNo = $('#aPSiteVisitBoundariesKitaNo').val();
            var eastAPBoundaries = $('#eastAPSiteVisitBoundaries').val();
            var westAPBoundaries = $('#westAPSiteVisitBoundaries').val();
            var northAPBoundaries = $('#northAPSiteVisitBoundaries').val();
            var southAPBoundaries = $('#southAPSiteVisitBoundaries').val();

            var route = $(this).data('url');


            if (boundariesKitaNo == '' || eastAPBoundaries == '' || westAPBoundaries == '' || northAPBoundaries ==
                '' || southAPBoundaries == '') {
                toastr.error("[Kita No , east, west, north , 'south'] boundaries are required");
            } else {
                $.ajax({
                    type: "GET",
                    url: route,

                    data: {
                        boundariesKitaNo: boundariesKitaNo,
                        eastAPBoundaries: eastAPBoundaries,
                        westAPBoundaries: westAPBoundaries,
                        northAPBoundaries: northAPBoundaries,
                        southAPBoundaries: southAPBoundaries,
                    },
                    beforeSend: function(data) {
                        // loader();
                    },
                    success: function(data) {
                        $('.appendSiteVisitData').html(data.data.view);
                        toastr.success(data.message);
                        $('#aPSiteVisitBoundariesKitaNo').val('');
                        $('#eastAPSiteVisitBoundaries').val('');
                        $('#westAPSiteVisitBoundaries').val('');
                        $('#northAPSiteVisitBoundaries').val('');
                        $('#southAPSiteVisitBoundaries').val('');
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
                        // $.unblockUI();
                    }
                });
            }



        });
    </script>


    {{-- New Scripts --}}

    <script>
        $(document).on('keyup', '#sqm_as_lalpurja', function() {
            var SqM = $(this).val()
            var SqF = $(this).val() * 10.76;
            //console.log('SqF :'+Number(SqF).toFixed(2));
            $('#sqFAPLalpurja').val(($(this).val() * 10.76).toFixed(2));
            var TotalRopani = SqF / (16 * 342.25);
            //console.log('TotalRopani :'+TotalRopani);
            var OnlyRopani = TotalRopani.toString().split(".")[0];
            //console.log('OnlyRopani :'+Number(OnlyRopani).toFixed(2));
            var RemainingRopani = (TotalRopani - OnlyRopani);
            //console.log('RemainingRopani :'+RemainingRopani);
            var TotalAana = RemainingRopani * (16);
            //console.log('TotalAana :'+TotalAana);
            var OnlyAana = TotalAana.toString().split(".")[0];
            //console.log('OnlyAana :'+Number(OnlyAana).toFixed(2));
            var RemainingAana = (TotalAana - OnlyAana);
            //console.log('RemainingAana :'+RemainingAana);
            var RemainingAanaToSQF = RemainingAana * 342.25;
            //console.log('RemainingAanaToSQF :'+RemainingAanaToSQF);
            var TotalPaisa = RemainingAanaToSQF / (85.6);
            //console.log('TotalPaisa :'+TotalPaisa);
            var OnlyPaisa = TotalPaisa.toString().split(".")[0];
            //console.log('OnlyPaisa :'+Number(OnlyPaisa).toFixed(2));
            var RemainingPaisa = (TotalPaisa - OnlyPaisa);
            //console.log('RemainingPaisa :'+RemainingPaisa);

            var RemainingPaisaToSQF = RemainingPaisa * 85.6;
            //console.log('RemainingPaisaToSQF :'+RemainingPaisaToSQF);
            var OnlyDam = RemainingPaisaToSQF / (21.4);
            //console.log('OnlyDam :'+Number(OnlyDam).toFixed(2));

            //var AreaInAnna = Number(SqF.toFixed(2)/ 342.25).toFixed(2);
            //console.log('AreaInAnna :'+Number(AreaInAnna).toFixed(2));

            $('#ropani_as_lalpurja').val(OnlyRopani);
            $('#anna_as_lalpurja').val(OnlyAana);
            $('#paisa_as_lalpurja').val(OnlyPaisa);
            $('#dam_as_lalpurja').val(Number(OnlyDam).toFixed(2));
            $('#sqf_as_lalpurja').val(SqF.toFixed(2));
            $('#rapd_as_lalpurja').val(Number(OnlyRopani) + '-' + Number(OnlyAana) + '-' + Number(OnlyPaisa) + '-' +
                Number(OnlyDam).toFixed(2));
            $('#area_in_anna_as_lalpurja').val(Number(SqF / 342.25).toFixed(2));


        })



        $("#constructionEstimateValue").keyup(function() {
            var _v3 = Number($('#bankId').attr("myfairmarketvalue"));
            //var k =Number($(this).val());
            $("#constructionDistressValue").val(Number((Number($(this).val()) / 100) * _v3).toFixed(2));
            $("#totalDistressValueOfBuilding").val(Number(((Number($(this).val()) + Number($(
                "#fairMarketValueOfLand").val())) / 100) * _v3).toFixed(2));
        });

        $("#sideA,#sideB,#sideC").keyup(function() {
            var SideA = Number($("#sideA").val());
            var SideB = Number($("#sideB").val());
            var SideC = Number($("#sideC").val());
            var SideS = (SideA + SideB + SideC) / 2;
            $('#sideS').val(SideS.toFixed(2));
            var _a = Number(SideS) * (Number(SideS) - Number(SideA)) * (Number(SideS) - Number(SideB)) * (Number(
                SideS) - Number(SideC));
            $('#sqFAPMeasurement').val(Math.sqrt(Number(Math.abs(_a))).toFixed(2));
            $('#sqMAPMeasurement').val((Number($('#sqFAPMeasurement').val()) * 0.092903).toFixed(2));
            var SqFAPMeasurement = $('#sqFAPMeasurement').val();
            $('#areaInAnnaAPMeasurement').val(Number(SqFAPMeasurement / 342.25).toFixed(2));
        });

        //   Government Rate of Land
        $(document).on('keyup', '#perAnnaAPGovRate', function() {
            var perAnnaAPGovRate = $('#perAnnaAPGovRate').val();
            var perSqFAPGovRate = (perAnnaAPGovRate / 342.25).toFixed(2);
            var perRopaniAPGovRate = perAnnaAPGovRate * 16;
            $('#perSqFAPGovRate').val(perSqFAPGovRate);
            $('#perRopaniAPGovRate').val(perRopaniAPGovRate);
        })
        // Market Rate of Land
        $(document).on('keyup', '#perAnnaAPMarketRate', function() {
            var perAnnaAPMarketRate = $('#perAnnaAPMarketRate').val();
            var perSqFAPMarketRate = (perAnnaAPMarketRate / 342.25).toFixed(2);
            var perRopaniAPMarketRate = perAnnaAPMarketRate * 16;
            $('#perSqFAPMarketRate').val(perSqFAPMarketRate);
            $('#perRopaniAPMarketRate').val(perRopaniAPMarketRate);
            $('#perSqFAPMarketRate').val(perSqFAPMarketRate);

            fairMarketValueOfLandAndBuimding
        })
    </script>


    <script>
        $("#deductionOfRoadSqF,#landDevelopmentPercent,#deductionForHighTensionSqF,#deductionForLowLandSqF,#deductionForRiverSqF,#deductionForBoundryCorrection,#deductionForIrregularShapeSloppyLand")
            .keyup(function() {
                CalculateConsiderationArea();
                CalculationAreaRate();
            });



        $("#perAnnaAPGovRate").change(function() {
            $('#perSqFAPGovRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
            $('#perRopaniAPGovRate').val(Number(Number($(this).val()) * 16).toFixed(2));
            CalculationAreaRate();
        });

        $("#perAnnaAPMarketRate").change(function() {
            $('#perSqFAPMarketRate').val(Number(Number($(this).val()) / 342.25).toFixed(2));
            $('#perRopaniAPMarketRate').val(Number(Number($(this).val()) * 16).toFixed(2));
            CalculationAreaRate();
        });

        function BindAreaAsPerCalculation(data) {
            var obj = $.parseJSON(data);
            $('#areaSymbol').focus();
            $("#TblAreaAsPerMeasurement > tbody").find("tr").remove();
            var TotalSideA = 0,
                TotalSideB = 0,
                TotalSideC = 0,
                TotalSideS = 0,
                TotalSqFAPMeasurement = 0,
                TotalSqMAPMeasurement = 0,
                TotalAreaInAnnaAPMeasurement = 0;
            $.each(obj, function(i, item) {
                TotalSideA = TotalSideA + Number(item.SideA);
                TotalSideB = TotalSideB + Number(item.SideB);
                TotalSideC = TotalSideC + Number(item.SideC);
                TotalSideS = TotalSideS + Number(item.SideS);
                TotalSqFAPMeasurement = TotalSqFAPMeasurement + Number(item.SqFAPMeasurement);
                TotalSqMAPMeasurement = TotalSqMAPMeasurement + Number(item.SqMAPMeasurement);
                TotalAreaInAnnaAPMeasurement = TotalAreaInAnnaAPMeasurement + Number(item.AreaInAnnaAPMeasurement);
                var AreaInRPADAsPerMeasurement = SqFToRAPD(Number(item.SqFAPMeasurement).toFixed(2));
                $('#TblAreaAsPerMeasurement > tbody').append('<tr><th scope="row">' + (i + 1) + '</th><td>' + item
                    .AreaSymbol + '</td><td>' + item.SideA + '</td><td>' + item.SideB + '</td><td>' + item
                    .SideC + '</td><td>' + item.SideS + '</td><td>' + item.SqFAPMeasurement + '</td><td>' + item
                    .SqMAPMeasurement + '</td><td>' + item.AreaInAnnaAPMeasurement + '</td><td>' +
                    AreaInRPADAsPerMeasurement +
                    '</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveAreaAsPerCal" SNo="' +
                    item.SNo + '" DataSource="' + item.datasource +
                    '" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
            });

            $('#totalAreaSideA').text(TotalSideA.toFixed(2));
            $('#totalAreaSideA').val(TotalSideA.toFixed(2));
            $('#totalAreaSideB').text(TotalSideB.toFixed(2));
            $('#totalAreaSideB').val(TotalSideB.toFixed(2));
            $('#totalAreaSideC').text(TotalSideC.toFixed(2));
            $('#totalAreaSideC').val(TotalSideC.toFixed(2));
            $('#totalAreaSideS').text(TotalSideS.toFixed(2));
            $('#totalAreaSideS').val(TotalSideS.toFixed(2));
            $('#totalSqFAsPerCal').text(Number(TotalSqFAPMeasurement).toFixed(2));
            $('#totalSqFAsPerCal').val(TotalSqFAPMeasurement);
            $('#totalSqMAsPerCal').text(Number(TotalSqMAPMeasurement).toFixed(2));
            $('#totalSqMAsPerCal').val(TotalSqMAPMeasurement.toFixed(2));
            $('#totalAreaInAnnaAPMeasurement').text(Number(TotalAreaInAnnaAPMeasurement).toFixed(2));
            $('#totalAreaInAnnaAPMeasurement').val(TotalAreaInAnnaAPMeasurement.toFixed(2));
            var TotalAreaInRPADAsPerMeasurement = SqFToRAPD(Number(TotalSqFAPMeasurement).toFixed(2));
            $('#totalAreaInRPADAsPerMeasurement').text(TotalAreaInRPADAsPerMeasurement);
            $('#totalAreaInRPADAsPerMeasurement').val(TotalAreaInRPADAsPerMeasurement);

            CalculateConsiderationArea();
            CalculationAreaRate();
        }

        function CalculateConsiderationArea() {
            var _v1 = Number($('#totalAreaInAnna').val());
            var _v2 = Number($('#totalAreaInAnnaAPMeasurement').val());
            var DeductionOfRoadSqF = Number($("#deductionOfRoadSqF").val());
            var LandDevelopmentPercent = Number($("#landDevelopmentPercent").val());
            var DeductionForHighTensionSqF = Number($("#deductionForHighTensionSqF").val());
            var DeductionForLowLandSqF = Number($("#deductionForLowLandSqF").val());
            var DeductionForRiverSqF = Number($("#deductionForRiverSqF").val());
            var BoundryCorrectionPercent = Number($("#deductionForBoundryCorrection").val());
            var IrregularShapePercent = Number($("#deductionForIrregularShapeSloppyLand").val());
            if (_v2 < _v1) {
                var TotalSqFAsPerCal = Number($("#totalSqFAsPerCal").val());
                var _v1 = (TotalSqFAsPerCal / 100) * LandDevelopmentPercent;
                var _v2 = (TotalSqFAsPerCal / 100) * BoundryCorrectionPercent;
                var _v3 = (TotalSqFAsPerCal / 100) * IrregularShapePercent;
                var Val = TotalSqFAsPerCal - (DeductionOfRoadSqF + DeductionForHighTensionSqF + DeductionForLowLandSqF +
                    DeductionForRiverSqF + (_v1) + (_v2) + (_v3));

                $('#sqMAPConsideration').val((Number(Val) * 0.092903).toFixed(2));
                $('#sqFAPConsideration').val(Number(Val).toFixed(2));

                var TotalRAPD = SqFToRAPD(Val);
                $('#rAPDAPConsideration').val(TotalRAPD);
                $('#annaAPConsideration').val((Number(Val) / 342.25).toFixed(2));

                var x1 = Number((TotalSqFAsPerCal / 100) * LandDevelopmentPercent);
                $('#landDevelopmentSqF').val(Number(x1).toFixed(2));
                $('#afterLandDevelopmentAreaInAnna').val((Number(x1 / 342.25)).toFixed(2));
                $('#afterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

                var x2 = Number((TotalSqFAsPerCal / 100) * BoundryCorrectionPercent);
                $('#deductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
                $('#afterBoundryCorrectionAreaInAnna').val((Number(x2 / 342.25)).toFixed(2));
                $('#afterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

                var x3 = Number((TotalSqFAsPerCal / 100) * IrregularShapePercent);
                $('#afterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
                $('#afterIrregularShapeSloppyLandAreaInAnna').val((Number(x3 / 342.25)).toFixed(2));
                $('#afterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
            } else {
                var TotalSqF = Number($("#totalSqFAsPerCal").val());
                var _v1 = (TotalSqF / 100) * LandDevelopmentPercent;
                var _v2 = (TotalSqF / 100) * BoundryCorrectionPercent;
                var _v3 = (TotalSqF / 100) * IrregularShapePercent;
                var Val = TotalSqF - (DeductionOfRoadSqF + DeductionForHighTensionSqF + DeductionForLowLandSqF +
                    DeductionForRiverSqF + (_v1) + (_v2) + (_v3));

                $('#sqMAPConsideration').val((Number(Val) * 0.092903).toFixed(2));
                $('#sqFAPConsideration').val(Number(Val).toFixed(2));
                console.log(TotalSqF, Val, DeductionOfRoadSqF);

                var TotalRAPD = SqFToRAPD(Val);
                $('#rAPDAPConsideration').val(TotalRAPD);
                $('#annaAPConsideration').val((Number(Val) / 342.25).toFixed(2));

                var x1 = Number((TotalSqF / 100) * LandDevelopmentPercent);
                $('#landDevelopmentSqF').val(Number(x1).toFixed(2));
                $('#afterLandDevelopmentAreaInAnna').val((Number(x1 / 342.25)).toFixed(2));
                $('#afterLandDevelopmentAreaInRPAD').val(SqFToRAPD(Number(x1).toFixed(2)));

                var x2 = Number((TotalSqF / 100) * BoundryCorrectionPercent);
                $('#deductionForBoundryCorrectionSqF').val(Number(x2).toFixed(2));
                $('#afterBoundryCorrectionAreaInAnna').val((Number(x2 / 342.25)).toFixed(2));
                $('#afterBoundryCorrectionAreaInRPAD').val(SqFToRAPD(Number(x2).toFixed(2)));

                var x3 = Number((TotalSqF / 100) * IrregularShapePercent);
                $('#afterIrregularShapeSloppyLandAreaInAnna').val((Number(x3 / 342.25)).toFixed(2));
                $('#afterIrregularShapeSloppyLandSqF').val(Number(x3).toFixed(2));
                $('#afterIrregularShapeSloppyLandAreaInRPAD').val(SqFToRAPD(Number(x3).toFixed(2)));
            }

            $('#afterDeductionOfRoadAreaInAnna').val((Number(DeductionOfRoadSqF / 342.25)).toFixed(2));
            $('#afterDeductionOfRoadAreaInRPAD').val(SqFToRAPD(Number(DeductionOfRoadSqF).toFixed(2)));

            $('#afterHighTensionAreaInAnna').val((Number(DeductionForHighTensionSqF / 342.25)).toFixed(2));
            $('#afterHighTensionAreaInRPAD').val(SqFToRAPD(Number(DeductionForHighTensionSqF).toFixed(2)));

            $('#afterLowLandAreaInAnna').val((Number(DeductionForLowLandSqF / 342.25)).toFixed(2));
            $('#afterLowLandAreaInRPAD').val(SqFToRAPD(Number(DeductionForLowLandSqF).toFixed(2)));

            $('#afterRiverAreaInAnna').val((Number(DeductionForRiverSqF / 342.25)).toFixed(2));
            $('#afterRiverAreaInRPAD').val(SqFToRAPD(Number(DeductionForRiverSqF).toFixed(2)));
        }


        function SqFToRAPD(SqF) {
            var TotalRopani = SqF / (16 * 342.25);
            var OnlyRopani = TotalRopani.toString().split(".")[0];
            var RemainingRopani = (TotalRopani - OnlyRopani);
            var TotalAana = RemainingRopani * (16);
            var OnlyAana = TotalAana.toString().split(".")[0];
            var RemainingAana = (TotalAana - OnlyAana);
            var RemainingAanaToSQF = RemainingAana * 342.25;
            var TotalPaisa = RemainingAanaToSQF / (85.6);
            var OnlyPaisa = TotalPaisa.toString().split(".")[0];
            var RemainingPaisa = (TotalPaisa - OnlyPaisa);
            var RemainingPaisaToSQF = RemainingPaisa * 85.6;
            var OnlyDam = RemainingPaisaToSQF / (21.4);
            return Number(OnlyRopani) + '-' + Number(OnlyAana) + '-' + Number(OnlyPaisa) + '-' + Number(OnlyDam).toFixed(2);
        }

        function CalculationAreaRate() {
            var v1 = Number($('#perAnnaAPGovRate').val());
            var v2 = Number($('#perAnnaAPMarketRate').val());

            var _v1 = Number($('#bankId').attr("mygovernmentvalue"));

            if (Number($('#bankId').attr("myisfairmarketcalculationgovwise")) === 0) _v1 = 0;
            var _v2 = Number($('#bankId').attr("mycommercialvalue"));
            var v3 = ((v1 / 100) * _v1) + ((v2 / 100) * _v2);
            $('#perAnnaAPFairRate').val(v3.toFixed(2));
            $('#perSqFAPFairRate').val(Number(Number(v3.toFixed(2)) / 342.25).toFixed(2));
            $('#perRopaniAPFairRate').val(Number(Number(v3.toFixed(2)) * 16).toFixed(2));

            var _v11 = Number($('#bankId').attr("mygovernmentvalue"));
            var _v3 = Number($('#bankId').attr("myfairmarketvalue"));
            if (Number($('#bankId').attr("myisdistresscalculationgovwise")) === 1) {
                $('#perAnnaAPDistressRate').val(Number((v3.toFixed(2)) / 100 * _v3) + Number((v1.toFixed(2)) / 100 * _v11));
            } else {
                $('#perAnnaAPDistressRate').val(Number((v3.toFixed(2)) / 100 * _v3).toFixed(2));
            }
            $('#perSqFAPDistressRate').val(Number(Number($('#perAnnaAPDistressRate').val()) / 342.25).toFixed(2));
            $('#perRopaniAPDistressRate').val(Number(Number($('#perAnnaAPDistressRate').val()) * 16).toFixed(2));

            var v4 = Number($('#totalAreaInAnna').val());
            var v5 = Number($('#annaAPConsideration').val());
            if (v5 < v4) {

                $('#governmentValueOfLand').val(Number(Number($('#perAnnaAPGovRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
                $('#commercialValueOfLand').val(Number(Number($('#perAnnaAPMarketRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
                $('#fairMarketValueOfLand').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
                $('#distressValueOfLand').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));

                $('#fairMarketValueOfLandAndBuimding').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
                $('#totalDistressValueOfLandAndBuimding').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));


            } else {
                $('#governmentValueOfLand').val(Number(Number($('#perAnnaAPGovRate').val()) * Number($('#totalAreaInAnna')
                    .val())).toFixed(2));
                $('#commercialValueOfLand').val(Number(Number($('#perAnnaAPMarketRate').val()) * Number($(
                    '#totalAreaInAnna').val())).toFixed(2));
                $('#fairMarketValueOfLand').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($('#totalAreaInAnna')
                    .val())).toFixed(2));
                $('#distressValueOfLand').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($(
                    '#totalAreaInAnna').val())).toFixed(2));
                $('#fairMarketValueOfLandAndBuimding').val(Number(Number($('#perAnnaAPFairRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
                $('#totalDistressValueOfLandAndBuimding').val(Number(Number($('#perAnnaAPDistressRate').val()) * Number($(
                    '#annaAPConsideration').val())).toFixed(2));
            }
        }

        function ToTwoDecimalPlaces(input) {
            var value = Number(input);
            var splitValue = value.toString().split(".");
            if (Number(splitValue[1]) > 0) {
                return value.toFixed(2);
            } else {
                return splitValue[0];
            }
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
                "np" == e ? (ropaniText = " à¤°à¥‹à¤ªà¤¨à¥€ ", aanaText = " à¤†à¤¨à¤¾ ", paisaText = " à¤ªà¥ˆà¤¸à¤¾ ",
                    damText = " à¤¦à¤¾à¤® ", bighaText = " à¤¬à¤¿à¤—à¤¾ ", kathhaText = " à¤•à¤ à¥à¤ à¤¾ ", dhurText =
                    " à¤§à¥à¤° ", sqmtText = " à¤µà¤°à¥à¤— à¤®à¤¿à¤Ÿà¤° ", sqftText = " à¤µà¤°à¥à¤— à¤«à¤¿à¤Ÿ ") : (
                    ropaniText = " Ropani ", aanaText = " Aana ", paisaText = " Paisa ", damText = " Dam ", bighaText =
                    " Bigha ", kathhaText = " Kathha ", dhurText = " Dhur ", sqmtText = " Square Meter ", sqftText =
                    " Square Feet "),
                ropaniResult = ropaniPart + ropaniText + aanaPart + aanaText + paisaPart + paisaText + damPart.toFixed(2) +
                damText,
                bighaResult = bighaPart + bighaText + kathhaPart + kathhaText + dhurPart.toFixed(2) + dhurText,
                squareFeetResult = t.toFixed(2) + sqftText, squareMeterResult = total_sqmt.toFixed(2) + sqmtText,
                //  $("#ropaniResult").html(ropaniResult),
                //  $("#bighaResult").html(bighaResult),
                //  $("#squareFeetResult").html(squareFeetResult),
                //  $("#squareMeterResult").html(squareMeterResult)
                damPart = damPart > 1 ? damPart.toFixed(2) : 0;
            return ropaniPart + '-' + aanaPart + '-' + paisaPart + '-' + damPart;
        }

        function BindBuildingCalculation(data) {
            var obj = $.parseJSON(data);
            $("#TblBuildingCalculation > tbody").find("tr").remove();
            var TotalBuildingAreaSqF = 0,
                TotalBuildingAmount = 0,
                TotalBuildingDepriciation = 0,
                TotalFloorNetAmount = 0,
                TotalBuildingFairMarketValue = 0,
                TotalBuildingDistressValue = 0;
            $.each(obj, function(i, item) {
                TotalBuildingAreaSqF = TotalBuildingAreaSqF + Number(item.FloorAreaInSqF);
                TotalBuildingAmount = TotalBuildingAmount + Number(item.FloorAmount);
                TotalFloorNetAmount = TotalFloorNetAmount + Number(item.FloorNetAmount);
                TotalBuildingDepriciation = TotalBuildingDepriciation + Number(item.FloorDepriciationAmount);
                TotalBuildingFairMarketValue = TotalBuildingFairMarketValue + Number(item.FloorFairMarketValue);
                TotalBuildingDistressValue = TotalBuildingDistressValue + Number(item.DistressValue);
                $('#TblBuildingCalculation > tbody').append('<tr><th scope="row">' + (i + 1) + '</th><td>' + item
                    .Floor + '</td><td>' + item.FloorAreaInSqF + '</td><td>' + item.FloorRate + '</td><td>' +
                    item.FloorAmount + '</td><td>' + item.FloorAge + '</td><td>' + item
                    .FloorDepriciationPercentage + '</td><td>' + item.SanitaryPulumbingPercentage +
                    '</td><td>' + item.ElectricityWorkPercentage + '</td><td>' + item.FloorNetAmount +
                    '</td><td>' + item.FloorDepriciationAmount + '</td><td>' + item.FloorFairMarketValue +
                    '</td><td>' + item.DistressValue +
                    '</td><td><a href="#" class="btn btn-link text-danger btn-sm btneditdelete BtnRemoveBuildingCalculation" SNo="' +
                    item.SNo + '" DataSource="' + item.datasource +
                    '" tabindex="-1"><i class="far fa-trash-alt"></i> REMOVE</a></td></tr>');
            });


            $('#totalBuildingAreaSqF').text(TotalBuildingAreaSqF.toFixed(2));
            $('#totalBuildingAreaSqF').val(TotalBuildingAreaSqF.toFixed(2));
            $('#totalBuildingAmount').text(TotalBuildingAmount.toFixed(2));
            $('#totalBuildingAmount').val(TotalBuildingAmount.toFixed(2));
            $('#totalNetBuildingAmount').text(TotalFloorNetAmount.toFixed(2));
            $('#totalNetBuildingAmount').val(TotalFloorNetAmount.toFixed(2));
            $('#totalBuildingDepriciation').text(TotalBuildingDepriciation.toFixed(2));
            $('#totalBuildingDepriciation').val(TotalBuildingDepriciation.toFixed(2));
            $('#totalBuildingFairMarketValue').text(TotalBuildingFairMarketValue.toFixed(2));
            $('#totalBuildingFairMarketValue').val(TotalBuildingFairMarketValue.toFixed(2));
            $('#totalBuildingDistressValue').text(TotalBuildingDistressValue.toFixed(2));
            $('#totalBuildingDistressValue').val(TotalBuildingDistressValue.toFixed(2));
        }
    </script>

    <script>
        $(document).on('keyup', '#perAnnaAPMarketRate', function() {

            var annaCons = $('#annaAPConsideration').val();
            var govRate = $('#perAnnaAPGovRate').val();
            var marketRate = $('#perAnnaAPMarketRate').val();
            var fairMarketRate = $('#perAnnaAPFairRate').val();
            var distressLandRate = $('#perAnnaAPDistressRate').val();
            console.log(marketRate,annaCons,marketRate*annaCons);
            $('#governmentValueOfLand').val((annaCons * govRate).toFixed(2));
            $('#commercialValueOfLand').val((annaCons * marketRate).toFixed(2));
            $('#fairMarketValueOfLand').val((annaCons * fairMarketRate).toFixed(2));
            $('#distressValueOfLand').val((annaCons * distressLandRate).toFixed(2));
        })
    </script>



    <script>
        $(document).on('click', '.deleteCalculationData', function() {
            var url = $(this).data('url');
            swal({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    window.location.href = url;
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            })
        });


        $(document).on('click', '.deleteDoc', function() {
            var url = $(this).data('url');
            swal({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    window.location.href = url;
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            })
        });


    </script>
@endpush
