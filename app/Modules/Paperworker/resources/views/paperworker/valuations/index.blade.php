@extends('layouts.paperworker.master')

@section('title', 'NDC | Valuation')

@section('breadcrumb', 'Valuation ')

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-18 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-12">
                        <h5 style="display: inline;">Valuation Table</h5>
                        {{-- <a href="{{ route('backend.user.trashedIndex') }}" class="btn btn-danger float-right "><i
                                    class="fa fa-trash"></i> Trash </a> --}}
                                    {{-- <a class="btn btn-success float-right" href="{{ route('backend.sitevisit.create') }}">Create <i
                                        class="fa fa-plus"></i></a> --}}
                    </div>
                    <hr>
                    <div class="row col-md-12">
                        <div class="d-flex ml-4">
                            <button class="btn btn-primary ml-2 finalValuation filterValuation" >Final Valuation <span class="badge badge-light">{{$finalvaluationCount}}</span></button>
                            <button class="btn btn-secondary ml-2 preValuation filterValuation" >Pre-Valuation <span class="badge badge-light">{{$prevaluationCount}}</span></button>
                            <button class="btn btn-danger ml-2 cancelValuation filterValuation">Canceled Valuation<span class="badge badge-light">{{$cancelvaluationCount}}</button>
                            <button class="btn btn-info ml-2 latestValuation filterValuation">Latest Valuation </span></button>


                        {{-- </div>
                        <div class="col-md-2">


                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2">
                         </div> --}}

                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="global-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Action</th>
                                    <th>Bank</th>
                                    <th>Branch</th>
                                    <th>Banker Name</th>
                                    <th>Client</th>
                                    <th>Status</th>
                                   
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
        // if(($('.filterValuation').data('value') != null)){
        //     data = $(this).data('value');
        // }



        $('#global-table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('paperworker.valuation.index') }}",
                data: function (d) {
                    d.filterValuation = data;
                }
            } ,

            columns: [{
                    width: '1%',
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
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
                    data: 'valuation_status',
                    name: 'valuation_status',
                    orderable: true,
                    searchable: true
                },
               
            ]
        });
        $(document).on('click','.finalValuation',function(e){
            e.preventDefault();
            $('.preValuation').removeAttr('data-value','');
            $('.cancelValuation').removeAttr('data-value','');
            $('.latestValuation').removeAttr('data-value','');
            $('.filterValuation').each(function(index, value) {
                if(($(this).data('value') != null)){
                    data = "Final-Valuation";
                }
            });
            $('#global-table').DataTable().draw(true);
        })

        $(document).on('click','.preValuation',function(e){
            e.preventDefault();
            $('.finalValuation').removeAttr('data-value','');
            $('.cancelValuation').removeAttr('data-value','');
            $('.latestValuation').removeAttr('data-value','');
            $(this).attr('data-value',"Pre-Valuation");
            data="Pre-Valuation";
            $('.filterValuation').each(function(index, value) {
                if(($(this).data('value') != null)){
                    data="Pre-Valuation";
                }
            });
            $('#global-table').DataTable().draw(true);

        });
        $('.cancelValuation').click(function(){
            $(this).attr('data-value',"Cancel-Valuation");
            $('.preValuation').removeAttr('data-value','');
            $('.finalValuation').removeAttr('data-value','');
            $('.latestValuation').removeAttr('data-value','');
            $('.filterValuation').each(function(index, value) {
                if(($(this).data('value') != null)){
                    data="Cancel-Valuation";
                }
            });
            $('#global-table').DataTable().draw(true);

        });
        $('.latestValuation').click(function(){
            $('.preValuation').removeAttr('data-value','');
            $('.cancelValuation').removeAttr('data-value','');
            $('.finalValuation').removeAttr('data-value','');
            $(this).attr('data-value',"latest-Valuation");
            $('.filterValuation').each(function(index, value) {
                if(($(this).data('value') != null)){
                    data="latest-Valuation";
                }
            });
            $('#global-table').DataTable().draw(true);

        });
    </script>

    <script>
        $(document).on('change', '.valuationStatus', function() {
        event.preventDefault();
        var id = $(this).attr('data-id');
        var editUrl = "{{ route('backend.admin.sitevisit.changeValuationStatus', ':id') }}";
        myUrl = editUrl.replace(':id', id);
        var status = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
                type: 'POST',
                url: myUrl,
                data:{ 'valuation_status':status} ,
                success: function(data) {
                    console.log(data);
                    $('.finalValuation span').text(data.data.final);
                    $('.preValuation span').text(data.data.pre);
                    $('.cancelValuation span').text(data.data.cancel);
                    toastr.success(data.message);

                    $('#global-table').DataTable().ajax.reload();
                },
            });
        });
    </script>
@endpush
