@extends('layouts.engineer.master')

@section('title')
    @if (isset($sitevisit))
        {{ 'Edit ' . $sitevisit->registration_id }}
    @else
        {{ 'NDC |  Add ' }}
    @endif
@endsection

@section('breadcrumb')
    @if (isset($sitevisit))
        {{ 'Edit ' . $sitevisit->registration_id }}
    @else
        {{ 'Add ' }}
    @endif
@endsection


@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">
                        @if (isset($sitevisit))
                            {{ 'Edit ' . $sitevisit->registration_id }}
                        @else
                            Add
                        @endif
                    </h5>
                    <a class="btn btn-secondary float-right " href="{{ url()->previous() }}">Previous Page</a>
                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <form method="POST" enctype="multipart/form-data"
                        action="{{ route('siteengineer.sitevisit.submit', $sitevisit->id ?? null) }}">
                        @csrf
                        <input type="hidden" name="proposal_id" value="{{ $proposal->id }}">
                        @include('Engineer::engineer.sitevisit.commonForm')
                    </form>
                </div>

            </div>
        </div>
    @endsection
