<div class="row">


    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Bank Name</label>
            <input type="text" required class="form-control" id="name"
                value="{{ $bank->name ?? old('name') }}" placeholder="Enter Bank Name"
                name="name" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="swif_code">Swift Code</label>
            <input type="text" name="swift_code" value="{{ $bank->swift_code ?? '' }}"
                placeholder="Swift Name" class="form-control">
            @if ($errors->has('swif_code'))
                <small class="text-danger">{{ $errors->first('swif_code') }}</small>
            @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="phone">Bank Phone No.</label>
            <input type="number" required class="form-control" id="phone"
                value="{{ $bank->phone ?? old('phone') }}"placeholder="Enter Phone No" name="phone">
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="v">Bank Link</label>
            <input type="text" name="bank_link" value="{{ $bank->link ?? '' }}"
                placeholder="Bank Link" class="form-control">
            @if ($errors->has('bank_link'))
                <small class="text-danger">{{ $errors->first('bank_link') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="commercial_rate">Commercial rate</label>
            <input type="text" required class="form-control" id="commercial_rate" name="commercial_rate"
                value="{{ $bank->commercial_rate  ?? old('commercial_rate') }}"
                placeholder="Enter Commercial Rate" required>
            @error('commercial_rate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="government_rate">Government rate</label>
            <input type="text" required class="form-control" id="government_rate" name="government_rate"
                value="{{ $bank->government_rate  ?? old('government_rate') }}"
                placeholder="Enter Government Rate" required>
            @error('government_rate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>




</div>









<div class="row">
    <div class="col-md-12">
        <label for="remarks">Remarks</label>
        <textarea name="remarks" class="form-control" id="remarks" cols="30" rows="5">{{ $bank->remarks ?? old('remarks') }}</textarea>
    </div>
</div>

<button type="submit" class="btn btn-primary float-right mt-2">Submit</a>
    <button class="btn btn-danger float-right mt-2" data-dismiss="modal">Discard</button>
