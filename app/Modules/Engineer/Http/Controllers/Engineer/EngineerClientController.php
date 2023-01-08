<?php

namespace Engineer\Http\Controllers\Engineer;

use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EngineerClientController extends Controller
{
    public function edit($id){
        try{
            $client = $this->client->getByID($id);
            return view('Client::backend.client.edit',compact('client'));
        }catch(Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function update(Request $request, $id){
        // try {
            // dd($request->all());
            $user = $this->client->update($request, $id);
            if ($user == true) {
                Toastr::success('Successfully Updated.');
                return redirect()->route('client.index');
            }
            Toastr::error("Something Went Wrong");
            return redirect()->back();
        // } catch (Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function show($id){
        // try{
            $client = Client::where('id', $id)->with('owner')->first();;
            return view('Client::backend.client.show',compact('client'));
        // }catch(Exception $e){
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
}
