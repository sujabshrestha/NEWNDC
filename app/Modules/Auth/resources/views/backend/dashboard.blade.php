@extends('layouts.admin.master')
@push('css')
<link rel="stylesheet" href="{{ asset('frontendFiles/assets/css/ol.css') }}">
    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
@endpush

@section('title', 'Dashboard')

@push('css')
    <style>
        #map {
            width: 100%;
            height: 600px;
        }
    </style>
@endpush


@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-18 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="col-12">
                    <h5 style="display: inline;">Not Verified - Site Visit </h5>
                    <a href="{{ route('backend.admin.sitevisit.index') }}" class="btn btn-primary float-right ">View All Site Visits </a>
                                {{-- <a class="btn btn-success float-right" href="{{ route('backend.sitevisit.create') }}">Create <i
                                    class="fa fa-plus"></i></a> --}}
                </div>
                <hr>
               
                  
                <div class="table-responsive mb-3 mt-3">
                    <table id="global-table" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Action</th>
                                <th>Bank</th>
                                <th>Branch</th>
                                <th>Banker Name</th>
                                <th>Client</th>
                                <th>Verification Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</div>

<!--  END CONTENT AREA  -->
@endsection

@push('scripts')
<script>
    var data = null;

    $('#global-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "{{ route('backend.auth.dashboard') }}",
            data: function (d) {
                d.filterValuation = data;
            }
        } ,

        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false,
                width: '2%',
            },
            {
                width: '5%',
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
            {
                data: 'bank_name',
                orderable: false,
                render: function(data, type, row) {
                    return '<p class="text-capitalize">' + row.bank_name + '</p>';
                }
            },
             {
                data: 'branch',
                orderable: false,
                render: function(data, type, row) {
                    return '<p class="text-capitalize">' + row.branch + '</p>';
                }
            },
            {
                data: 'banker_name',
                render: function(data, type, row) {
                    return '<p class="text-capitalize">' +row.bm_name+ '</p>';
                }
            },
            {
                data: 'client_name',
                orderable: false,
                render: function(data, type, row) {
                    return '<p class="text-capitalize">' +row.client_name+ '</p>';
                }
            },
            {
                data: 'verification_status',
                name: 'verification_status',
                orderable: true,
                searchable: true
            },
           
        ]
    });
   
</script>

<script>
    $(document).on('change', '.verificationStatus', function() {
    event.preventDefault();
    var id = $(this).attr('data-id');
    var editUrl = "{{ route('backend.admin.sitevisit.changeVerificationStatus', ':id') }}";
    myUrl = editUrl.replace(':id', id);
    var status = $(this).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            type: 'GET',
            url: myUrl,
            data:{ 'verification_status':status} ,
            success: function(data) {
                console.log(data);
                toastr.success(data.message);
                $('#global-table').DataTable().ajax.reload();
            },
        });
    });
</script>
@endpush