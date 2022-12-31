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
        <select class="form-control selectbox" name="valuationType" id="valuationType" required=""
            valuationtype="" autofocus="">
            <option disabled selected>Select Valuation Type</option>
            <option value="Land Only">Land Only</option>
            <option value="Land &amp; Building">Land &amp; Building</option>
            <option value="Land Only">Appartment</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="bankId">Bank <span class="text-danger">*</span></label>
        <select class="form-control selectbox" name="bankId" id="bankId" required="">
            <option disabled selected> Select Bank </option>
            <option value="22">BANK OF KATHMANDU LTD.</option>
            <option value="20">CENTRAL FINANCE LTD.</option>
            <option value="26">CITIZEN INVESTMENT TRUST</option>
            <option value="27">EMPLOYEE PROVIDENT FUND</option>
            <option value="19">GARIMA BIKASH BANK LTD.</option>
            <option value="10">GLOBAL IME BANK LTD.</option>
            <option value="18">HIMALYAN BANK LTD.</option>
            <option value="24">KUMARI BANK LTD.</option>
            <option value="17">LUMBINI BIKASH BANK LTD.</option>
            <option value="44">Lumbini Bikash Bank Ltd.</option>
            <option value="41">Machhapuchchhre Bank Limited</option>
            <option value="13">MACHHAPUCHCHHRE BANK LTD.</option>
            <option value="28">Machhapuchchhre Bank Ltd.</option>
            <option value="16">MEGA BANK NEPAL LTD.</option>
            <option value="37">Mega Bank Nepal Ltd. </option>
            <option value="38">Muktinath Bikash Bank </option>
            <option value="21">MUKTINATH BIKASH BANK LTD.</option>
            <option value="14">NCC BANK LTD.</option>
            <option value="15">NEPAL BANK LTD.</option>
            <option value="9">NIC ASIA BANK LTD.</option>
            <option value="42">Pokhara Finance Ltd.</option>
            <option value="43">POKHARA FINANCE LTD.</option>
            <option value="8">PRABHU BANK LTD.</option>
            <option value="45">Prime Commercial Bank limited</option>
            <option value="39">Prime Commercial Bank Ltd.</option>
            <option value="40">PRIME COMMERCIAL BANK LTD.</option>
            <option value="25">SBI BANK NEPAL LTD.</option>
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
        <select class="form-control selectbox" name="siteEngineerId" id="TxtSiteEngineerId" required="">
            <option disabled selected> Select Site Engineer </option>
            <option value="1">admin</option>
            <option value="15">Ajay Sah</option>
            <option value="19">Er. Ajit Jha ( NEC N0 :-25705 "A'Civil ) </option>
            <option value="16">Anuj Das</option>
            <option value="22">Archana Paudayal</option>
            <option value="20">Balika Karki</option>
            <option value="21">Er.Manish Kumar Singh ( NEC NO :- 22588 "A' Civil) </option>
            <option value="17">Nirmal Shah</option>
            <option value="24">Sagar Rawal</option>
            <option value="23">Sarswati Dhakal</option>
            <option value="9">Suprita Deo</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>  Client Name <span class="text-danger">*</span></label>
        <input type="text" name="TxtCFullName" id="TxtCFullName" value="" required=""
            placeholder="Full Name" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>Client Address <span class="text-danger">*</span></label>
        <input type="text" name="TxtCAddress" id="TxtCAddress" value="" required=""
            placeholder="Client Address" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>Contact No<span class="text-danger">*</span></label>
        <input type="text" name="TxtCContactNo" id="TxtCContactNo" value="" required=""
            placeholder="Contact No" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            Owner Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="TxtOFullName" id="TxtOFullName" value="" required=""
            placeholder="Full Name" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>BM Name</label>
        <input type="text" name="TxtBMName" id="TxtBMName" value="" placeholder="BM Name" required=""
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            BM Contact No
        </label>
        <input type="text" name="TxtBMContactNo" id="TxtBMContactNo" required="" value=""
            placeholder="BM Contact No" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>RM Name</label>
        <input type="text" name="TxtRMName" id="TxtRMName" value="" placeholder="RM Name"
            class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
        <label>
            RM Contact No
        </label>
        <input type="text" name="TxtRMContactNo" id="TxtRMContactNo" value="" placeholder="RM Contact No"
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
