<?php

namespace EngineerHead\Http\Controllers\EngineerHead;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Client\Models\Client;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Files\Repositories\FileInterface;
use Receptionist\Models\Proposal;
use User\Models\User;
use Yajra\DataTables\Facades\DataTables;

class EngineerheadController extends Controller
{

    protected $file, $response;
    public function __construct(FileInterface $file, ResponseService $response)
    {
        $this->file = $file;
        $this->response = $response;
    }

    public function dashboard(Request $request){
        try{
            if ($request->ajax()) {
                $datas = Proposal::where('engineer_head', auth()->user()->id)->with(['bank','branch', 'siteVisit', 'client'])->get();
                foreach($datas as $data){
                    $data->branch = $data->branch->title;
                    $data->bank = $data->bank->name;

                }

                // <a href="'. route('siteengineer.sitevisit.create', [$row->id, $row->siteVisit->id ?? null]) .'" id="" data-id=' . $row->id . ' class="delete btn btn-secondary btn-sm mb-2" title="Delete">Client Details</a>
                return DataTables::of($datas)
                    ->addIndexColumn()

                    ->addColumn('action', function ($row) {
                        $actionBtn = '<a id="create" href="" data-url="'. route('engineerhead.assignEngineer', $row->id) .'" data-id=' . $row->id . ' class="btn btn-primary btn-sm mb-2" title="Add engineer">Assign engineer</a>


                                ';
                        return $actionBtn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }

            $banks = Bank::all();
            return view('EngineerHead::engineerhead.dashboard', compact('banks'));
        }catch(\Exception $e){

        }
    }




    public function assignEngineer($id){
        try {
            $proposal = Proposal::with('client')->where('id', $id)->first();
            $banks = Bank::all();
            $branches = Branch::all();
            $siteengineers = User::role('engineer')->get();
            if ($proposal) {
                $data = [
                    'view' => view('EngineerHead::engineerhead.proposal.assignEngineer', compact('proposal', 'banks', 'branches', 'siteengineers'))->render()
                ];

                return $this->response->responseSuccess($data, "Success", 200);
            }

            return $this->response->responseError("Something went wrong");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }


    public function update(Request $request, $id){
        try {
            if ($request->ajax()) {

                $proposal = Proposal::where('id', $id)->first();
                $proposal->branch_id = $request->branch_id;
                $proposal->bank_id = $request->bank_id;
                $proposal->banker_name = $request->banker_name;
                $proposal->banker_contact = $request->phone_no;
                $proposal->site_engineer = $request->site_engineer;
                $proposal->status = $request->status;
                $proposal->remarks = $request->remarks;
                if ($proposal->update()) {
                    $client = Client::where('id', $proposal->client_id)->first();
                    $client->client_name = $request->client_name;
                    $client->contact_no = $request->client_phone;
                    $client->address = $request->property_location;
                    $client->update();
                }

                return $this->response->responseSuccessMsg("Successfully Updated", 200);
            }
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }



}
