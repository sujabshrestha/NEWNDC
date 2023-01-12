<?php

namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LalpurjaCalculation;
use App\Models\LandbasedCalculation;
use App\Models\Patra;
use App\Models\PermanetBoundariesAsPerGovt;
use App\Models\PermanetBoundariesAsPerSiteVisit;
use App\Models\SitevisitBoundary;
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
                    $actionBtn = '<a href="' . route('receptionist.valuation.edit', $row->id) . '" data-url="#" data-id=' . $row->id . ' class="btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                    <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                    ';
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


    public function edit($id)
    {
        try {

            $branches = Branch::all();
            $clients = Client::all();
            $banks = Bank::all();
            $patras = Patra::all();

            $siteengineers = User::role('engineer')->get();
            $sitevisit = SiteVisit::where('id', $id)->with([
                'branch','bank', 'client', 'proposal', 'lalpurjaDatas', 'documents',
                 'legaldocuments', 'legalscandocuments', 'internalcaddocuments'
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

                $sitevisit->deduction()->updateOrCreate([
                    'id' => $sitevisit->deduction->id ?? null
                ],
                [
                    'deductionOfRoadSqF' => $request->deductionOfRoadSqF,
                    'landDevelopmentPercent' => $request->landDevelopmentPercent,
                    'landDevelopmentPercent' => $request->landDevelopmentPercent,
                    'deductionForHighTensionSqF'=> $request->deductionForHighTensionSqF,
                    'deductionForLowLandSqF'=> $request->deductionForLowLandSqF,
                    'deductionForRiverSqF'=> $request->deductionForRiverSqF,
                    'deductionForBoundryCorrection'=> $request->deductionForBoundryCorrection,
                    'deductionForIrregularShapeSloppyLand'=> $request->deductionForIrregularShapeSloppyLand,
                    'sqMAPConsideration'=> $request->sqMAPConsideration,
                    'rAPDAPConsideration'=> $request->rAPDAPConsideration,
                    'sqFAPConsideration'=> $request->sqFAPConsideration,
                    'annaAPConsideration'=> $request->annaAPConsideration,
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

                Toastr::success("Successfully updated");
                return redirect()->back();
            }
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }





}
