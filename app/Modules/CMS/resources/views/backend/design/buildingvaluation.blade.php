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
                    <a class="btn btn-secondary float-right " href="{{ route('client.index') }}">Previous Page</a>

                </div>
                <hr>
                <div class="row">

                    <div class="form-group col-md-12 mb-2">
                        <label style="color: #dc1de9;margin-bottom: 0px;">
                            <h6><b>1 GENERAL DETAILS</b></h6>
                        </label>
                    </div>

                    <div class="form-group col-md-3 pr-0" >
                        <label>Valuation Id</label>
                        <input type="text" name="valuationId" id="valuationId" value="BV-00007" class="form-control"
                            readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 pr-0">
                        <label>Client</label>
                        <input type="text" name="clientName" id="clientName" value="Mrs. Urmila Karki"
                            class="form-control" readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 pr-0">
                        <label>Property Owner</label>
                        <input type="text" name="owmerName" id="owmerName" value="Mrs. Urmila Karki" class="form-control"
                            readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Location</label>
                        <input type="text" name="clientAddress" id="clientAddress"
                            value="Ward No:- 2, Imadol VDC (Current Ward No:- 17, Mahalaxmi Municipality)"
                            class="form-control" readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 pr-0" >
                        <label>Plot No</label>
                        <input type="text" name="plotNo" id="plotNo" value="97" class="form-control"
                            readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 pr-0" >
                        <label>Bank</label>
                        <input type="text" name="bankId" id="bankId" value="LUMBINI BIKASH BANK LTD."
                            class="form-control" readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 pr-0"   >
                        <label>Branch</label>
                        <input type="text" name="branchId" id="branchId" value="Mahalaxmisthan" class="form-control"
                            readonly="readonly" required="" tabindex="-1">
                    </div>
                    <div class="form-group col-md-3 "   >
                        <label>Prepration Date</label>
                        <input type="text" name="preprationDate" id="preprationDate" value="12/01/2079"
                            class="form-control" required="" tabindex="-1">
                    </div>
                   

                    <div id="BuildingArea" class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-12 mb-2">
                                <label style="color: #dc1de9;margin-bottom: 0px;">
                                    <h6><b>2 BUILDING CALCULATIONS</b></h6>
                                </label>
                            </div>
                            <div class="form-group row pl-3 col-12">
                                <label class="col-md-1 col-form-label my-auto">Floor</label>
                                <select class="col-md-3 form-control selectbox" name="floor" id="floor">
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
                                <button type="button" class="col-md-1 btn btn-info ml-2 my-auto BtnAddBuildingValuation"
                                    style="padding: 2px 5px;max-height: 28px;margin-left: 0px;">ADD</button>
                            </div>
                            <div class="form-group col-md-12">
                                <table class="table table-bordered dataTable" id="TblBuildingValuation"
                                    style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" width="30">Sno</th>
                                            <th scope="col">Description</th>
                                            <th scope="col" width="120">Area (/SqF)</th>
                                            <th scope="col" width="80">Rate</th>
                                            <th scope="col" width="120">Total Amount</th>
                                            <th scope="col" width="100">Finished Sq.Ft</th>
                                            <th scope="col" width="100">% of work completed</th>
                                            <th scope="col" width="40">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-secondary">
                                            <td scope="row"></td>
                                            <td><b>Ground Floor</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#" class="btn btn-link text-danger btn-sm removerow"
                                                    valuationid="BV-00007" sno="3" tabindex="-1"
                                                    style="font-size: 0.6rem;"><i class="far fa-trash-alt"></i> REMOVE</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>DPC Level</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFOne" id="txtAreaSQFOne_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="700.00" autocomplete="off"
                                                    name="txtAreaRateOne" id="txtAreaRateOne_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="536956.00"
                                                    autocomplete="off" name="txtTotalAmtOne"
                                                    id="txtTotalAmtOne_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="700.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFOne" id="txtFinishedAreaSQFOne_GroundFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="100.00" autocomplete="off"
                                                    name="txtRemainingOne" id="txtRemainingOne_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">2</td>
                                            <td>DPC+RCC Frame Structure(Column+Beam+Slab) Only</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFTwo" id="txtAreaSQFTwo_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="600.00" autocomplete="off"
                                                    name="txtAreaRateTwo" id="txtAreaRateTwo_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="460248.00"
                                                    autocomplete="off" name="txtTotalAmtTwo"
                                                    id="txtTotalAmtTwo_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="400.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFTwo" id="txtFinishedAreaSQFTwo_GroundFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="66.67" autocomplete="off"
                                                    name="txtRemainingTwo" id="txtRemainingTwo_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">3</td>
                                            <td>DPC+RCC Column(Without Beam&amp;Slab)+Brick Wall+Door &amp; Window Chaukath
                                                (Without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFThree" id="txtAreaSQFThree_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateThree" id="txtAreaRateThree_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="383540.00"
                                                    autocomplete="off" name="txtTotalAmtThree"
                                                    id="txtTotalAmtThree_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFThree"
                                                    id="txtFinishedAreaSQFThree_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingThree" id="txtRemainingThree_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">4</td>
                                            <td>DPC+RCC Frame Structure(Column+Beam+Slab)+Brick Wall+Door &amp; Window
                                                Chaukath (Without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFFour" id="txtAreaSQFFour_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateFour" id="txtAreaRateFour_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="383540.00"
                                                    autocomplete="off" name="txtTotalAmtFour"
                                                    id="txtTotalAmtFour_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFour" id="txtFinishedAreaSQFFour_GroundFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFour" id="txtRemainingFour_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Finished upto ground floor(including plaster,cement,paint,electrical and
                                                sanitory fittings). (Moderate Type)</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFFive" id="txtAreaSQFFive_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateFive" id="txtAreaRateFive_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="383540.00"
                                                    autocomplete="off" name="txtTotalAmtFive"
                                                    id="txtTotalAmtFive_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFive" id="txtFinishedAreaSQFFive_GroundFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFive" id="txtRemainingFive_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">6</td>
                                            <td>Finished upto ground floor(including
                                                marble,procelain,tiles,plaster,with distemper inside and apex weather
                                                coat paint outside, electrical and sanitory fittings). (Well Finished)</td>
                                            <td class="ptwopx"><input type="text" value="767.08" autocomplete="off"
                                                    name="txtAreaSQFSix" id="txtAreaSQFSix_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="400.00" autocomplete="off"
                                                    name="txtAreaRateSix" id="txtAreaRateSix_GroundFloor"></td>
                                            <td class="ptwopx"><input type="text" value="306832.00"
                                                    autocomplete="off" name="txtTotalAmtSix"
                                                    id="txtTotalAmtSix_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFSix" id="txtFinishedAreaSQFSix_GroundFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingSix" id="txtRemainingSix_GroundFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td scope="row"></td>
                                            <td><b>Total Cost Of Ground Floor</b></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaSQF"
                                                    id="txtTotalAreaSQF_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="767.08"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaRate"
                                                    id="txtTotalAreaRate_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="3200.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalTotalAmt"
                                                    id="txtTotalTotalAmt_GroundFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="2454656.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalFinishedAreaSQF"
                                                    id="txtTotalFinishedAreaSQF_GroundFloor" readonly="readonly"
                                                    tabindex="-1" class="redonlytxtbox" value="1100.00"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td scope="row"></td>
                                            <td><b>First Floor</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#" class="btn btn-link text-danger btn-sm removerow"
                                                    valuationid="BV-00007" sno="4" tabindex="-1"
                                                    style="font-size: 0.6rem;"><i class="far fa-trash-alt"></i> REMOVE</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>RCC Frame Structure(Column+Beam+Slab) only</td>
                                            <td class="ptwopx"><input type="text" value="876.66" autocomplete="off"
                                                    name="txtAreaSQFOne" id="txtAreaSQFOne_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="800.00" autocomplete="off"
                                                    name="txtAreaRateOne" id="txtAreaRateOne_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="701328.00"
                                                    autocomplete="off" name="txtTotalAmtOne"
                                                    id="txtTotalAmtOne_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFOne" id="txtFinishedAreaSQFOne_FirstFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingOne" id="txtRemainingOne_FirstFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">2</td>
                                            <td>RCC Column(Without Beam&amp;Slab)+Brick Wall+Door &amp; Window
                                                Chaukath(without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="876.66" autocomplete="off"
                                                    name="txtAreaSQFTwo" id="txtAreaSQFTwo_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="700.00" autocomplete="off"
                                                    name="txtAreaRateTwo" id="txtAreaRateTwo_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="613662.00"
                                                    autocomplete="off" name="txtTotalAmtTwo"
                                                    id="txtTotalAmtTwo_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFTwo" id="txtFinishedAreaSQFTwo_FirstFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingTwo" id="txtRemainingTwo_FirstFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">3</td>
                                            <td>RCC Frame Structure(Column+Beam+Slab)+Brick Wall+Door &amp; Window
                                                Chaukath(without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="876.66" autocomplete="off"
                                                    name="txtAreaSQFThree" id="txtAreaSQFThree_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="600.00" autocomplete="off"
                                                    name="txtAreaRateThree" id="txtAreaRateThree_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="525996.00"
                                                    autocomplete="off" name="txtTotalAmtThree"
                                                    id="txtTotalAmtThree_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFThree"
                                                    id="txtFinishedAreaSQFThree_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingThree" id="txtRemainingThree_FirstFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">4</td>
                                            <td>Finished first floor or above (including plaster,cement paint,electricity
                                                and sanitary fitting).(Moderate Type)</td>
                                            <td class="ptwopx"><input type="text" value="876.66" autocomplete="off"
                                                    name="txtAreaSQFFour" id="txtAreaSQFFour_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateFour" id="txtAreaRateFour_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="438330.00"
                                                    autocomplete="off" name="txtTotalAmtFour"
                                                    id="txtTotalAmtFour_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFour" id="txtFinishedAreaSQFFour_FirstFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFour" id="txtRemainingFour_FirstFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Finished first floor or above (including marble,porcelain tiles
                                                paint ,plaster with distemper inside and apex weather coat
                                                outside,electrical and sanitary fitting).(well finished)</td>
                                            <td class="ptwopx"><input type="text" value="876.66" autocomplete="off"
                                                    name="txtAreaSQFFive" id="txtAreaSQFFive_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateFive" id="txtAreaRateFive_FirstFloor"></td>
                                            <td class="ptwopx"><input type="text" value="438330.00"
                                                    autocomplete="off" name="txtTotalAmtFive"
                                                    id="txtTotalAmtFive_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFive" id="txtFinishedAreaSQFFive_FirstFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFive" id="txtRemainingFive_FirstFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td scope="row"></td>
                                            <td><b>Total Cost Of First Floor</b></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaSQF"
                                                    id="txtTotalAreaSQF_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="876.66"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaRate"
                                                    id="txtTotalAreaRate_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="3100.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalTotalAmt"
                                                    id="txtTotalTotalAmt_FirstFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="2717646.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalFinishedAreaSQF"
                                                    id="txtTotalFinishedAreaSQF_FirstFloor" readonly="readonly"
                                                    tabindex="-1" class="redonlytxtbox" value="0.00"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td scope="row"></td>
                                            <td><b>Top Floor</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#" class="btn btn-link text-danger btn-sm removerow"
                                                    valuationid="BV-00007" sno="11" tabindex="-1"
                                                    style="font-size: 0.6rem;"><i class="far fa-trash-alt"></i> REMOVE</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>RCC Frame Structure(Column+Beam+Slab) only</td>
                                            <td class="ptwopx"><input type="text" value="101.51" autocomplete="off"
                                                    name="txtAreaSQFOne" id="txtAreaSQFOne_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="800.00" autocomplete="off"
                                                    name="txtAreaRateOne" id="txtAreaRateOne_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="81208.00" autocomplete="off"
                                                    name="txtTotalAmtOne" id="txtTotalAmtOne_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFOne" id="txtFinishedAreaSQFOne_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingOne" id="txtRemainingOne_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">2</td>
                                            <td>RCC Column(Without Beam&amp;Slab)+Brick Wall+Door &amp; Window
                                                Chaukath(without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="101.51" autocomplete="off"
                                                    name="txtAreaSQFTwo" id="txtAreaSQFTwo_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="700.00" autocomplete="off"
                                                    name="txtAreaRateTwo" id="txtAreaRateTwo_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="71057.00" autocomplete="off"
                                                    name="txtTotalAmtTwo" id="txtTotalAmtTwo_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFTwo" id="txtFinishedAreaSQFTwo_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingTwo" id="txtRemainingTwo_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">3</td>
                                            <td>RCC Frame Structure(Column+Beam+Slab)+Brick Wall+Door &amp; Window
                                                Chaukath(without Shutter)</td>
                                            <td class="ptwopx"><input type="text" value="101.51" autocomplete="off"
                                                    name="txtAreaSQFThree" id="txtAreaSQFThree_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="600.00" autocomplete="off"
                                                    name="txtAreaRateThree" id="txtAreaRateThree_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="60906.00" autocomplete="off"
                                                    name="txtTotalAmtThree" id="txtTotalAmtThree_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFThree" id="txtFinishedAreaSQFThree_TopFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingThree" id="txtRemainingThree_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">4</td>
                                            <td>Finished first floor or above (including plaster,cement paint,electricity
                                                and sanitary fitting).(Moderate Type)</td>
                                            <td class="ptwopx"><input type="text" value="101.51" autocomplete="off"
                                                    name="txtAreaSQFFour" id="txtAreaSQFFour_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="500.00" autocomplete="off"
                                                    name="txtAreaRateFour" id="txtAreaRateFour_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="50755.00" autocomplete="off"
                                                    name="txtTotalAmtFour" id="txtTotalAmtFour_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFour" id="txtFinishedAreaSQFFour_TopFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFour" id="txtRemainingFour_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Finished first floor or above (including marble,porcelain tiles
                                                paint ,plaster with distemper inside and apex weather coat
                                                outside,electrical and sanitary fitting).(well finished)</td>
                                            <td class="ptwopx"><input type="text" value="101.51" autocomplete="off"
                                                    name="txtAreaSQFFive" id="txtAreaSQFFive_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="400.00" autocomplete="off"
                                                    name="txtAreaRateFive" id="txtAreaRateFive_TopFloor"></td>
                                            <td class="ptwopx"><input type="text" value="40604.00" autocomplete="off"
                                                    name="txtTotalAmtFive" id="txtTotalAmtFive_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtFinishedAreaSQFFive" id="txtFinishedAreaSQFFive_TopFloor">
                                            </td>
                                            <td class="ptwopx"><input type="text" value="0.00" autocomplete="off"
                                                    name="txtRemainingFive" id="txtRemainingFive_TopFloor"
                                                    readonly="readonly" tabindex="-1" class="redonlytxtbox"></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td scope="row"></td>
                                            <td><b>Total Cost Of Top Floor</b></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaSQF"
                                                    id="txtTotalAreaSQF_TopFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="101.51"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalAreaRate"
                                                    id="txtTotalAreaRate_TopFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="3000.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalTotalAmt"
                                                    id="txtTotalTotalAmt_TopFloor" readonly="readonly" tabindex="-1"
                                                    class="redonlytxtbox" value="304530.00"></td>
                                            <td class="ptwopx"><input type="text" name="txtTotalFinishedAreaSQF"
                                                    id="txtTotalFinishedAreaSQF_TopFloor" readonly="readonly"
                                                    tabindex="-1" class="redonlytxtbox" value="0.00"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="form-group col-md-2 pr-1">
                                <label>Total Cost of The Building</label>
                                <input type="text" name="constructionEstimateValue" id="constructionEstimateValue"
                                    class="form-control" readonly="readonly" tabindex="-1" value="5476832.00">
                            </div>
                            <div class="form-group col-md-4 pr-1" >
                                <label>Water &amp; Sanitary work @ 10% of Total Cost(Hot &amp; Cold Water)</label>
                                <input type="text" value="547683.20" name="waterSanitaryWork" id="waterSanitaryWork"
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-3 pr-1">
                                <label>Electricity Work @ 8 % of Total Cost</label>
                                <input type="text" value="438146.56" name="electricityWork" id="electricityWork"
                                    class="form-control" readonly="readonly" tabindex="-1">
                            </div>
                            <div class="form-group col-md-3" >
                                <label>Net Total Cost of The Building</label>
                                <input type="text" name="netTotalCostOfTheBuilding" id="netTotalCostOfTheBuilding"
                                    class="form-control" readonly="readonly" tabindex="-1" value="6462661.76">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mb-2">
                        <label style="color: #dc1de9;margin-bottom: 0px;">
                            <h6><b>3 UPLOAD DOCUMENT</b></h6>
                        </label>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Upload Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                        <input type="file" name="UploadPicture" id="UploadPicture">
                        <table class="table table-bordered dataTable" style="width:100%" id="TblUploadPicture">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width="20">Sno</th>
                                    <th scope="col">File Name <a href="#" class="text-danger"
                                            data-toggle="modal" data-target="#ViewAllPictureModal"> View</a></th>
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
                        <table class="table table-bordered dataTable" style="width:100%" id="TblUploadDocument">
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
                        <table class="table table-bordered dataTable" style="width:100%" id="TblUploadScanDocument">
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
                        <table class="table table-bordered dataTable" style="width:100%" id="TblUploadInternalDocument">
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
                        <button type="button" class="btn btn-primary float-right btn-sm"
                            id="BtnSaveBuildingValuationAndStay">Submit &amp; Stay</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
