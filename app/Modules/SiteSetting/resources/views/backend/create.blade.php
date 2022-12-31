@extends('layouts.admin.master')

@section('title', 'Site Setting - ')

@section('breadcrumb', 'Site Setting')

@push('styles')
    {{-- FileUpload --}}
<link href="{{ asset('backendFiles/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    hr{
    margin-top:5px;
    border-top: 1px solid #e0e6ed;
}
.required{
    color: red;
}

</style>


@endpush


@section('content')
  <!--  BEGIN CONTENT AREA  -->
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow" style="padding: 0;">
                    <div class="widget-content widget-content-area">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <h4>Site Setting</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('backend.siteSetting.store') }}">
                                @csrf
                                @include('SiteSetting::backend.commonForm')

                                <button type="submit" class="btn btn-primary float-right mb-3">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--  END CONTENT AREA  -->
@endsection

@push('scripts')
{{-- File Upload --}}
<script src="{{ asset('adminfiles/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

<script>
    
    @if (getThumbnailUrl(returnSiteSetting('logo')))
    // getThumbnailUrl(returnSiteSetting('logo'))
        var importedBaseImage = "{{ getThumbnailUrl(returnSiteSetting('logo')) }}";
        var firstUpload = new FileUploadWithPreview('mysiteLogo', {
        images: {
        baseImage: importedBaseImage,
        },
        });
    @else
        var firstUpload = new FileUploadWithPreview('mysiteLogo');
    @endif

    @if (getThumbnailUrl(returnSiteSetting('favicon')))
    // getThumbnailUrl(returnSiteSetting('favicon'))
        var importedBaseImage = "{{ getThumbnailUrl(returnSiteSetting('favicon')) }}";
        var firstUpload = new FileUploadWithPreview('siteFavIcon', {
        images: {
        baseImage: importedBaseImage,
        },
        });
    @else
        var firstUpload = new FileUploadWithPreview('siteFavIcon');
    @endif

    @if (getThumbnailUrl(returnSiteSetting('about_us_image')))
        var importedBaseImage = "{{ getThumbnailUrl(returnSiteSetting('about_us_image')) }}";
        var firstUpload = new FileUploadWithPreview('aboutUsImage', {
        images: {
        baseImage: importedBaseImage,
        },
        });
    @else
        var firstUpload = new FileUploadWithPreview('aboutUsImage');
    @endif

</script>

<script>


    var logo = new FileUploadWithPreview('siteLogo');

    var favicon = new FileUploadWithPreview('siteFavIcon');

    var siteEmailAds = new FileUploadWithPreview('aboutUsImage');

</script>


@endpush
