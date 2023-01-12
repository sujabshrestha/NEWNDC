@extends('layouts.reception.master')

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
                    <form action="{{ route('receptionist.valuation.valuationFinalSubmit', $sitevisit->id) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="color:#dc1de9;margin-bottom: 0px;">
                                        <h6><b>1 GENERAL DETAILS</b></h6>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-left:6px;padding-right:6px;">

                                <div class="form-group">
                                    <label>Valuation Id</label>
                                    <input type="text" name="valuation_id" id="valuation_id"  required="" readonly
                                        value="{{ $sitevisit->registration_id }}" class="form-control" tabindex="-1" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" readonly name="valuation_type" id="valuationType"
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
                                <select class="form-control selectbox" readonly name="bank_id" id="bankId" required=""
                                mycommercialvalue="{{ $sitevisit->bank->commercial_rate }}"  mygovernmentvalue="{{ $sitevisit->bank->governmant_rate }}" 
                                myfairmarketvalue="{{ $sitevisit->bank->fair_market_rate }}" 
                                myisfairmarketcalculationgovwise="{{ $sitevisit->bank->govt_fair_market_cal }}" myisfairmarketcalculationmarketwise="{{ $sitevisit->bank->commercial_fair_market_cal }}" 
                                myisdistresscalculationgovwise="{{ $sitevisit->bank->govt_distress_cal }}" myisdistresscalculationfairmarketwise="{{ $sitevisit->bank->fair_market_distress_cal  }}">
                                    <option disabled selected> Select Bank </option>
                                    @if (isset($banks))
                                        @foreach ($banks as $bank)
                                            <option  @if (isset($sitevisit) && $sitevisit->bank_id == $bank->id) selected @endif
                                                value="{{ $bank->id }}" mycommercialvalue="{{ $bank->commercial_rate }}" 
                                                mygovernmentvalue="{{ $bank->governmant_rate }}" myfairmarketvalue="{{ $bank->fair_market_rate }}">{{ $bank->name }} </option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="branchId">Branch <span class="text-danger">*</span></label>
                                <select class="form-control selectbox" readonly name="branch_id" id="branchId" required="">
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
                                <select name="client_id" readonly class="form-control" id="">

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
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Valuation Assignment No</label>
                                <input type="text" name="valuation_assignment_on" id="valuation_assignment_on"
                                    class="form-control" autocomplete="off" required="">
                            </div>
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Prepration Date (BS) <span class="required">*</span></label>
                                <input type="date" name="prepration_date" id="prepration_date" required=""
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group col-md-3" style="padding-left:6px;padding-right:6px;">
                                <label>Date (BS) (Ownership) <span class="required">*</span></label>
                                <input type="date" name="date_ownership" id="date_ownership" required=""
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

                            <form>
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

                            <div class="form-group col-md-12 appendLalpurja">
                                @include('Receptionist::receptionist.valuations.appendLalpurjaData')
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
                                <button type="button" class="btn btn-info"
                                    data-url="{{ route('receptionist.valuation.landBasedSubmit', $sitevisit->id) }}"
                                    id="BtnAddAreaAPMeasurement" style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12 appendLandBased">
                                @include('Receptionist::receptionist.valuations.appendLandbasedData')
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

                            {{-- <div id="BuildingArea" class="col-md-12">
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
                                    <input type="hidden" name="constructionDistressValue" id="constructionDistressValue"
                                        tabindex="-1" readonly="readonly" class="form-control" autocomplete="off">
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
                            </div> --}}

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
                                <button type="button" class="btn btn-info" data-url="{{ route('receptionist.valuation.govBoundarySubmit', $sitevisit->id) }}" id="BtnAddBoundariesAsPerKitaNo"
                                    style="padding: 2px 5px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12 appendGovBoundaries">
                                @include('Receptionist::receptionist.valuations.appendgovBoundaryData')
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


                            <input type="hidden" name="holdType" id="holdType" class="form-control" value="Free Hold"
                                autocomplete="off">
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

                                @include('Receptionist::receptionist.valuations.appendDocument')
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload CAD Jpg Doc</label>
                                <input type="file" name="UploadDocument" id="UploadDocument">
                                @include('Receptionist::receptionist.valuations.appendLegalDocument')
                            </div>

                            <div class="form-group col-md-6">
                                <label>Upload Legal Scan Doc</label>
                                <input type="file" name="UploadScanDocuments[]" multiple=""
                                    id="UploadScanDocument">
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
                                <input type="file" name="UploadInternalDocuments[]" multiple=""
                                    id="UploadInternalDocument">
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
                                <button type="submit" class="btn btn-info float-right btn-sm ml-3"
                                    id="BtnSaveValuation">Submit</button>
                                {{-- <button type="button" class="btn btn-primary float-right btn-sm"
                                    id="BtnSaveValuationAndStay">Submit &amp; Stay</button> --}}
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
            var paisa = (parseFloat(sqm_as_lalpurja) / 85.56);
            var dam = (parseFloat(sqm_as_lalpurja) / 1.99);
            var sqft = (parseFloat(sqm_as_lalpurja) / 10.7639);
            console.log(ropani + "-" + aana + "-" + paisa + "-" + dam);
            $('#ropani_as_lalpurja').val(ropani);
            $('#anna_as_lalpurja').val(aana);
            $('#paisa_as_lalpurja').val(paisa);
            $('#dam_as_lalpurja').val(dam);
            $('#rapd_as_lalpurja').val(parseInt(ropani) + "-" + parseInt(aana) + "-" + parseInt(paisa) + "-" +
                parseInt(dam));
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

        $( document ).ready(function() {
            var totalSqF = $('#totalSqF').val();
            var TotalRAPD = SqFToRAPD(totalSqF);
            $('#ltotalRAPD').text(TotalRAPD);
            $('#totalRAPD').val(TotalRAPD);


            var totalSqFAsPerCal = $('#totalSqFAsPerCal').val();
            var TotalRAPDAsPerCal = SqFToRAPD(totalSqFAsPerCal);
            $('#LblTotalAreaInRPADAsPerMeasurement').text(TotalRAPDAsPerCal);
            $('#LblTotalAreaInRPADAsPerMeasurement').val(TotalRAPDAsPerCal);
            currentevent.attr('disabled', false);

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
                        totalRAPDAsPerCal:totalRAPDAsPerCal

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


            if (boundariesKitaNo == '' || eastAPBoundaries == '' || westAPBoundaries == '' || northAPBoundaries == '' || southAPBoundaries == '') {
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
                        loader();
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
                        $.unblockUI();
                    }
                });
            }



        });
    </script>


    {{-- New Scripts --}}

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


       

        // $("#annaAPLalpurja").blur(function(){ if($(this).val()>16){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true ); return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });
        // $("#paisaAPLalpurja").blur(function(){ if($(this).val()>4){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true );  return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });
        // $("#damAPLalpurja").blur(function(){ if($(this).val()>4){ $(this).focus(); $( "#BtnAddAreaAPLalpurja" ).prop( "disabled", true ); return; } else {$( "#BtnAddAreaAPLalpurja" ).prop( "disabled", false );} });

        $("#constructionEstimateValue").keyup(function(){
        var _v3 = Number($('#bankId').attr("myfairmarketvalue"));
        //var k =Number($(this).val());
        $("#constructionDistressValue").val(Number((Number($(this).val())/100)*_v3).toFixed(2));
        $("#totalDistressValueOfBuilding").val(Number(((Number($(this).val())+Number($("#fairMarketValueOfLand").val()))/100)*_v3).toFixed(2));
        });

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

    function BindAreaAsPerCalculation(data){
      var obj = $.parseJSON(data);
      $('#areaSymbol').focus();
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

      $('#totalAreaSideA').text(TotalSideA.toFixed(2)); $('#totalAreaSideA').val(TotalSideA.toFixed(2));
      $('#totalAreaSideB').text(TotalSideB.toFixed(2)); $('#totalAreaSideB').val(TotalSideB.toFixed(2));
      $('#totalAreaSideC').text(TotalSideC.toFixed(2)); $('#totalAreaSideC').val(TotalSideC.toFixed(2));
      $('#totalAreaSideS').text(TotalSideS.toFixed(2)); $('#totalAreaSideS').val(TotalSideS.toFixed(2));
      $('#totalSqFAsPerCal').text(Number(TotalSqFAPMeasurement).toFixed(2)); $('#totalSqFAsPerCal').val(TotalSqFAPMeasurement);
      $('#totalSqMAsPerCal').text(Number(TotalSqMAPMeasurement).toFixed(2)); $('#totalSqMAsPerCal').val(TotalSqMAPMeasurement.toFixed(2));
      $('#totalAreaInAnnaAPMeasurement').text(Number(TotalAreaInAnnaAPMeasurement).toFixed(2)); $('#totalAreaInAnnaAPMeasurement').val(TotalAreaInAnnaAPMeasurement.toFixed(2));
      var TotalAreaInRPADAsPerMeasurement = SqFToRAPD(Number(TotalSqFAPMeasurement).toFixed(2));
      $('#totalAreaInRPADAsPerMeasurement').text(TotalAreaInRPADAsPerMeasurement); $('#totalAreaInRPADAsPerMeasurement').val(TotalAreaInRPADAsPerMeasurement);

      CalculateConsiderationArea();
      CalculationAreaRate();
    }

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
        $('#rAPDAPConsideration').val(TotalRAPD);
        $('#annaAPConsideration').val((Number(Val)/342.25).toFixed(2));

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
        var TotalSqF = Number($("#totalSqFAsPerCal").val());
        var _v1 =(TotalSqF/100)*LandDevelopmentPercent;
        var _v2 =(TotalSqF/100)*BoundryCorrectionPercent;
        var _v3 =(TotalSqF/100)*IrregularShapePercent;
        var Val = TotalSqF-(DeductionOfRoadSqF+DeductionForHighTensionSqF+DeductionForLowLandSqF+DeductionForRiverSqF+(_v1)+(_v2)+(_v3));
      
        $('#sqMAPConsideration').val((Number(Val)*0.092903).toFixed(2));
        $('#sqFAPConsideration').val(Number(Val).toFixed(2));
        console.log(TotalSqF,Val,DeductionOfRoadSqF);

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


    function SqFToRAPD(SqF){
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
        alert('adhkj')
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
        $(document).on('keyup','#perAnnaAPMarketRate',function(){

            var annaCons = $('#annaAPConsideration').val();
            var govRate = $('#perAnnaAPGovRate').val();
            var marketRate = $('#perAnnaAPMarketRate').val();
            var fairMarketRate = $('#perAnnaAPFairRate').val();
            var distressLandRate = $('#perAnnaAPDistressRate').val();

            $('#governmentValueOfLand').val((annaCons*govRate).toFixed(2));
            $('#commercialValueOfLand').val((annaCons*marketRate).toFixed(2));
            $('#fairMarketValueOfLand').val((annaCons*fairMarketRate).toFixed(2));
            $('#distressValueOfLand').val((annaCons*distressLandRate).toFixed(2));
        })
       
    </script>


@endpush
