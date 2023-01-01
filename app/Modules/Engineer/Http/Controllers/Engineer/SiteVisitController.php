<?php

namespace Engineer\Http\Controllers\Engineer;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Files\Repositories\FileInterface;
use Receptionist\Models\Client;
use SiteVisit\Models\SiteVisit;
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

                foreach($datas as $data){
                    $data->branch = $data->bank->name;
                }
                return DataTables::of($datas)
                    ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-url="#" data-id=' . $row->id . ' class="edit btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="javascript:void(0)" id="" data-id='.$row->id.' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
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


    public function create($id)
    {
        try{
            $banks = Bank::all();
            $branches = Branch::all();
            $clients = Client::all();
            return view('Engineer::engineer.sitevisit.create', compact('banks', 'branches', 'clients'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function store(Request $request)
    {
        try{

            $sitevisit = new SiteVisit();
            $sitevisit->registration_id = $request->reg_no ?? rand(0,9999);
            $sitevisit->bank_id = $request->bank_id;
            $sitevisit->branch_id = $request->branch_id;
            $sitevisit->client_id = $request->client_id;
            $sitevisit->market_rate = $request->market_rate;
            $sitevisit->bm_name = $request->bm_name;
            $sitevisit->bm_contact = $request->bm_contact;
            $sitevisit->rm_name = $request->rm_name;
            $sitevisit->rm_contact = $request->rm_contact;
            $sitevisit->road_size = $request->road_size;
            $sitevisit->ward_no = $request->ward_no;
            $sitevisit->compound_wall = $request->compound_wall;
            $sitevisit->valuation_type = $request->valuation_type;
            $sitevisit->type_of_road = $request->type_of_road;
            $sitevisit->type_of_land = $request->type_of_land;
            $sitevisit->category_of_property = $request->category_of_property;
            $sitevisit->category_of_property = $request->category_of_property;
            $sitevisit->remarks = $request->remarks;
            $sitevisit->proposal_id = $request->proposal_id;
            if($sitevisit->save()){

            }


        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function show()
    {
        try{

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function edit($id)
    {
        try{
            // dd("hdkjshakjdsa");
            return view('SiteVisit::backend.edit');


        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function update(Request $request, $id)
    {
        try{

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Branch $branch)
    {
        try{

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
