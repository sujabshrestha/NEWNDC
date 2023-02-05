<?php

namespace Auth\Http\Controllers\Backend;

use App\GlobalServices\ResponseService;
use App\Http\Controllers\Controller;
use User\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

use Auth\Mail\UserForgetPasswordMail;
use Auth\Models\PasswordReset;
use Engineer\Models\SiteVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Files\Repositories\FileInterface;
use Illuminate\Support\Facades\Mail;
use Receptionist\Models\Proposal;
use Yajra\DataTables\Facades\DataTables;

class AuthController extends Controller
{
    protected $response, $file;

    public function __construct(ResponseService $response, FileInterface $file)
    {
        $this->response = $response;
        $this->file = $file;

    }

    public function login()
    {
        try {
            if (Auth::check()) {
                return redirect()->route('backend.auth.dashboard');
            }
            return view('Auth::backend.login');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function loginSubmit(Request $request)
    {
        // try {

            $user = User::where('email', $request->email)->first();
            if ($user) {
                $credentials = [
                    'email' => $request->email,
                    'password' => $request->password,
                ];
                // dd('askdhk');
                if (Auth::attempt($credentials)) {
                    if ($user->hasRole(['admin'])) {
                        Toastr::success('Successfully Logged In.');
                         return redirect()->route('backend.auth.dashboard');
                    }elseif($user->hasRole(['engineer'])){
                        // dd('asdkhk');
                        Toastr::success('Successfully Logged In.');
                        return redirect()->route('engineer.auth.engineerDashboard');
                    }elseif($user->hasRole('receptionist')){
                        Toastr::success('Successfully Logged In.');
                        return redirect()->route('receptionist.dashboard');
                    }elseif($user->hasRole('paperworker')){
                        Toastr::success('Successfully Logged In.');
                        return redirect()->route('paperworker.dashboard');
                    }
                    elseif($user->hasRole('engineer_head')){
                        Toastr::success('Successfully Logged In.');
                        return redirect()->route('engineerhead.dashboard');
                    }
                        else{
                        Auth::logout();
                        Toastr::error('You Do Not Have Permission To Login');
                        return redirect()->route('backend.auth.login');
                    }
                }
                Toastr::error("Credentails Don't Match!!");
                return redirect()->back()->with('error', "Something went wrong")->withInput($request->input());


                Toastr::error("You Do Not Have Permission To LogIn.");
                return redirect()->back()->with('error', "You Do Not Have Permission To LogIn.")->withInput($request->input());;
            }
            Toastr::error("User Not Found.");
            return redirect()->back()->with('error', "User not found")->withInput($request->input());
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function dashboard(Request $request)
    {
        try {
            if ($request->ajax()) {
                $datas =SiteVisit::with(['branch','bank','client', 'proposal'])->notVerified()->latest();

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
                    ->editColumn('verification_status',function($row){
                        $main = '<select name="verification_status" class="form-control verificationStatus" data-id='.$row->id.'>';
                        $verifiedSelected = '<option value="Verified" selected>Verified</option> <option value="Not-Verified">Not-Verified</option> </select>';
                        $notVerifiedSelected = '<option value="Verified">Verified</option>  <option value="Not-Verified" selected>Not-Verified</option> </select>';

                        if($row->verification_status == "Verified"){
                            return $main.$verifiedSelected;
                        }elseif($row->verification_status == "Not-Verified"){
                            return $main.$notVerifiedSelected;
                        }
                    })
                    ->filter(function ($instance) use ($request) {
                        if($request->filterValuation && $request->filterValuation != null && !empty($request->filterValuation)){
                            if($request->filterValuation == "latest-Valuation"){
                                $instance->latest();
                            }else{
                                $instance->where('verification_status', $request->filterValuation);
                            }
                        }
                    })
                    ->addColumn('action', function ($row) {
                        $actionBtn = '<a href="'. route('backend.admin.sitevisit.edit', $row->id) .'" data-url="#" data-id=' . $row->id . ' class="btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                                    <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                                    ';
                        return $actionBtn;
                    })
                    ->rawColumns(['action','verification_status'])
                    ->make(true);
            }
            return view('Auth::backend.dashboard');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function engineerDashboard(){
        try {

            return view('Auth::backend.engineer.dashboard');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function receptionProposalData(Request $request){
        // dd('askdjhk');
        if ($request->ajax()) {
            $datas = Proposal::with(['bank','branch'])->get();
            foreach($datas as $data){
                $data->branch = $data->branch->title;
                $data->bank = $data->bank->name;
                $data->client = $data->client_id;
            }
            return DataTables::of($datas)
                ->addIndexColumn()
                ->editColumn('status',function($row){
                    $test = '<select name="status" class="form-control">
                                <option'."{{ $row->status == Active ? 'selected' : '' }}" .'>Active</option>
                                <option'."{{ $row->status == Inactive ? 'selected' : '' }}" .'>Active</option>
                            </select>
                            ';
                        return $test;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-url="' . route('backend.cms.proposal.edit', $row->id) . '" data-id=' . $row->id . ' class="edit btn btn-info btn-sm" title="Edit"><i class="far fa-edit"></i></a>
                            <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                            ';
                    return $actionBtn;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        }
    }



    public function engineerSiteData(Request $request){
        if ($request->ajax()) {
            $datas = Proposal::with(['bank','branch'])->where('siteVisitedBy',Auth::id());
            foreach($datas as $data){
                $data->branch = $data->branch->title;
                $data->bank = $data->bank->name;
                $data->client = $data->client_id;
            }
            return DataTables::of($datas)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-url="' . route('backend.cms.proposal.edit', $row->id) . '" data-id=' . $row->id . ' class="edit btn btn-info btn-sm">Add Site Details</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    // public function register()
    // {
    //     try {
    //         return view('Auth::backend.register');
    //     } catch (\Exception $e) {
    //         Toastr::error($e->getMessage());
    //         return redirect()->back();
    //     }
    // }

    // public function registerSubmit(RegisterRequest $request)
    // {
    //     try {
    //         $registered_from = "App";

    //         $user = $this->auth->registerSubmit($request,$registered_from );
    //         if ($user) {
    //             $data=[
    //                 'email'=>$user->email,
    //                 'name'=>$user->name,
    //                 'phone_no'=>$user->phone_no,
    //                 'id'=>$user->id,
    //             ];
    //             $sendVerificationUserMailJob=(new SendVerificationUserEmail($data))
    //                                             ->delay(Carbon::now()->addSeconds(3));
    //             dispatch($sendVerificationUserMailJob);
    //             Toastr::success('Registration Success !');
    //             return redirect()->route('backend.auth.login');
    //         }
    //         Toastr::error('Cant be Register');
    //         return redirect()->route('backend.auth.register');
    //     } catch (\Exception $e) {
    //         Toastr::error($e->getMessage());
    //         return redirect()->back();
    //     }
    // }



    public function logout()
    {
        Auth::logout();
        Toastr::success("Successfully Logout");
        return redirect()->route('backend.auth.login');
    }


    public function forgetPassword(){
        try{
            return view('Auth::backend.passwordReset');
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function forgetPasswordSubmit(Request $request){
        try{
            $user = User::where('email', $request->email)->first();
            if($user){
                $token = Str::random(20);
                $details = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'token' => $token,
                ];
                PasswordReset::create([
                    'email' => $user->email,
                    'token' => $token
                ]);
                $forgetpasswordmail = new UserForgetPasswordMail($details);
                Mail::to($user->email)->send($forgetpasswordmail);

                Toastr::success('A reset link has been send to your email. Please check your mail');
                return redirect()->route('backend.auth.login');
            }
            Toastr::error("User not found");
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function resetPassword($email, $token){
        try{
            $passwordreset = PasswordReset::where('email', $email)
            ->where('token', $token)->first();
            $token = $passwordreset->token;
            if($passwordreset){
                return view('Auth::backend.passwordResetForm', compact('email', 'token'));
            }
            Toastr::error("Token doesn't match");

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function recoverPassword($email, Request $request){
        try{
            $user = User::where('email', $email)->first();
            $passwordreset = PasswordReset::where('email', $email)->where('token', $request->token)->first();

            if($user){
                $user->password = bcrypt($request->password);
                $user->save();

                Toastr::success('Successfully Changed');
                return redirect()->route('backend.auth.login');
            }
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



}
