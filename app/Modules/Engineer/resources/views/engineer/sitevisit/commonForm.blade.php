<div class="row">

    <div class="form-group col-md-12 mb-2">
        <label style="color: #dc1de9;margin-bottom: 0px;">
            <h6><b>1 GENERAL DETAILS</b></h6>
        </label>
    </div>

    {{-- <div class="form-group col-md-3 pr-0">
        <label for="reg_no">Registration Id</label>
        <input type="text" name="reg_no" id="reg_no" required="" value=""
            class="form-control" readonly="" tabindex="-1" autocomplete="off">
    </div> --}}
    <div class="form-group col-md-3">
        <label for="valuationType">Valuation Type <span class="text-danger">*</span></label>
        <select class="form-control selectbox" name="valuation_type" id="valuationType" required=""
            valuationtype="" autofocus="">
            <option disabled selected>Select Valuation Type</option>
            <option value="Land Only">Land Only</option>
            <option value="Land &amp; Building">Land &amp; Building</option>
            <option value="Land Only">Appartment</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="bankId">Bank <span class="text-danger">*</span></label>
        <select class="form-control selectbox" name="bank_id" id="bankId" required="">
            <option disabled selected> Select Bank </option>
            @if(isset($banks))
            @foreach ($banks as $bank)

            <option value="{{ $bank->id }}">{{ $bank->title }}</option>
            @endforeach
            @endif


        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="branchId">Branch <span class="text-danger">*</span></label>
        <select class="form-control selectbox" name="branchId" id="branchId" required="">
            <option disabled selected> Select Branch </option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="file_no">File No <span class="text-danger">*</span> </label>
        <input type="text" name="file_no" id="file_no" value="{{ old('file_no') }}" required=""
            placeholder="File No" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label for="siteEngineerId">Site Engineer <span class="text-danger">*</span></label>
        <select class="form-control selectbox"  name="site_engineer" id="TxtSiteEngineerId" required="">
            <option disabled selected> Select Site Engineer </option>
            @if (isset($users))
            @foreach ($users as $user)


            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
            @endif

        </select>
    </div>
    <div class="form-group col-md-4">
        <label>  Client <span class="text-danger">*</span></label>
        <select name="client_id" class="form-control" id="">
            <option value=""></option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label>
            Owner Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="owner_name" placeholder="Owner Name" class="form-control" id="">
    </div>
    <div class="form-group col-md-3">
        <label>
            Market Rate
        </label>
        <input type="text" name="market_rate" id="market_rate" value="" placeholder="Market Rate"
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>BM Name</label>
        <input type="text" name="bm_name" id="TxtBMName" value="" placeholder="BM Name" required=""
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            BM Contact No
        </label>
        <input type="text" name="bm_contact" id="TxtBMContactNo" required="" value=""
            placeholder="BM Contact No" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>RM Name</label>
        <input type="text" name="rm_name" id="TxtRMName" value="" placeholder="RM Name"
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            RM Contact No
        </label>
        <input type="text" name="rm_contact" id="TxtRMContactNo" value="" placeholder="RM Contact No"
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            Type of road
        </label>
        <select name="type_of_road" class="form-control" id="">
            <option value=""></option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label>
            Type of land
        </label>
        <select name="type_of_land" class="form-control" id="">
            <option value=""></option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label>
            Category Of property
        </label>
        <select name="category_of_property" class="form-control" id="">
            <option value=""></option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label>
            Road Size
        </label>
        <input type="text" name="road_size" id="roadSize" value="" placeholder="Road size"
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            Ward Number
        </label>
        <input type="text" name="ward_number" id="ward_number" value="" placeholder="Ward Number"
            class="form-control" autocomplete="off">
    </div>
</div>
    <hr>
    <div class="row">
    <div class="form-group col-md-12 mb-2">
        <label style="color: #dc1de9;margin-bottom: 0px;">
            <h6><b>2 UPLOAD DOCUMENT</b></h6>
        </label>
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
            </tbody>
        </table>
    </div>

    <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary float-right btn-sm" id="BtnSaveValuation">Submit</button>
    </div>
</div>
