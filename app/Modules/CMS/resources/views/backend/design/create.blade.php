@extends('layouts.admin.master')

@section('title', 'NDC | Add ')

@section('breadcrumb', 'Add ')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
 
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Add </h5>
                    <a class="btn btn-secondary float-right " href="{{ route('client.index')}}">Previous Page</a>

                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                <form >
                    @include('CMS::backend.design.commonform')

                </form>
            </div>

        </div>
    </div>
    @endsection

