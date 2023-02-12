@extends('layouts.reception.master')

@section('title', 'NDC | Site Visit ')

@section('breadcrumb', 'Site Visit ')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-18 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">Site Visit Table</h5>
                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="global-table" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Registration Id</th>
                                    <th>Bank</th>
                                    <th>Client</th>
                                    <th>Valaution Type</th>
                                    <th>Action</th>
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
        $('#global-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('receptionist.siteVisit.index') }}",
            columns: [{
                    width:"1%",
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    width:"15%",
                    data: 'registration_id',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.registration_id  + '</p>';
                    }
                },
                {
                    width:"20%",
                    data: 'bank',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.bank.name + '</p>';
                    }
                }, 
                {
                    width:"20%",
                    orderable: false,
                    searchable: false,
                    data: 'client',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.client+ '</p>';
                    }
                },
                {   
                    width:"15%",
                    data: 'valuation_type',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.valuation_type + '</p>';
                    }
                }, 
                {
                    width:"5%",
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    </script>
@endpush
