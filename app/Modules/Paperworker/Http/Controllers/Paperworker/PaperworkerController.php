<?php

namespace Paperworker\Http\Controllers\Paperworker;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Engineer\Models\SiteVisit;
use Files\Repositories\FileInterface;
use Yajra\DataTables\Facades\DataTables;

class PaperworkerController extends Controller
{

    protected $file, $response;
    public function __construct(FileInterface $file, ResponseService $response)
    {
        $this->file = $file;
        $this->response = $response;
    }

    public function dashboard(Request $request)
    {
       
        if ($request->ajax()) {

            $datas = SiteVisit::with(['branch', 'bank', 'client', 'proposal'])->verified()->latest();

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
                                <a class="dropdown-item" href="' . route('paperworker.valuation.edit', $row->id) . '"><span class="text-primary">Edit</span></a>
                                <a class="dropdown-item deleteClient" href="javascript:void(0);" data-id="#"><span class="text-danger">Delete</span></a>
                                <hr class="m-0 border-secondary">
                                <a class="dropdown-item" target="_blank" href="'. route('paperworker.valuation.prevaluationReport',$row->id).'"><span class="text-info">Pre Valuation Report</span></a>
                                <a class="dropdown-item" target="_blank" href="'. route('paperworker.valuation.finalvaluationReport',$row->id).'"><span class="text-secondary">Final Valuation Report</span></a>

                            </div>
                        </div>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'valuation_status'])
                ->make(true);
        }
        $finalvaluationCount = SiteVisit::verified()->finalValuation()->count();
        $prevaluationCount = SiteVisit::verified()->preValuation()->count();
        $cancelvaluationCount = SiteVisit::verified()->cancelValuation()->count();
        return view('Paperworker::paperworker.dashboard', compact('prevaluationCount', 'finalvaluationCount', 'cancelvaluationCount'));
        // }catch(\Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

   
}
