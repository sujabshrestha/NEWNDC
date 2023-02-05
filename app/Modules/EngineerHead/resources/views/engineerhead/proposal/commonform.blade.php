<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="bank">Bank</label>
            <select name="bank_id" required class="form-control" id="bank">
                <option selected disabled>Select Bank</option>
                @if (isset($banks))
                    @foreach ($banks as $bank)
                        <option @if ((isset($proposal) && $proposal->bank_id == $bank->id) || old('bank_id') == $bank->id) selected @endif value="{{ $bank->id }}">
                            {{ $bank->name }} </option>
                    @endforeach
                @endif
            </select>
            @if ($errors->has('bank_id'))
                <small class="text-danger">{{ $errors->first('bank_id') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="branch">Branch</label>
            <select name="branch_id" required class="form-control text-capitalize" id="">
                @if (isset($branches))
                    @foreach ($branches as $branch)
                        <option @if ((isset($proposal) && $proposal->branch_id == $branch->id) || old('branch_id') == $branch->id) selected @endif value="{{ $branch->id }}">
                            {{ $branch->title }} </option>
                    @endforeach
                @endif

            </select>
            @if ($errors->has('branch_id'))
                <small class="text-danger">{{ $errors->first('branch_id') }}</small>
            @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="banker_name">Banker Name</label>
            <input type="text" required class="form-control" id="banker_name"
                value="{{ $proposal->banker_name ?? old('banker_name') }}" placeholder="Enter Banker Name"
                name="banker_name" required>
            @error('banker_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="banker_contact">Banker Phone No.</label>
            <input type="number" required class="form-control" id="phone_no"
                value="{{ $proposal->banker_contact ?? old('phone_no') }}"placeholder="Enter Phone No" name="phone_no">
            @error('phone_no')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="client_id">Client Name</label>
            <input type="text" name="client_name" value="{{ $proposal->client->client_name ?? '' }}"
                placeholder="Client Name" class="form-control">
            @if ($errors->has('client_name'))
                <small class="text-danger">{{ $errors->first('client_name') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="client_id">Client Phone</label>
            <input type="text" name="client_phone" value="{{ $proposal->client->contact_no ?? '' }}"
                placeholder="Client Phone" class="form-control">
            @if ($errors->has('client_phone'))
                <small class="text-danger">{{ $errors->first('client_phone') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="property_location">Property Location</label>
            <input type="text" required class="form-control" id="property_location" name="property_location"
                value="{{ $proposal->client->address ?? old('property_location') }}"
                placeholder="Enter Property Location" required>
            @error('property_location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="site_visited_by">Site Engineer</label>
            <select name="site_engineer" class="form-control text-capitalize" id="">
                <option value="">Not assigned</option>
                @if (isset($siteengineers))
                    @foreach ($siteengineers as $siteengineer)
                        <option value="{{ $siteengineer->id }}" @if (isset($proposal) && $proposal->site_engineer == $siteengineer->id) selected @endif>
                            {{ $siteengineer->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    @if (isset($proposal))
    <div class="col-md-4">
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" required id="status" name="status">
                <option selected>Select Status</option>
                <option @if ($proposal->status == 'Pending') selected @endif value="pending">Pending
                </option>
                <option @if ($proposal->status == 'Completed') selected @endif value="completed">Completed
                </option>
            </select>
        </div>
    </div>
@endif



</div>









<div class="row">
    <div class="col-md-12">
        <label for="remarks">Remarks</label>
        <textarea name="remarks" class="form-control" id="remarks" cols="30" rows="5">{{ $proposal->remarks ?? old('remarks') }}</textarea>
    </div>
</div>

<button type="submit" class="btn btn-primary float-right mt-2">Submit</a>
    <button class="btn btn-danger float-right mt-2" data-dismiss="modal">Discard</button>
