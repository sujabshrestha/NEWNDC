@extends('layouts.engineer.master')

@section('title', 'NDC | Dashboard')

@section('content')
    <h1>Welcome to site engineer dashboard</h1>

@endsection

@push('scripts')
    <script>
        $('#global-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('engineer.proposal.index') }}",
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
                        return '<p class="text-capitalize">' +row.client+ '</p>';
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
