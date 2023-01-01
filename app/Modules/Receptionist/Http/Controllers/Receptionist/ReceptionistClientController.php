<?php


namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Client\Models\Client;
use Client\Repositories\Client\ClientInterface;

class ReceptionistClientController extends Controller
{
    public $response;
    public $client;

    public function __construct(ResponseService $response, ClientInterface $client)
    {
        $this->response = $response;
        $this->client = $client;
    }
    /**
     * Display a lsisting of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        try{
            return view('Receptionist::client.index');

        }catch(Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function create(){
        try{
            return view('Receptionist::.client.create');
        }catch(Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function store(Request $request ){
        try {
            dd($request->all());
            $client = $this->client->store($request);
            if($client == true) {
                Toastr::success('Successfully Created.');
                return redirect()->route('receptionist.client.create');
            }
            Toastr::error("Something Went Wrong");
            return redirect()->back();
        } catch (Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id){
        try{
            $client = $this->client->getByID($id);
            return view('Receptionist::client.edit',compact('client'));
        }catch(Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function show($id){
        // try{
            $client = Client::where('id', $id)->with('owner')->first();;
            return view('Receptionist::client.show',compact('client'));
        // }catch(Exception $e){
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function update(Request $request, $id){
        // try {
            // dd($request->all());
            $user = $this->client->update($request, $id);
            if ($user == true) {
                Toastr::success('Successfully Updated.');
                return redirect()->route('receptionist.client.index');
            }  
            Toastr::error("Something Went Wrong");
            return redirect()->back();
        // } catch (Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function destroy($id){
        try{
            $user = $this->client->getByID($id);
            $userDelete= $user->delete();

            if($userDelete == true){
                Toastr::success('Successfully Deleted.');
                return redirect()->back();
            }
            Toastr::error("Something Went Wrong");
            return redirect()->back();
        }catch(Exception $e){
             Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function trashedIndex(){
        return view('Receptionist::user.trashedIndex');
    }

    public function trashedDestroy($id){
        try{
            $user=$this->client->trashedDestroy($id);
            if($user == true){
                return $this->response->responseSuccessMsg('Deleted Permanently');
            }
        }catch(Exception $e){
             Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function trashedRecover($id){
        try{
            $userRestore=$this->client->trashedRecover($id);
            if($userRestore == true){
                return $this->response->responseSuccessMsg('Successfully Restored');
            }
        }catch(Exception $e){
             Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getClientData(Request $request){
        try {
            if ($request->ajax()) {
                $data = Client::select('*')->with('owner');
                return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('owner_name',function($data){
                    return $data->owner->owner_name;
                })
                ->editColumn('status',function($row){
                    $main = '<select name="status" class="form-control clientStatus" data-id='.$row->id.'>';
                    $mainlast = '</select>';
                    $activeSelected = '<option  value="Active" selected>Active</option>
                                        <option  value="Inactive">Inactive</option>';
                    $inactiveSelected = '<option  value="Inactive">Active</option>
                                        <option  value="Inactive" selected>Inactive</option>';
             
                    if($row->status == "Active"){
                        return $main.$activeSelected.$mainlast;
                    }else{
                        return $main.$inactiveSelected.$mainlast;
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
                                <a class="dropdown-item" href="'. route('receptionist.client.edit',$row->id) .'"><span class="text-primary">Edit</span></a>
                                <a class="important dropdown-item" href="'. route('receptionist.client.show',$row->id) .'"><span class="text-secondary">View</span></a>
                                <a class="dropdown-item deleteClient" href="javascript:void(0);" data-id="'. route('receptionist.client.destroy',$row->id) .'"><span class="text-danger">Delete</span></a>
                            </div>
                        </div>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action','status'])
                ->make(true);
            }
        } catch (Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function getTrashedUserData(Request $request){
        try {
            if ($request->ajax()) {
                $data = Client::onlyTrashed()->get();
                return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" id="'. route('backend.user.trashedRecover',$row->id) .'" data-id=' . $row->id . ' class="restore btn btn-success btn-sm">Restore</a>
                                <a href="javascript:void(0)" id="'. route('backend.user.trashedDestroy',$row->id) .'" data-id=' . $row->id . ' class="permanentDelete btn btn-danger btn-sm">Permanent Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
                }
        } catch (Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function changeClientStatus(Request $request,$id){
        // dd($request->all());
        $client= Client::where('id',$id)->first();
        if($client){
            $client->status = $request->status;
            $client->update();
            return $this->response->responseSuccessMsg('Successfully Updated',200);
        }
    }
}



