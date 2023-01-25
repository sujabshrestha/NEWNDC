<?php

namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BuildingCalculation;
use App\Models\LalpurjaCalculation;
use App\Models\LandbasedCalculation;
use App\Models\Patra;
use App\Models\PermanetBoundariesAsPerGovt;
use App\Models\PermanetBoundariesAsPerSiteVisit;
use App\Models\SitevisitBoundary;
use App\Models\ValuationDetails;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Client\Models\Client;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Engineer\Models\SiteVisit;
use Files\Repositories\FileInterface;
use User\Models\User;
use Yajra\DataTables\Facades\DataTables;

class ReceptionistValuationController extends Controller
{

    protected $file, $response;
    public function __construct(FileInterface $file, ResponseService $response)
    {
        $this->file = $file;
        $this->response = $response;
    }

    public function valuations(Request $request)
    {
        // try{


        if ($request->ajax()) {

            $datas = SiteVisit::with(['branch', 'bank', 'client', 'proposal'])->latest();

            // dd($request->all());

            return DataTables::of($datas)
                ->addIndexColumn()
                ->editColumn('branch', function ($row) {
                    return $row->branch->title ?? 'N/A';
                })
                ->editColumn('bank_name', function ($row) {
                    return $row->bank->name;
                })
                ->editColumn('client_name', function ($row) {
                    return $row->client->client_name;
                })
                ->editColumn('valuation_status', function ($row) {
                    $main = '<select name="valuation_status" class="form-control valuationStatus" data-id=' . $row->id . '>';
                    $preSelected = '<option value="Pre-Valuation" selected>Pre-Valuation</option> <option value="Final-Valuation">Final-Valuation</option> <option value="Cancel-Valuation">Cancel-Valuation</option></select>';
                    $finalSelected = '<option value="Pre-Valuation">Pre-Valuation</option>  <option value="Final-Valuation" selected>Final-Valuation</option> <option value="Cancel-Valuation">Cancel-Valuation</option></select>';
                    $cancelSelected = '<option value="Pre-Valuation">Pre-Valuation</option> <option value="Final-Valuation">Final-Valuation</option><option value="Cancel-Valuation" selected>Cancel-Valuation</option></select>';

                    if ($row->valuation_status == "Pre-Valuation") {
                        return $main . $preSelected;
                    } elseif ($row->valuation_status == "Final-Valuation") {
                        return $main . $finalSelected;
                    } elseif ($row->valuation_status == "Cancel-Valuation") {
                        return $main . $cancelSelected;
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->filterValuation && $request->filterValuation != null && !empty($request->filterValuation)) {
                        if ($request->filterValuation == "latest-Valuation") {
                            $instance->latest();
                        } else {
                            $instance->where('valuation_status', $request->filterValuation);
                        }
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <div class="action-dropdown custom-dropdown-icon">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#actionButon" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu" id="actionButton" aria-labelledby="dropdownMenuLink-2" style="will-change: transform; min-width:6rem !important;">
                                <a class="dropdown-item" href="'. route('receptionist.valuation.edit', $row->id) .'"><span class="text-primary">Edit</span></a>
                                <a class="dropdown-item deleteClient" href="javascript:void(0);" data-id="#"><span class="text-danger">Delete</span></a>
                                <hr class="m-0 border-secondary">
                                <a class="dropdown-item" target="_blank" href="'. route('receptionist.valuation.prevaluationReport',$row->id).'"><span class="text-info">Pre Valuation Report</span></a>
                                <a class="dropdown-item" target="_blank" href="'. route('receptionist.valuation.finalvaluationReport',$row->id).'"><span class="text-secondary">Final Valuation Report</span></a>

                            </div>
                        </div>
                    </div>';                                   
                    return $actionBtn;
                })
                ->rawColumns(['action', 'valuation_status'])
                ->make(true);
        }
        $finalvaluationCount = SiteVisit::finalValuation()->count();
        $prevaluationCount = SiteVisit::preValuation()->count();
        $cancelvaluationCount = SiteVisit::cancelValuation()->count();
        return view('Receptionist::receptionist.valuations.index', compact('prevaluationCount', 'finalvaluationCount', 'cancelvaluationCount'));
        // }catch(\Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function prevaluationReport($sitevisit_id){
        try{
            $sitevisit = SiteVisit::where('id',$sitevisit_id)
                        ->with('bank','branch','client.owner','valuationDetails')
                        ->first();
            
            return view('Receptionist::receptionist.prevaluationReports.reportForAll',compact('sitevisit'));
            // return view('Receptionist::receptionist.prevaluationReports.reportForNIC',compact('sitevisit'));
            // return view('Receptionist::receptionist.prevaluationReports.reportForSBI',compact('sitevisit'));
            // return view('Receptionist::receptionist.prevaluationReports.reportForPrabhu',compact('sitevisit'));

        } catch (\Exception $e) {
                Toastr::error($e->getMessage());
                return redirect()->back();
        }
    }

    public function finalvaluationReport($sitevisit_id){
        try{
            $sitevisit = SiteVisit::where('id',$sitevisit_id)
                        ->with('bank','branch','client.owner','valuationDetails')
                        ->first();
            
            // return view('Receptionist::receptionist.finalvaluationReports.reportForAll',compact('sitevisit'));
            return view('Receptionist::receptionist.finalvaluationReports.reportForNIC',compact('sitevisit'));
            // return view('Receptionist::receptionist.finalvaluationReports.reportForPrabhu',compact('sitevisit'));

        } catch (\Exception $e) {
                Toastr::error($e->getMessage());
                return redirect()->back();
        }
    }


    public function edit($id)
    {
        try {

            $branches = Branch::all();
            $clients = Client::all();
            $banks = Bank::all();
            $patras = Patra::all();

            $siteengineers = User::role('engineer')->get();
            $sitevisit = SiteVisit::where('id', $id)->with([
                'branch','bank', 'client', 'proposal', 'lalpurjaDatas', 'documents','deduction',
                 'legaldocuments', 'legalscandocuments', 'internalcaddocuments','valuationDetails',
                 'rateofland'
            ])->first();

            return view('Receptionist::receptionist.valuations.edit', compact(
                'sitevisit',
                'banks',
                'branches',
                'clients',
                'siteengineers',
                'patras'
            ));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update()
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function lalpurjaSubmit(Request $request, $id)
    {
        $sitevisit = SiteVisit::where('id', $id)->with('lalpurjaDatas')->first();
        if ($sitevisit) {
            $lalpurja = new LalpurjaCalculation();
            $lalpurja->site_visit_id = $sitevisit->id;
            $lalpurja->sheet_no = $request->sheetno;
            $lalpurja->kita_no = $request->kitano;
            $lalpurja->ropani_as_lalpurja = $request->ropani;
            $lalpurja->anna_as_lalpurja = $request->aana;
            $lalpurja->paisa_as_lalpurja = $request->paisa;
            $lalpurja->dam_as_lalpurja = $request->dam;
            $lalpurja->sqm_as_lalpurja = $request->sqm;
            $lalpurja->area_in_anna_as_lalpurja = $request->area;
            $lalpurja->sqf_as_lalpurja = $request->sqf;
            $lalpurja->rapd_as_lalpurja = $request->rapd;
            if ($lalpurja->save()) {
                $sitevisit->refresh();
                $data = [
                    'view' => view('Receptionist::receptionist.valuations.appendLalpurjaData', compact('sitevisit'))->render()
                ];
                return $this->response->responseSuccess($data, "SUccessfully Submitted", 200);
            }
        }
        // dd($request->all());


        try {
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }


    public function landBasedSubmit(Request $request, $id)
    {
        $sitevisit = SiteVisit::where('id', $id)->with('landbasedDatas')->first();
        if ($sitevisit) {
            $landbased = new LandbasedCalculation();
            $landbased->areaSymbol = $request->areaSymbol;
            $landbased->sideA = $request->sideA;
            $landbased->sideB = $request->sideB;
            $landbased->sideC = $request->sideC;
            $landbased->sideS = $request->sideS;
            $landbased->sqFAPMeasurement = $request->sqFAPMeasurement;
            $landbased->sqMAPMeasurement = $request->sqMAPMeasurement;
            $landbased->areaInAnnaAPMeasurement = $request->areaInAnnaAPMeasurement;
            $landbased->site_visit_id = $sitevisit->id;
            $landbased->total_rapd_as_cal = $request->totalRAPDAsPerCal;

            if ($landbased->save()) {
                $sitevisit->refresh();
                $data = [
                    'view' => view('Receptionist::receptionist.valuations.appendLandbasedData', compact('sitevisit'))->render()
                ];
                return $this->response->responseSuccess($data, "SUccessfully Submitted", 200);
            }
        }
        // dd($request->all());


        try {
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function buildingValautionSubmit(Request $request, $id)
    {
        $sitevisit = SiteVisit::where('id', $id)->with('landbasedDatas')->first();
        if ($sitevisit) {
            $building = new BuildingCalculation();
            $building->floor = $request->floor;
            $building->buildingarea_sqm = $request->floorAreaInSqF;
            $building->building_age = $request->floorAge;
            $building->building_depreciation_percentage = $request->floorDepriciationPercentage;
            $building->building_sanitary_plumbing_percentage = $request->sanitaryPulumbingPercentage;
            $building->building_electric_work_percentage = $request->electricityWorkPercentage;
            $building->building_amount = $request->floorAmount;
            $building->building_totalamount = $request->floorNetAmount;
            $building->building_rate = $request->floorRate;
            //Need To change
            $building->deprication_amt = $request->floorNetAmount;
            $building->fair_market_val = $request->floorNetAmount;
            $building->distress_val = $request->floorNetAmount;
            $building->site_visit_id = $sitevisit->id;
          
            if ($building->save()) {
                $sitevisit->refresh();
                $data = [
                    'view' => view('Receptionist::receptionist.valuations.appendBuildingValuationTable', compact('sitevisit'))->render()
                ];
                return $this->response->responseSuccess($data, "Successfully Submitted", 200);
            }
        }
        // dd($request->all());


        try {
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function deletebuildingValaution($id)
    {
        try {
            $building = BuildingCalculation::where('id',$id)->first();

            if($building){
                if ($building->delete()) {
                    Toastr::success('Successfully Deleted');
                    return redirect()->back();
                }
            }else{
                Toastr::error('Building Valuation Not Found.');
                return redirect()->back();
               
            }
            // Ajax
            // if($building){
            //     if ($building->delete()) {
            //         $sitevisit->refresh();
            //         $data = [
            //             'view' => view('Receptionist::receptionist.valuations.appendBuildingValuationTable', compact('sitevisit'))->render()
            //         ];
            //         return $this->response->responseSuccess($data, "Successfully Submitted", 200);
            //     }
            // }else{
            //     return $this->response->responseError("Building Valuation Not Found.", 404);
            // }
          
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }



    public function govBoundarySubmit(Request $request, $id)
    {
         // try {
        $sitevisit = SiteVisit::where('id', $id)->with('govBoundaries')->first();
        if ($sitevisit) {
            $govBoundary = new PermanetBoundariesAsPerGovt();
            $govBoundary->kita_no = $request->boundariesKitaNo;
            $govBoundary->east = $request->eastAPBoundaries;
            $govBoundary->west = $request->westAPBoundaries;
            $govBoundary->north = $request->northAPBoundaries;
            $govBoundary->south = $request->southAPBoundaries;
            $govBoundary->sitevisit_id = $sitevisit->id;


            if ($govBoundary->save()) {
                $sitevisit->refresh();
                $data = [
                    'view' => view('Receptionist::receptionist.valuations.appendgovBoundaryData', compact('sitevisit'))->render()
                ];
                return $this->response->responseSuccess($data, "SUccessfully Submitted", 200);
            }
        }

        // } catch (\Exception $e) {
        //     return $this->response->responseError($e->getMessage());
        // }
    }



    public function sitevisitBoundarySubmit(Request $request, $id)
    {
         // try {
        $sitevisit = SiteVisit::where('id', $id)->with('govBoundaries')->first();
        if ($sitevisit) {
            $sitevisitBoundary = new SitevisitBoundary();
            $sitevisitBoundary->kita_no = $request->aPSiteVisitBoundariesKitaNo;
            $sitevisitBoundary->east = $request->eastAPSiteVisitBoundaries;
            $sitevisitBoundary->west = $request->westAPSiteVisitBoundaries;
            $sitevisitBoundary->north = $request->northAPSiteVisitBoundaries;
            $sitevisitBoundary->south = $request->southAPSiteVisitBoundaries;
            $sitevisitBoundary->valuation_details_id = $sitevisit->id;


            if ($sitevisitBoundary->save()) {
                $sitevisit->refresh();
                $data = [
                    'view' => view('Receptionist::receptionist.valuations.appendsitevisitBoundaryData', compact('sitevisit'))->render()
                ];
                return $this->response->responseSuccess($data, "SUccessfully Submitted", 200);
            }
        }

        // } catch (\Exception $e) {
        //     return $this->response->responseError($e->getMessage());
        // }
    }



    public function valuationFinalSubmit(Request $request, $id)
    {
        // try {
            // dd($request->all());

            $sitevisit = SiteVisit::where('id', $id)->with('deduction', 'rateofland')->first();

            if ($sitevisit) {

                $sitevisit->valuation_assignment_no = $request->valuation_assignment_on;
                $sitevisit->preparation_date = Carbon::parse($request->prepration_date);
                $sitevisit->ownership_date = Carbon::parse($request->date_ownership);

                // Building Calculation
                $sitevisit->construction_estimate_value = $request->constructionEstimateValue;
                $sitevisit->contruction_approval_date = $request->buildingConstructionApprovalDate;
                $sitevisit->area_as_per_construction = $request->totalAreaAsPerConstruction;
                $sitevisit->year_construction_complite = $request->yearOfConstructionComplite;

                $sitevisit->deduction()->updateOrCreate([
                    'id' => $sitevisit->deduction->id ?? null
                ],
                [
                    'deductionOfRoadSqF' => $request->deductionOfRoadSqF,
                    'landDevelopmentPercent' => $request->landDevelopmentPercent,
                    // 'landDevelopmentPercent' => $request->landDevelopmentPercent,
                    'deductionForHighTensionSqF'=> $request->deductionForHighTensionSqF,
                    'deductionForLowLandSqF'=> $request->deductionForLowLandSqF,
                    'deductionForRiverSqF'=> $request->deductionForRiverSqF,
                    'deductionForBoundryCorrection'=> $request->deductionForBoundryCorrection,
                    'deductionForIrregularShapeSloppyLand'=> $request->deductionForIrregularShapeSloppyLand,
                    'sqMAPConsideration'=> $request->sqMAPConsideration,
                    'rAPDAPConsideration'=> $request->rAPDAPConsideration,
                    'sqFAPConsideration'=> $request->sqFAPConsideration,
                    'annaAPConsideration'=> $request->annaAPConsideration,

                    'total_rapd_as_road' => $request->afterDeductionOfRoadAreaInRPAD,
                    'total_sqm_as_road' =>number_format(.092903 * $request->deductionOfRoadSqF,2),
                    'total_anna_as_road' => $request->afterDeductionOfRoadAreaInAnna,
                    
                    'total_rapd_as_land_development' => $request->afterLandDevelopmentAreaInRPAD,
                    'total_sqm_as_land_development' =>number_format(.092903 * $request->landDevelopmentSqF,2),
                    'total_sqf_as_land_development' => $request->landDevelopmentSqF,
                    'total_anna_as_land_development' => $request->afterLandDevelopmentAreaInAnna,
            
                    'total_rapd_as_high_tension_deduction' => $request->afterHighTensionAreaInRPAD,
                    'total_sqm_as_high_tension_deduction' =>number_format(.092903 * $request->deductionForHighTensionSqF,2),
                    'total_anna_as_high_tension_deduction' => $request->afterHighTensionAreaInAnna,
            
                    'total_rapd_as_low_land_deduction' => $request->afterLowLandAreaInRPAD,
                    'total_sqm_as_low_land_deduction' =>number_format(.092903 * $request->deductionForLowLandSqF,2),
                    'total_anna_as_low_land_deduction' => $request->afterLowLandAreaInAnna,
                    
                    'total_rapd_as_river_deduction' => $request->afterRiverAreaInRPAD,
                    'total_sqm_as_river_deduction' => number_format(.092903 * $request->deductionForRiverSqF,2),
                    'total_anna_as_river_deduction' => $request->afterRiverAreaInAnna,
            
                    'total_rapd_as_boundry_correction_deduction' => $request->afterBoundryCorrectionAreaInRPAD,
                    'total_sqm_as_boundry_correction_deduction' =>number_format(.092903 * $request->deductionForBoundryCorrectionSqF,2),
                    'total_sqf_as_boundry_correction_deduction' => $request->deductionForBoundryCorrectionSqF,
                    'total_anna_as_boundry_correction_deduction' => $request->afterBoundryCorrectionAreaInAnna,
            
                    'total_rapd_as_irregular_shape_deduction' => $request->afterIrregularShapeSloppyLandAreaInRPAD,
                    'total_sqm_as_irregular_shape_deduction' =>number_format(.092903 * $request->afterIrregularShapeSloppyLandSqF,2),
                    'total_sqf_as_irregular_shape_deduction' => $request->afterIrregularShapeSloppyLandSqF,
                    'total_anna_as_irregular_shape_deduction' => $request->afterIrregularShapeSloppyLandAreaInAnna,
                ]);


                $sitevisit->rateofland()->updateOrCreate([
                    'id' => $sitevisit->rateofland->id ?? null
                ],
                [
                    'perSqFAPGovRate' => $request->perSqFAPGovRate,
                    'govPage'=> $request->govPage,
                    'perAnnaAPGovRate'=> $request->perAnnaAPGovRate,
                    'perRopaniAPGovRate'=> $request->perRopaniAPGovRate,
                    'perSqFAPMarketRate'=> $request->perSqFAPMarketRate,
                    'perAnnaAPMarketRate'=> $request->perAnnaAPMarketRate,
                    'perRopaniAPMarketRate'=> $request->perRopaniAPMarketRate,
                    'perSqFAPFairRate'=> $request->perSqFAPFairRate,
                    'perAnnaAPFairRate'=> $request->perAnnaAPFairRate,
                    'perRopaniAPFairRate'=> $request->perRopaniAPFairRate,
                    'perSqFAPDistressRate'=> $request->perSqFAPDistressRate,
                    'perAnnaAPDistressRate'=> $request->perAnnaAPDistressRate,
                    'governmentValueOfLand'=> $request->governmentValueOfLand,
                    'commercialValueOfLand'=> $request->commercialValueOfLand,
                    'fairMarketValueOfLand'=> $request->fairMarketValueOfLand,
                    'distressValueOfLand'=> $request->distressValueOfLand,
                    'fairMarketValueOfLandAndBuilding'=> $request->fairMarketValueOfLandAndBuilding,
                    'totalDistressValueOfLandAndBuimding'=> $request->totalDistressValueOfLandAndBuimding,
                ]);

                $valuationDetails = ValuationDetails::updateOrCreate(
                    [
                        'site_visit_id' => $sitevisit->id
                    ],
                    [
                        'road_size' => $request->accessibilityWithRoadSize,
                        'river' => $request->accessibilityWithRiver,
                        'hightension_line' => $request->accessibilityWithHighTension,
                        'type_of_region' => $request->typeOfRegion,
                        'motorable_access' => $request->motorableAccess,
                        'property_usage' => $request->propertyUsage,
                        'type_of_access' => $request->typeOfAccess,
                        'shape' => $request->buildingShape,
                        'facing' => $request->buildingFacing,
                        'frontage' => $request->buildingFrontage,
                        'level_with_road' => $request->levelWithRoad,
                        'property_fot_the_bank' => $request->propertyForTheBank,
                        'river_near_by' => $request->riverStreamNearProperty,
                        'heritage_sites_near_by' => $request->heritageSitesNearProperty,
                        'property_ownership_type' => $request->propertyOwnershipType,
                        'narrowest_part_of_land' => $request->narrowestPartOfLand,
                        'access_in_the_blue_print' => $request->accessInTheBluePrint,
                        'right_of_way' => $request->rightOfWay,
                        'comments' => $request->coments,
                        'frame_structure' => $request->frameStructure,
                        'any_collateral_fall' => $request->anyCollateralFall,
                        'valuation_for' => $request->valuationFor,
                        'coloring' => $request->coloringAndPainting,
                        'florring_finishing' => $request->flooringFinishing,
                        'inner_wall_ceiling' => $request->innerWallCeiling,
                        'boundary' => $request->boundary,
                        'no_of_floors' => $request->noOfFloorStorie,
                        'type_of_land' => $request->topography,
                        'compound_wall' => $request->compoundWall,
                        'internal_remarks' => $request->internalRemarks,
                    
                        'location_of_land' => $request->locationOfAccessLand,
                        'district' => $request->locationDistrict,
                        'vdc_municipality' => $request->vdcType,
                        'address_of_land' => $request->addressOfLand,

                        'total_rapd_as_lalpurja' => $request->totalRAPD,
                        'total_sqm_as_lalpurja' => $request->totalSqM,
                        'total_sqf_as_lalpurja' => $request->totalSqF,
                        'total_anna_as_lalpurja' => $request->totalAreaInAnna,
                        
                        'total_rapd_as_measurement' => $request->totalAreaInRPADAsPerMeasurement,
                        'total_sqm_as_measurement' => $request->totalSqMAsPerCal,
                        'total_sqf_as_measurement' => $request->totalSqFAsPerCal,
                        'total_anna_as_measurement' => $request->totalAreaInAnnaAPMeasurement,

                        'totalBuildingAreaSqF' => $request->totalBuildingAreaSqF,
                        'totalBuildingAmount' => $request->totalBuildingAmount,
                        'totalNetBuildingAmount' => $request->totalNetBuildingAmount,
                        'totalBuildingDepriciation' => $request->totalBuildingDepriciation,
                        'totalBuildingFairMarketValue' => $request->totalBuildingFairMarketValue,
                        'totalBuildingDistressValue' => $request->totalBuildingDistressValue,

                    ]);




                if ($request->patra) {
                    $sitevisit->patras()->attach($request->patra);
                }
                if ($sitevisit->update()) {
                    if ($request->UploadScanDocuments) {
                        foreach ($request->UploadScanDocuments as $scandoc) {
                            $uploaded = $this->file->storeFile($scandoc);
                            $sitevisit->scandocuments()->create([
                                'file_id' => $uploaded->id
                            ]);
                        }
                    }


                    if ($request->UploadInternalDocuments) {
                        foreach ($request->UploadInternalDocuments as $internaldoc) {
                            $uploaded = $this->file->storeFile($internaldoc);
                            $sitevisit->internaldocuments()->create([
                                'file_id' => $uploaded->id
                            ]);
                        }
                    }
                }
                // dd('askdjhk');

                Toastr::success("Successfully updated");
                return redirect()->back();
            }
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


   


}
