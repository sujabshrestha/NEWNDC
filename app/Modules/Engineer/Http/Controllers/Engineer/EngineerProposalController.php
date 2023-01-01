<?php

namespace Engineer\Http\Controllers\Engineer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CMS\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Receptionist\Models\Proposal;
use Yajra\DataTables\Facades\DataTables;

class EngineerProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // try {
        if ($request->ajax()) {
            $datas = Proposal::where('site_engineer', auth()->user()->id)->with(['bank','branch', 'siteVisit'])->get();
            foreach($datas as $data){
                $data->branch = $data->branch->title;
                $data->bank = $data->bank->name;
                $data->client = $data->client_id;
            }

            return DataTables::of($datas)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="'. route('siteengineer.sitevisit.create', [$row->id, $row->siteVisit->id]) .'" data-url="#" data-id=' . $row->id . ' class="btn btn-info btn-sm" title="Add details"><i class="far fa-edit"></i></a>
                            <a href="javascript:void(0)" id="" data-id=' . $row->id . ' class="delete btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
                            ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $banks = Bank::all();
        return view('Engineer::engineer.proposal.index', compact('banks'));
    // } catch (\Exception $e) {
    //     Toastr::error($e->getMessage());
    //     return redirect()->back();
    // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
