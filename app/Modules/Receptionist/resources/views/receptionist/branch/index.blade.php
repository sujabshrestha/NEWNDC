@extends('layouts.reception.master')

@section('title', 'NDC | Branch')

@section('breadcrumb', 'Branch')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="">
        <div class="row layout-top-spacing">
            <div class="col-xl-8 col-lg-18 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">Branch Table</h5>
                        {{-- <a href="{{ route('backend.user.trashedIndex') }}" class="btn btn-danger float-right "><i
                                    class="fa fa-trash"></i> Trash </a> --}}

                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="global-table" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Name</th>
                                    <th>Bank</th>
                                    <th>location</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 layout-spacing">
                <div class="widget">
                    <div class="widget-header row mb-2">
                        <div class="col-md-12">
                            <h2>Create Branch</h2>
                        </div>

                    </div>
                    <form action="{{ route('receptionist.branch.store') }}" id="submit-form">
                        @csrf
                        @include('Receptionist::receptionist.branch.commonform')
                    </form>
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
            ajax: "{{ route('receptionist.branch.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.title + '</p>';
                    }
                }, {
                    data: 'branch',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.branch+ '</p>';
                    }
                },
                {
                    data: 'location',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.location+ '</p>';
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
