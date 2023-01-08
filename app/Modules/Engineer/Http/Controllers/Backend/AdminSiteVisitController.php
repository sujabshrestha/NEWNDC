<?php

namespace Engineer\Http\Controllers\Backend;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Engineer\Models\SiteVisit;
use Files\Repositories\FileInterface;
use Receptionist\Models\Client;
use Receptionist\Models\Proposal;
use User\Models\User;
use Yajra\DataTables\Facades\DataTables;

class AdminSiteVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $file, $response;
    public function __construct(FileInterface $file, ResponseService $response)
    {
        $this->file = $file;
        $this->response = $response;
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $datas =SiteVisit::with(['branch','bank','client', 'proposal'])->latest();

            // dd($request->all());

            return DataTables::of($datas)
                ->addIndexColumn()
                ->editColumn('branch',function($row){
                    return $row->branch->title ?? 'N/A';
                })
                ->editColumn('bank_name',function($row){
                    return $row->bank->name;
                })
                ->editColumn('client_name',function($row){
                    return $row->client->client_name;
                })
                ->editColumn('valuation_status',function($row){
                    $main = '<select name="valuation_status" class="form-control valuationStatus" data-id='.$row->id.'>';
                    $preSelected = '<option value="Pre-Valuation" selected>Pre-Valuation</option> <option value="Final-Valuation">Final-Valuation</option> <option value="Cancel-Valuation">Cancel-Valuation</option></select>';
                    $finalSelected = '<option value="Pre-Valuation">Pre-Valuation</option>  <option value="Final-Valuation" selected>Final-Valuation</option> <option value="Cancel-Valuation">Cancel-Valuation</option></select>';
                    $cancelSelected = '<option value="Pre-Valuation">Pre-Valuation</option> <option value="Final-Valuation">Final-Valuation</option><option value="Cancel-Valuation" selected>Cancel-Valuation</option></select>';

                    if($row->valuation_status == "Pre-Valuation"){
                        return $main.$preSelected;
                    }elseif($row->valuation_status == "Final-Valuation"){
                        return $main.$finalSelected;
                    }elseif($row->valuation_status == "Cancel-Valuation"){
                        return $main.$cancelSelected;
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if($request->filterValuation && $request->filterValuation != null && !empty($request->filterValuation)){
                        if($request->filterValuation == "latest-Valuation"){
                            $instance->latest();
                        }else{
                            $instance->where('valuation_status', $request->filterValuation);
                        }
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="'. route('backend.admin.sitevisit.edit', $row->id) .'" data-url="#" data-id=' . $row->id . ' class="btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                ';
                    return $actionBtn;
                })
                ->rawColumns(['action','valuation_status'])
                ->make(true);
        }
            $finalvaluationCount = SiteVisit::finalValuation()->count();
            $prevaluationCount = SiteVisit::preValuation()->count();
            $cancelvaluationCount = SiteVisit::cancelValuation()->count();
        return view('Engineer::admin.sitevisit.index',compact('prevaluationCount','finalvaluationCount','cancelvaluationCount'));
        // }catch(\Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function create($proposalid, $id = null)
    {
        try {

            $banks = Bank::all();
            $branches = Branch::all();
            $clients = Client::all();
            $proposal = Proposal::where('id', $proposalid)->first();
            $sitevisit = SiteVisit::where('id', $id)->first();
            $siteengineers = User::role('engineer')->get();
            return view('Engineer::admin.sitevisit.create', compact('banks', 'branches', 'clients', 'proposal', 'sitevisit', 'siteengineers'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function store(Request $request, $id = null)
    {
        // try{
        // dd($request->all(), $id);
        if (!is_null($id)) {
            $sitevisit = SiteVisit::where('id', $id)->with(['documents', 'legaldocuments'])->first();
            $sitevisit->registration_id = $request->reg_no ?? rand(0, 9999);
            $sitevisit->proposal_id = $request->proposal_id;
            $sitevisit->site_engineer_id = auth()->user()->id;
            $sitevisit->owner_name = $request->owner_name;
            $sitevisit->bank_id = $request->bank_id;
            $sitevisit->branch_id = $request->branch_id;
            $sitevisit->client_id = $request->client_id;
            $sitevisit->market_rate = $request->market_rate;
            $sitevisit->ward_no = $request->ward_number;
            $sitevisit->bm_name = $request->bm_name;
            $sitevisit->bm_contact = $request->bm_contact;
            $sitevisit->rm_name = $request->rm_name;
            $sitevisit->rm_contact = $request->rm_contact;
            $sitevisit->file_no = $request->file_no;
            $sitevisit->road_size = $request->road_size;
            $sitevisit->compound_wall = $request->compound_wall;
            $sitevisit->valuation_type = $request->valuation_type;
            $sitevisit->type_of_road = $request->type_of_road;
            $sitevisit->type_of_land = $request->type_of_land;
            $sitevisit->category_of_property = $request->category_of_property;
            $sitevisit->remarks = $request->remarks;
            $sitevisit->proposal_id = $request->proposal_id;
            if ($sitevisit->update()) {
                if ($request->RegUploadPicture) {
                    foreach ($request->RegUploadPicture as $document) {
                        $uploaded = $this->file->storeFile($document);
                        $sitevisit->documents()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                if ($request->RegUploadScanDocument) {
                    foreach ($request->RegUploadScanDocument as $legaldocument) {
                        $uploaded = $this->file->storeFile($legaldocument);
                        $sitevisit->legaldocuments()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                Toastr::success("Successfully Stored");
                return redirect()->route('proposal.index');
            }
        }else{
            $sitevisit = new SiteVisit();
            $sitevisit->registration_id = $request->reg_no ?? rand(0, 9999);
            $sitevisit->proposal_id = $request->proposal_id;
            $sitevisit->site_engineer_id = auth()->user()->id;
            $sitevisit->bank_id = $request->bank_id;
            $sitevisit->branch_id = $request->branch_id;
            $sitevisit->client_id = $request->client_id;
            $sitevisit->market_rate = $request->market_rate;
            $sitevisit->bm_name = $request->bm_name;
            $sitevisit->bm_contact = $request->bm_contact;
            $sitevisit->owner_name = $request->owner_name;
            $sitevisit->rm_name = $request->rm_name;
            $sitevisit->rm_contact = $request->rm_contact;
            $sitevisit->file_no = $request->file_no;
            $sitevisit->road_size = $request->road_size;
            $sitevisit->ward_no = $request->ward_number;
            $sitevisit->compound_wall = $request->compound_wall;
            $sitevisit->valuation_type = $request->valuation_type;
            $sitevisit->type_of_road = $request->type_of_road;
            $sitevisit->type_of_land = $request->type_of_land;
            $sitevisit->category_of_property = $request->category_of_property;
            $sitevisit->remarks = $request->remarks;
            $sitevisit->proposal_id = $request->proposal_id;
            if ($sitevisit->save()) {
                if ($request->RegUploadPicture) {
                    foreach ($request->RegUploadPicture as $document) {
                        $uploaded = $this->file->storeFile($document);
                        $sitevisit->documents()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                if ($request->RegUploadScanDocument) {
                    foreach ($request->RegUploadScanDocument as $legaldocument) {
                        $uploaded = $this->file->storeFile($legaldocument);
                        $sitevisit->legaldocuments()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                Toastr::success("Successfully Stored");
                return redirect()->route('proposal.index');
            }
        }

        Toastr::success("Something went wrong");
        return redirect()->back();


        // }catch(\Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function show()
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function edit($id)
    {
        try {
            $banks = Bank::all();
            $branches = Branch::all();
            $clients = Client::all();
            $sitevisit = SiteVisit::where('id', $id)->first();
            $proposal = Proposal::where('id',$sitevisit->proposal_id)->first();
            $siteengineers = User::role('engineer')->get();
            // dd("hdkjshakjdsa");
            return view('Engineer::admin.sitevisit.edit', compact('banks','branches','clients', 'sitevisit', 'proposal', 'siteengineers'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function update(Request $request, $id)
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Branch $branch)
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function changeValuationStatus(Request $request,$id){
        // dd($request->all());
        $siteVisit= SiteVisit::where('id',$id)->first();
        if($siteVisit){
            $siteVisit->valuation_status = $request->valuation_status;
            $siteVisit->update();
            $finalvaluationCount = SiteVisit::finalValuation()->count();
            $prevaluationCount = SiteVisit::preValuation()->count();
            $cancelvaluationCount = SiteVisit::cancelValuation()->count();
            $data = [
                    'final' => $finalvaluationCount,
                    'pre' => $prevaluationCount,
                    'cancel' => $cancelvaluationCount
                ];
            return $this->response->responseSuccess($data,'Successfully Updated',200);
        }
    }
}
