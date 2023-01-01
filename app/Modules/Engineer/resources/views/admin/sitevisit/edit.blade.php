@extends('layouts.admin.master')

@section('title', 'NDC | Site Visit Edit ')

@section('breadcrumb', 'Site Visit Edit ')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Edit </h5>
                    <a class="btn btn-secondary float-right " href="{{ route('backend.sitevisit.index')}}">Previous Page</a>

                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                <form >
                    @include('Engineer::engineer.sitevisit.commonForm')
                </form>
            </div>
        </div>

    </div>
    @endsection

