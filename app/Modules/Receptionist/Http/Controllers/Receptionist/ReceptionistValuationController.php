<?php

namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LalpurjaCalculation;
use App\Models\Patra;
use Brian2694\Toastr\Facades\Toastr;
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
            $sitevisit = SiteVisit::where('id', $id)->with(['branch', 'bank', 'client', 'proposal'])->first();
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



    public function lalpurjaSubmit(Request $request, $id){
        $sitevisit = SiteVisit::where('id', $id)->first();
        if($sitevisit){
            $lalpurja = new LalpurjaCalculation();
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
            if($lalpurja->save()){

            }
        }
        dd($request->all());


        try {
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage())
;        }
    }

}
