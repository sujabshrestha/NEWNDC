<div class="row">

    {{-- <div class="form-group col-md-12 mb-2">
        <label style="color: #dc1de9;margin-bottom: 0px;">
            <h6><b>1 GENERAL DETAILS</b></h6>
        </label>
    </div>

    <div class="form-group col-md-3 pr-0">
        <label for="reg_no">Registration Id</label>
        <input type="text" name="reg_no" readonly value="{{ $sitevisit->registration_id ?? old('reg_no') }}"
            id="reg_no" required="" class="form-control" tabindex="-1" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
        <select class="form-control selectbox" name="valuation_type" id="valuationType" required="" valuationtype=""
            autofocus="">
            <option disabled selected>Select Valuation Type</option>
            <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Land') selected @endif value="Land">Land Only</option>
            <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Land_Building') selected @endif value="Land_Building">Land &amp; Building</option>
            <option @if (isset($sitevisit) && $sitevisit->valuation_type == 'Apartment') selected @endif value="Apartment">Appartment</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="bankId">Bank <span class="text-danger">*</span></label>
        <select class="form-control selectbox" readonly name="bank_id" id="bankId" required="">
            <option disabled selected> Select Bank </option>
            @if (isset($banks))
                @foreach ($banks as $bank)
                    <option @if ((isset($sitevisit) && $sitevisit->bank_id == $bank->id) || (isset($proposal) && $proposal->bank_id == $bank->id)) selected readonly @endif value="{{ $bank->id }}">
                        {{ $bank->name }}</option>
                @endforeach
            @endif


        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="branchId">Branch <span class="text-danger">*</span></label>
        <select class="form-control selectbox" readonly name="branch_id" id="branchId" required="">
            <option disabled selected> Select Branch </option>

            @if (isset($branches))
                @foreach ($branches as $branch)
                    <option @if ((isset($sitevisit) && $sitevisit->branch_id == $branch->id) || (isset($proposal) && $proposal->branch_id == $branch->id)) selected readonly @endif value="{{ $branch->id }}">
                        {{ $branch->title }}</option>
                @endforeach
            @endif
        </select>
    </div>
     <div class="form-group col-md-2">
        <label for="file_no">File No <span class="text-danger">*</span> </label>
        <input type="number" name="file_no" id="file_no" value="{{ $sitevisit->file_no ?? old('file_no') }}"
            required="" placeholder="File No" class="form-control" autocomplete="off">
     </div> --}}
    {{-- <div class="form-group col-md-3">
        <label for="siteEngineerId">Site Engineer <span class="text-danger">*</span></label>
        <select class="form-control selectbox" readonly name="site_engineer" id="TxtSiteEngineerId" required="">
            <option disabled selected> Select Site Engineer </option>
            @if (isset($siteengineers))
                @foreach ($siteengineers as $user)
                    <option @if ((isset($sitevisit) && $sitevisit->site_engineer_id == $user->id) || (isset($proposal) && $proposal->site_engineer == $user->id)) selected @endif value="{{ $user->id }}">
                        {{ $user->name }}</option>
                @endforeach
            @endif

        </select>
    </div>
    <div class="form-group col-md-4">
        <label> Client <span class="text-danger">*</span></label>
        <select name="client_id" readonly class="form-control" id="">

            @if (isset($clients))
                @foreach ($clients as $client)
                    <option @if ((isset($sitevisit) && $sitevisit->client_id == $client->id) || (isset($proposal) && $proposal->client_id == $client->id)) selected @endif value="{{ $client->id }}">
                        {{ $client->client_name }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="form-group col-md-5">
        <label>
            Owner Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="owner_name" value="{{ $sitevisit->owner_name ?? old('owner_name') }}"
            placeholder="Owner Name" class="form-control" id="">
    </div>
    <div class="form-group col-md-3">
        <label>
            Market Rate
        </label>
        <input type="text" name="market_rate" value="{{ $sitevisit->market_rate ?? old('market_rate') }}"
            id="market_rate" value="" placeholder="Market Rate" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>BM Name</label>
        <input type="text" name="bm_name" value="{{ $sitevisit->bm_name ?? old('bm_name') }}" id="TxtBMName"
            value="" placeholder="BM Name" required="" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            BM Contact No
        </label>
        <input type="text" name="bm_contact" value="{{ $sitevisit->bm_contact ?? old('bm_contact') }}"
            id="TxtBMContactNo" required="" value="" placeholder="BM Contact No" class="form-control"
            autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>RM Name</label>
        <input type="text" name="rm_name" value="{{ $sitevisit->rm_name ?? old('rm_name') }}" id="TxtRMName"
            value="" placeholder="RM Name" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            RM Contact No
        </label>
        <input type="text" name="rm_contact " value="{{ $sitevisit->rm_contact ?? old('rm_contact') }}"
            id="TxtRMContactNo" value="" placeholder="RM Contact No" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            Type of road
        </label>
        <select name="type_of_road" class="form-control" id="">
            <option @if (isset($sitevisit) && $sitevisit->type_of_road == 'Earthern') selected @endif value="Earthern">Earthern</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_road == 'RCC') selected @endif value="RCC">RCC</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_road == 'Gravel') selected @endif value="Gravel">Gravel</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_road == 'Goreto') selected @endif value="Goreto">Goreto</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label>
            Type of road end
        </label>
        <select name="type_of_road_end" class="form-control" id="">

            <option value="Dead_End">Dead End</option>
            <option value="Throughout">Throughout</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label>
            Type of land
        </label>
        <select name="type_of_land" class="form-control" id="">
            <option @if (isset($sitevisit) && $sitevisit->type_of_land == 'Planning') selected @endif value="Planning">Planning</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_land == 'Flat') selected @endif value="Flat">Flat</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_land == 'Khet') selected @endif value="Khet">Khet</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_land == 'Slightly_Slope') selected @endif value="Slightly_Slope">Slightly Slope</option>
            <option @if (isset($sitevisit) && $sitevisit->type_of_land == 'Low_Land') selected @endif value="Low_Land">Low Land </option>

        </select>
    </div>
    <div class="form-group col-md-3">
        <label>
            Category Of property
        </label>
        <select name="category_of_property" class="form-control" id="">
            <option @if (isset($sitevisit) && $sitevisit->category_of_property == 'Residential') selected @endif value="Residential">Residential</option>
            <option @if (isset($sitevisit) && $sitevisit->category_of_property == 'Commercial') selected @endif value="Commercial">Commercial</option>
            <option @if (isset($sitevisit) && $sitevisit->category_of_property == 'Commercial_Residential') selected @endif value="Commercial_Residential">
                Commercial_Residential</option>
            <option @if (isset($sitevisit) && $sitevisit->category_of_property == 'Other') selected @endif value="Other">Other</option>
        </select>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Road Size
            </label>
            <input type="text" name="road_size" value="{{ $sitevisit->road_size ?? old('road_size') }}"
                id="roadSize" value="" placeholder="Road size" class="form-control" autocomplete="off">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Ward Number
            </label>
            <input type="text" name="ward_number" value="{{ $sitevisit->ward_no ?? old('ward_number') }}"
                id="ward_number" value="" placeholder="Ward Number" class="form-control" autocomplete="off">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Boundary</label>
            <select name="boundary" class="form-control" id="">
                <option @if (isset($sitevisit) && $sitevisit->boundary == 1) selected @endif value="1">Yes</option>
                <option @if (isset($sitevisit) && $sitevisit->boundary == 0) selected @endif value="0">No</option>
            </select>
        </div>
    </div> --}}
    {{-- <div class="col-md-1">
        <div class="form-group">
            <label for="">Boundary</label>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                    <input name="sitevisitboundary" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div> --}}


    {{-- <div class="col-md-6">
        <div class="form-group">
            <label for="">Compound Wall</label>
            <select name="compound_wall" class="form-control" id="">
                <option @if (isset($sitevisit) && $sitevisit->compound_wall == 1) selected @endif value="1">Yes</option>
                <option @if (isset($sitevisit) && $sitevisit->compound_wall == 0) selected @endif value="0">No</option>
            </select>
        </div>
    </div> --}}
    {{-- <div class="col-md-2">
        <div class="form-group">
            <label for="">Compound Wall</label>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <label class="switch s-icons s-outline  s-outline-secondary  mb-4 mr-2">
                    <input name="compoundwall" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-md-6">
        <div class="form-group">
            <label for="">Right of the row</label>
            <input type="text" name="right_of_row" value="{{ $sitevisit->right_of_row ?? '' }}"
                placeholder="Right of the row" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Land Revenue</label>
            <select name="land_revenue" class="form-control" id="">
                <option @if (isset($sitevisit) && $sitevisit->land_revenue == 1) selected @endif value="1">Yes</option>
                <option @if (isset($sitevisit) && $sitevisit->land_revenue == 0) selected @endif value="0">No</option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Rajinima Likhit</label>
            <select name="rajinima_likhit" class="form-control" id="">
                <option @if (isset($sitevisit) && $sitevisit->rajinima_likhit == 1) selected @endif value="1">Yes</option>
                <option @if (isset($sitevisit) && $sitevisit->rajinima_likhit == 1) selected @endif value="0">No</option>
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">Four boundary of site</label>
            <select name="fourboundary[]" multiple="" class="form-control text-capitalize" id="">
                @if (isset($fourboundaries))
                    @foreach ($fourboundaries as $fourboundary)
                        <option
                        @if (isset($sitevisit->fourBoundary))
                        @foreach ($sitevisit->fourBoundary as $sitefourboundary)
                        @if ($sitefourboundary->id == $fourboundary->id)
                            selected
                        @endif
                        @endforeach
                        @endif value="{{ $fourboundary->id }}">{{ $fourboundary->boundary }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="col-md-12 text-center mt-2 mb-2">
        <h3 class="text-capitalize">Deduct of road</h3>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Deduct on road</label>
            <input type="text" value="{{ $sitevisit->deduct_on_road ?? '' }}" name="deduct_on_road"
                placeholder="Deduct on road" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="">High tension line</label>
            <select name="high_tension_line" class="form-control" id="">
                <option @if (isset($sitevisit) && $sitevisit->high_tension_line == 1) selected @endif value="1">Yes</option>
                <option @if (isset($sitevisit) && $sitevisit->high_tension_line == 0) selected @endif value="0">No</option>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="">Boundary Correction</label>
            <input type="text" value="{{ $sitevisit->boundary_correction ?? '' }}" name="boundary_correction"
                placeholder="Boundary Correction" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Kulo/River</label>
            <input type="text" value="{{ $sitevisit->kulo_river ?? '' }}" name="kulo_river"
                placeholder="Kulo/River" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Land Development</label>
            <input type="text" value="{{ $sitevisit->land_development ?? '' }}" name="land_development"
                placeholder="Land Development" class="form-control">
        </div>
    </div> --}}


    {{-- <div class="col-md-12 mt-2 mb-2">
        <h5 class="text-capitalize"></h5>
    </div> --}}

    @if ($siteVisit->lalpurja == 1)
        <div class="col-md-4">
            <h6 for="">Lalpurja - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->lalpurja == 1)
        <div class="col-md-4">
            <h6>Napi Naki and Trace of land - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->citizenship_owner == 1)
        <div class="col-md-4">
            <h6 for="">Citizenship of owner property - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->citizenship_client == 1)
        <div class="col-md-4">
            <h6 for="">Citizenship client - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->org_char_killa_letter == 1)
        <div class="col-md-4">
            <h6 for="">Original Char Killa letter - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->approved_drawing_building == 1)
        <div class="col-md-4">
            <h6 for="">Approved Drawing of Building - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->ilajat_building == 1)
        <div class="col-md-4">
            <h6 for="">Ilajat of building - Required <span class="text-danger">*</span> </h6>
        </div>
    @endif

    @if ($siteVisit->sampan_building == 1)
        =
        <div class="col-md-4">
            <h6 for="">Sampan of building - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->company_registration_number == 1)
        <div class="col-md-4">
            <h6 for="">Company Registration Number - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->company_pan_number == 1)
        <div class="col-md-4">
            <h6 for="">Company PAN Number - Required <span class="text-danger">*</span></h6>
        </div>
    @endif

    @if ($siteVisit->citizenship_shareholder == 1)
        <div class="col-md-4">
            <h6 for="">Citizenship of Shareholder - Required <span class="text-danger">*</span></h6>
        </div>
    @endif
