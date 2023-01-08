<?php

namespace App\Http\Controllers;

use App\Models\LalpurjaCalculation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LalpurjaCalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LalpurjaCalculation  $lalpurjaCalculation
     * @return \Illuminate\Http\Response
     */
    public function show(LalpurjaCalculation $lalpurjaCalculation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LalpurjaCalculation  $lalpurjaCalculation
     * @return \Illuminate\Http\Response
     */
    public function edit(LalpurjaCalculation $lalpurjaCalculation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LalpurjaCalculation  $lalpurjaCalculation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LalpurjaCalculation $lalpurjaCalculation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LalpurjaCalculation  $lalpurjaCalculation
     * @return \Illuminate\Http\Response
     */
    public function destroy(LalpurjaCalculation $lalpurjaCalculation)
    {
        //
    }
}
