<div class="col-md-12">
    <div class="form-group">
        <label for="">Title <code>*</code></label>
        <input type="text" name="title" required value="{{ $branch->title ?? '' }}" id="title" class="form-control"
            placeholder="Title">
        @if ($errors->has('title'))
            <small class="text text-danger">{{ $errors->first('title') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="">Location <code>*</code></label>
        <input type="text" name="location" required value="{{ $branch->location ?? '' }}" id="location" class="form-control" placeholder="Location">
        @if ($errors->has('location'))
            <small class="text text-danger">{{ $errors->first('location') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="">Bank</label>
        <select name="bank_id" required class="form-control" id="">
            @if (isset($banks))
                @foreach ($banks as $bank)
                    <option @if ((isset($branch) && $branch->bank_id == $bank->id) || old('bank_id') == $bank->id)
                            selected
                    @endif value="{{ $bank->id }}">{{ $bank->name }} </option>
                @endforeach
            @endif
        </select>
        @if ($errors->has('bank_id'))
            <small class="text-danger">{{ $errors->first('bank_id') }}</small>
        @endif
    </div>
    <div class="submit-btn text-right">
        <button class="btn btn-primary">Submit</button>
    </div>
</div>
