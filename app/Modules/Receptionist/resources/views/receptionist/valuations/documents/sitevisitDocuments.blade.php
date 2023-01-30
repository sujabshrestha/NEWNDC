@extends('layouts.reception.master')

@section('title', 'NDC | Valuation Long Form ')

@section('breadcrumb', 'Valuation Long Form ')

@push('styles')
    <style>
        .required {
            color: red;
        }
    </style>
@endpush

@section('content')

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Document Images </h5>
                    <a class="btn btn-secondary float-right " href="{{ url()->previous() }}">Previous Page</a>

                </div>
                <hr>

                {{-- @dd($sitevisit) --}}
                @if (isset($sitevisit))
                    <div class="col-md-12">

                        <div class="row">
                            @foreach ($sitevisit->documents as $document)


                            <div class="col-md-4">
                                <a target="_blank" href="{{ url('/').getOrginalurl($document->file_id) }}"><img  style="height: 200px;width:200px;" src="{{ url('/').getOrginalurl($document->file_id) }}" alt=""></a>
                            </div>
                            @endforeach
                        </div>


                    </div>
                @else
                    <h1 class="text-center text-danger"></h1>
                @endif

            </div>
        </div>
    </div>


@endsection
@push('scripts')
@endpush
