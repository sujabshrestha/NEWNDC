<?php

namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Files\Repositories\FileInterface;
use Receptionist\Models\Client;
use Receptionist\Models\Proposal;
use User\Models\User;
use Yajra\DataTables\Facades\DataTables;

class ReceptionistProposalController extends Controller
{
    protected $file, $response;
    public function __construct(FileInterface $file, ResponseService $response)
    {
        $this->file = $file;
        $this->response = $response;
    }

    public function index(Request $request)
    {
        // dd('asdkh');
        // try {
            if ($request->ajax()) {
                $datas = Proposal::with(['bank','branch', 'client'])->get();
                foreach($datas as $data){
                    $data->branch = $data->branch->title;
                    $data->bank = $data->bank->name;
                    $data->client = $data->client_id;
                }

                return DataTables::of($datas)
                    ->addIndexColumn()

                    ->addColumn('action', function ($row) {
                        $actionBtn = '<a href="javascript:void(0)" data-url="' . route('receptionist.proposal.edit', $row->id) . '" data-id=' . $row->id . ' class="edit btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="javascript:void(0)" id="" data-url="' . route('receptionist.proposal.delete', $row->id) . '" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                ';
                        return $actionBtn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }

            $banks = Bank::all();
            return view('Receptionist::receptionist.proposal.index', compact('banks'));
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function create()
    {
        try {
            $banks = Bank::all();
            $branches = Branch::all();
            $siteengineers = User::role('engineer')->get();
            $data = [
                'view' => view('Receptionist::receptionist.proposal.create', compact('branches', 'banks', 'siteengineers'))->render()
            ];
            return $this->response->responseSuccess($data, "Success", 200);
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
            // dd($request->all());
            if ($request->ajax()) {
                $client = new Client();
                $client->reg_no = rand(0, 9999);
                $client->client_name = $request->client_name;
                $client->contact_no = $request->client_phone;
                $client->address = $request->property_location;
                if($client->save()){
                    $proposal = new Proposal();
                    $proposal->branch_id = $request->branch_id;
                    $proposal->bank_id = $request->bank_id;
                    $proposal->banker_name = $request->banker_name;
                    $proposal->banker_contact = $request->phone_no;
                    $proposal->client_id = $client->id;
                    $proposal->site_engineer = $request->site_engineer;
                    $proposal->status = "Pending";
                    $proposal->remarks = $request->remarks;
                    if($proposal->save()){

                        return $this->response->responseSuccessMsg("Successfully Stored", 200);
                    }
                    return $this->response->responseError("Something went wrong while storing proposal");

                }
                return $this->response->responseError("Something went wrong while storing client");
            }
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(proposal $proposal)
    {
        try {
        } catch (\Exception $e) {
            Toastr  ::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $proposal = proposal::with('client')->where('id', $id)->first();
            $banks = Bank::all();
            $branches = Branch::all();
            $siteengineers = User::role('engineer')->get();
            if ($proposal) {
                $data = [
                    'view' => view('Receptionist::receptionist.proposal.edit', compact('proposal', 'banks', 'branches', 'siteengineers'))->render()
                ];

                return $this->response->responseSuccess($data, "Success", 200);
            }

            return $this->response->responseError("Something went wrong");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if ($request->ajax()) {

                $proposal =  Proposal::where('id', $id)->first();
                $proposal->branch_id = $request->branch_id;
                $proposal->bank_id = $request->bank_id;
                $proposal->banker_name = $request->banker_name;
                $proposal->banker_contact = $request->phone_no;
                $proposal->client_id = $request->client_id;
                $proposal->property_location = $request->property_location;
                $proposal->site_visited_by = $request->site_visited_by;
                $proposal->status = $request->status;
                $proposal->remarks = $request->remarks;
                $proposal->save();

                return $this->response->responseSuccessMsg("Successfully Updated", 200);
            }
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(proposal $proposal)
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function design(){
        return view('CMS::backend.design.create');
    }
}
