<?php

namespace Receptionist\Http\Controllers\Receptionist;

use App\GlobalServices\ResponseService;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Bank;
use CMS\Models\Branch;
use Files\Repositories\FileInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;

class ReceptionistBankController extends Controller
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
            $datas = Bank::get();


            return DataTables::of($datas)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-url="' . route('receptionist.bank.edit', $row->id) . '" data-id=' . $row->id . ' class="edit btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="javascript:void(0)" id="" data-url="' . route('receptionist.bank.delete', $row->id) . '" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $banks = Bank::all();
        return view('Receptionist::receptionist.bank.index', compact('banks'));
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function create(){
        try {

            $data = [
                'view' => view('Receptionist::receptionist.bank.create')->render()
            ];
            return $this->response->responseSuccess($data, "Success", 200);
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }


    public function store(Request $request){
        // try {
        // dd($request->all());
        if ($request->ajax()) {
                $bank = new Bank();
                $bank->name = $request->name;
                $bank->swift_code = $request->swift_code;
                $bank->link = $request->bank_link;
                $bank->phone = $request->phone;
                $bank->commercial_rate = $request->commercial_rate;
                $bank->government_rate = $request->government_rate;
                $bank->remarks = $request->remarks;
                if ($bank->save()) {
                    return $this->response->responseSuccessMsg("Successfully Stored");
                }
                return $this->response->responseError("Something went wrong while storing proposal");
        }
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function show(proposal $proposal){
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id){
        try {
            $bank = Bank::where('id', $id)->first();
            if ($bank) {
                $data = [
                    'view' => view('Receptionist::receptionist.bank.edit', compact('bank'))->render()
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

                $bank = Bank::where('id', $id)->first();
                $bank->name = $request->name;
                $bank->swift_code = $request->swift_code;
                $bank->phone = $request->phone;
                $bank->link = $request->bank_link;

                $bank->commercial_rate = $request->commercial_rate;
                $bank->government_rate = $request->government_rate;
                $bank->remarks = $request->remarks;
                if ($bank->update()) {
                    return $this->response->responseSuccessMsg("Successfully Stored");
                }
            }
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function destroy(proposal $proposal){
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

}
