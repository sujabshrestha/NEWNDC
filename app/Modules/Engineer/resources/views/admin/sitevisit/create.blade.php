@extends('layouts.admin.master')

@section('title', 'NDC | Add ')

@section('breadcrumb', 'Add ')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backendfiles/assets/css/forms/switches.css') }} ">
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="widget-content widget-content-area br-4">
                <div class="col-12">
                    <h5 style="display: inline;">Add </h5>
                    <a class="btn btn-secondary float-right " href="{{ url()->previous() }}">Previous Page</a>
                </div>
                <hr>
                <div class="col-xl-12 col-md-12 col-sm-12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('siteengineer.sitevisit.submit', $sitevisit->id ?? null) }}">
                    @csrf
                    <input type="hidden" name="proposal_id" value="{{ $proposal->id }}">
                    @include('Engineer::engineer.sitevisit.commonForm')
                </form>
            </div>

        </div>
    </div>
    @endsection

    @push('scripts')
    <script src="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script>
        @if (isset($sitevisit->site_plan_image))

            var importedBaseImage2 = "{{ url('/') . getOrginalUrl($sitevisit->site_plan_image) }}";
            var FooterImage = new FileUploadWithPreview('myFirstImage', {
                images: {
                    baseImage: importedBaseImage2,
                },
            })
        @else
            var firstUpload = new FileUploadWithPreview('myFirstImage')
        @endif
    </script>
@endpush

