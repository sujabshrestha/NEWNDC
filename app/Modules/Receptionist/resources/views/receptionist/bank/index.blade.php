@extends('layouts.reception.master')

@section('title', 'NDC | Bank')

@section('breadcrumb', 'Bank')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-18 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">Bank Table</h5>
                        {{-- <a href="{{ route('backend.user.trashedIndex') }}" class="btn btn-danger float-right "><i
                                    class="fa fa-trash"></i> Trash </a> --}}
                                    <button class="btn btn-success float-right " id="create" data-url="{{ route('receptionist.bank.create') }}">Create <i
                                        class="fa fa-plus"></i></button>
                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="global-table" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Bank</th>
                                    <th>Swift Code</th>
                                    <th>Status</th>
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
            ajax: "{{ route('receptionist.bank.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.name + '</p>';
                    }
                }, {
                    data: 'swift_code',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.swift_code + '</p>';
                    }
                },
                {
                    data: 'status',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.status+ '</p>';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    </script>
@endpush