</div>
<hr>
<div class="row">
    <div class="form-group col-md-12 mb-2">
        <label style="color: #dc1de9;margin-bottom: 0px;">
            <h6><b>2 UPLOAD DOCUMENT</b></h6>
        </label>
    </div>
    <div class="col-12">
        <div class="col-4">
            <div class="form-group">
                <label for="status">Upload Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="Incompleted">Incomplete</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label>Upload Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="file" name="RegUploadPicture[]" id="RegUploadPicture" multiple="">
        <table class="table table-bordered dataTable" style="width:100%" id="TblRegUploadPicture">
            <thead class="thead-light">
                <tr>
                    <th scope="col" width="20">Sno</th>
                    <th scope="col">File Name <a href="#" class="text-danger" data-toggle="modal"
                            data-target="#ViewAllPictureModal"> View</a></th>
                    <th scope="col" width="30">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($siteVisit) && $siteVisit->documents->isNotEmpty())
                    @foreach ($siteVisit->documents as $document)
                        <tr>
                            <th scope="col" width="20">{{ $loop->iteration }}</th>
                            <th scope="col">{{ getFileTitle($document->file_id) ?? '' }} <a
                                    href="{{ url('/') . getOrginalUrl($document->file_id) }}" target="_blank"
                                    class="text-danger"> View</a></th>
                            <th scope="col" width="30">

                                <a href="{{ route('receptionist.valuation.docDelete', $document->id) }}">Delete</a>
                            </th>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="form-group col-md-6">
        <label>Upload Legal Scan Doc</label>
        <input type="file" name="RegUploadScanDocument[]" id="RegUploadScanDocument" multiple="">
        <table class="table table-bordered dataTable" style="width:100%" id="TblRegUploadScanDocument">
            <thead class="thead-light">
                <tr>
                    <th scope="col" width="20">Sno</th>
                    <th scope="col">File Name <a href="#" class="text-danger" data-toggle="modal"
                            data-target="#ViewAllScanModal"> View</a></th>
                    <th scope="col" width="30">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($siteVisit) && $siteVisit->legalscandocuments->isNotEmpty())
                    @foreach ($siteVisit->legalscandocuments as $document)
                        <tr>
                            <th scope="col" width="20">{{ $loop->iteration }}</th>
                            <th scope="col">{{ getFileTitle($document->file_id) ?? '' }} <a
                                    href="{{ url('/') . getOrginalUrl($document->file_id) }}" target="_blank"
                                    class="text-danger"> View</a></th>
                            <th scope="col" width="30"><a
                                    href="{{ route('receptionist.valuation.legalscandocDelete', $document->id) }}">
                                    Delete </a></th>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary float-right btn-sm" id="BtnSaveValuation">Submit</button>
    </div>
</div>
