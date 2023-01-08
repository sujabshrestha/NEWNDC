@extends('layouts.engineer.master')

@section('title', 'NDC | Proposal')

@section('breadcrumb', 'Proposal')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-18 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">Proposal Table</h5>
                        {{-- <a href="{{ route('backend.user.trashedIndex') }}" class="btn btn-danger float-right "><i
                                    class="fa fa-trash"></i> Trash </a> --}}
                                    {{-- <button class="btn btn-success float-right " id="create" data-url="{{ route('backend.cms.proposal.create') }}">Create <i
                                        class="fa fa-plus"></i></button> --}}
                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="global-table" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Bank</th>
                                    <th>Branch</th>
                                    <th>Banker Name</th>
                                    <th>Client</th>
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
            ajax: "{{ route('siteengineer.proposal.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'bank',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' + row.bank.name + '</p>';
                    }
                }, {
                    data: 'branch',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.branch.title + '</p>';
                    }
                },
                {
                    data: 'banker_name',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.banker_name+ '</p>';
                    }
                },
                {
                    data: 'client',
                    render: function(data, type, row) {
                        return '<p class="text-capitalize">' +row.client.client_name+ '</p>';
                    }
                },
                {
                    width:"15%",
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    </script>
@endpush
