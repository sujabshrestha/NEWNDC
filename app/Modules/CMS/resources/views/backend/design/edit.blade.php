@extends('layouts.admin.master')

@section('title', 'NDC | Edit ')

@section('breadcrumb', 'Edit ')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
 
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Edit </h5>
                    <a class="btn btn-secondary float-right " href="{{ route('client.index')}}">Previous Page</a>

                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                <form >
                    <input type="hidden" name="TxtActionBy" value="1">
                    <input type="hidden" name="TxtTag" id="TxtTag" value="NEW">
                    <input type="hidden" name="TxtClientId" id="TxtClientId" value="">
                    <input type="hidden" name="TxtRegisterById" id="TxtRegisterById" value="1">
                    @include('CMS::backend.design.commonform')
                </form>
            </div>
        </div>

    </div>
    @endsection

