<?php

namespace Engineer\Http\Controllers\Engineer;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FourSitevisitBoundary;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Engineer\Models\SiteVisit;
use Files\Repositories\FileInterface;
use Receptionist\Models\Client;
use Receptionist\Models\Proposal;
use User\Models\User;
use Yajra\DataTables\Facades\DataTables;

class SiteVisitController extends Controller
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

    public function index(Request $request, $id)
    {
        // try{

        if ($request->ajax()) {
            $datas = Branch::with('bank')->get();

            foreach ($datas as $data) {
                $data->branch = $data->bank->name;
            }
            return DataTables::of($datas)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-url="#" data-id=' . $row->id . ' class="edit btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Engineer::engineer.sitevisit.index', compact('id'));
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
            $fourboundaries = FourSitevisitBoundary::all();
            return view('Engineer::engineer.sitevisit.create', compact('banks', 'branches', 'clients', 'proposal', 'sitevisit', 'siteengineers', 'fourboundaries'));
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
            $sitevisit->registration_id =$request->reg_no;
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

            $sitevisit->boundary = $request->boundary;
            $sitevisit->compound_wall = $request->compound_wall;
            $sitevisit->right_of_row = $request->right_of_row;
            $sitevisit->land_revenue = $request->land_revenue;
            $sitevisit->rajinima_likhit = $request->rajinima_likhit;
            $sitevisit->deduct_on_road = $request->deduct_on_road;
            $sitevisit->high_tension_line = $request->high_tension_line;
            $sitevisit->boundary_correction = $request->boundary_correction;
            $sitevisit->kulo_river = $request->kulo_river;
            $sitevisit->land_development = $request->land_development;
            $sitevisit->lalpurja = $request->lalpurja;
            $sitevisit->napi_naki = $request->napi_naki;
            $sitevisit->citizenship_owner = $request->citizenship_owner;
            $sitevisit->citizenship_client = $request->citizenship_client;
            $sitevisit->org_char_killa_letter = $request->org_char_killa_letter;
            $sitevisit->approved_drawing_building = $request->approved_drawing_building;
            $sitevisit->ilajat_building = $request->ilajat_building;
            $sitevisit->sampan_building = $request->sampan_building;
            $sitevisit->company_registration_number = $request->company_registration_number;
            $sitevisit->citizenship_shareholder = $request->citizenship_shareholder;

            // dd($request->fourboundary);
            $sitevisit->fourBoundary()->sync($request->fourboundary);

            // foreach($request->fourboundary as $boundary){
            //     $sitevisit->fourBoundary()->updateOrCreate([
            //         'site_visit_id' => $id,
            //         'boundary' => $boundary
            // ],[
            //         'boundary' => $boundary
            //     ]
            // );
            // }

            if($request->site_plan_image){
                $uploaded = $this->file->storeFile($request->site_plan_image);
                $sitevisit->site_plan_image = $uploaded->id;
            }


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
                        $sitevisit->legalscandocuments()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                Toastr::success("Successfully Stored");
                return redirect()->route('siteengineer.proposal.index');
            }
        }else{
            // dd($request->type_of_road);
            $sitevisit = new SiteVisit();
            $sitevisit->registration_id = 'NDC-'.rand(0, 9999);
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

            $sitevisit->boundary = $request->boundary;
            $sitevisit->compound_wall = $request->compound_wall;
            $sitevisit->right_of_row = $request->right_of_row;
            $sitevisit->land_revenue = $request->land_revenue;
            $sitevisit->rajinima_likhit = $request->rajinima_likhit;
            $sitevisit->deduct_on_road = $request->deduct_on_road;
            $sitevisit->high_tension_line = $request->high_tension_line;
            $sitevisit->boundary_correction = $request->boundary_correction;
            $sitevisit->kulo_river = $request->kulo_river;
            $sitevisit->land_development = $request->land_development;
            $sitevisit->lalpurja = $request->lalpurja;
            $sitevisit->napi_naki = $request->napi_naki;
            $sitevisit->citizenship_owner = $request->citizenship_owner;
            $sitevisit->citizenship_client = $request->citizenship_client;
            $sitevisit->org_char_killa_letter = $request->org_char_killa_letter;
            $sitevisit->approved_drawing_building = $request->approved_drawing_building;
            $sitevisit->ilajat_building = $request->ilajat_building;
            $sitevisit->sampan_building = $request->sampan_building;
            $sitevisit->company_registration_number = $request->company_registration_number;
            $sitevisit->citizenship_shareholder = $request->citizenship_shareholder;

            if($request->site_plan_image){
                $uploaded = $this->file->storeFile($request->site_plan_image);
                $sitevisit->site_plan_image = $uploaded->id;
            }

            if ($sitevisit->save()) {
                $sitevisit->fourBoundary()->sync($request->fourboundary);

                // foreach( as $boundary){
                //     $sitevisit->fourBoundary()->updateOrCreate([
                //         'site_visit_id' => $id,
                //         'boundary' => $boundary
                //     ],[
                //         'boundary' => $boundary
                //     ]
                // );
                // }



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
                        $sitevisit->legalscandocuments()->create([
                            'file_id' => $uploaded->id
                        ]);
                    }
                }

                Toastr::success("Successfully Stored");
                return redirect()->route('siteengineer.proposal.index');
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
            // dd("hdkjshakjdsa");
            return view('SiteVisit::backend.edit');
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
}
