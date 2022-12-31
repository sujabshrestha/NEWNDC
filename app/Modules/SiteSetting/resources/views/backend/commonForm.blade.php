<div class="col-md-12">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="title">Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title"
                value="{{ returnSiteSetting('title') ?? old('title') }}" name="title" placeholder="Enter Title"
                required>
            @error('title')
                <div class="text-danger">
                    {{ $errors->first('title') }}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="site_description">Site Description <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="site_description"
                value="{{ returnSiteSetting('site_description') ?? old('site_description') }}"
                name="site_description" placeholder="Enter site_description" required>
            @error('site_description')
                <div class="text-danger">
                    {{ $errors->first('site_description') }}
                </div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">

            <label for="primary_phone">Primary Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="primary_phone" name="primary_phone"
                value="{{ returnSiteSetting('primary_phone') ?? old('primary_phone') }}"
                placeholder="Enter Primary Phone " required>
            @error('primary_phone')
                <div class="text-danger">
                    {{ $errors->first('primary_phone') }}
                </div>
            @enderror

        </div>
        <div class="form-group col-md-6">

            <label for="secondary_phone">Secondary Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="secondary_phone" name="secondary_phone"
                value="{{ returnSiteSetting('secondary_phone') ?? old('secondary_phone') }}"
                placeholder="Enter Secondary Phone" required>
            @error('secondary_phone')
                <div class="text-danger">
                    {{ $errors->first('secondary_phone') }}
                </div>
            @enderror

        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">

            <label for="primary_email">Primary Email <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="primary_email" name="primary_email"
                value="{{ returnSiteSetting('primary_email') ?? old('primary_email') }}"
                placeholder="Enter Primary Email" required>
            @error('primary_email')
                <div class="text-danger">
                    {{ $errors->first('primary_email') }}
                </div>
            @enderror

        </div>
        <div class="form-group col-md-6">

            <label for="address">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="address" name="address"
                value="{{ returnSiteSetting('address') ?? old('address') }}" placeholder="Enter Address" required>
            @error('address')
                <div class="text-danger">
                    {{ $errors->first('address') }}
                </div>
            @enderror

        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">

            <label for="whatsapp">WhatsApp Phone No.<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                value="{{ returnSiteSetting('whatsapp') ?? old('whatsapp') }}"
                placeholder="Enter Public Entity Name" required>
            @error('whatsapp')
                <div class="text-danger">
                    {{ $errors->first('whatsapp') }}
                </div>
            @enderror

        </div>
        <div class="form-group col-md-6">

            <label for="facebook_link">Facebook Link <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                value="{{ returnSiteSetting('facebook_link') ?? old('facebook_link') }}"
                placeholder="Enter facebook_link" required>
            @error('facebook_link')
                <div class="text-danger">
                    {{ $errors->first('facebook_link') }}
                </div>
            @enderror

        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">

            <label for="twitter_link">Twitter Link <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                value="{{ returnSiteSetting('twitter_link') ?? old('twitter_link') }}"
                placeholder="Enter twitter_link" required>
            @error('twitter_link')
                <div class="text-danger">
                    {{ $errors->first('twitter_link') }}
                </div>
            @enderror

        </div>
        <div class="form-group col-md-6">

            <label for="instagra_link">Instagram Link <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="instagra_link" name="instagra_link"
                value="{{ returnSiteSetting('instagra_link') ?? old('instagra_link') }}"
                placeholder="Enter instagra_link" required>
            @error('instagra_link')
                <div class="text-danger">
                    {{ $errors->first('instagra_link') }}
                </div>
            @enderror

        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="about_us">About Us<span class="text-danger"> *</span></label>
            <textarea type="text" class="form-control summernote" id="about_us" name="about_us" placeholder="Enter Site Description"
                required>
                    {!! old('about_us') ??  returnSiteSetting('about_us') !!}
                </textarea>
            @error('about_us')
                <div class="text-danger">
                    {{ $errors->first('about_us') }}
                </div>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="terms_and_conditions">Terms & Conditions</label>
            <textarea type="text" class="form-control summernote" id="terms_and_conditions" name="terms_and_conditions" placeholder="Enter Terms & Conditions">
                    {!!  old('terms_and_conditions') ?? returnSiteSetting('terms_and_conditions') !!}
                </textarea>
            @error('terms_and_conditions')
                <div class="text-danger">
                    {{ $errors->first('terms_and_conditions') }}
                </div>
            @enderror
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <div class="custom-file-container" data-upload-id="mysiteLogo">
                    <label>Site Logo <a href="javascript:void(0)" class="custom-file-container__image-clear"
                            title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" class="custom-file-container__custom-file__custom-file-input " accept="image/*"
                            name="logo" id="siteLogo">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="custom-file-container" data-upload-id="siteFavIcon">
                    <label>Site Favicon <a href="javascript:void(0)" class="custom-file-container__image-clear"
                            title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" class="custom-file-container__custom-file__custom-file-input " accept="image/*"
                            name="favicon" id="siteFavIcon">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <div class="custom-file-container" data-upload-id="aboutUsImage">
                    <label>About Us Image <a href="javascript:void(0)" class="custom-file-container__image-clear"
                            title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" class="custom-file-container__custom-file__custom-file-input " accept="image/*"
                            name="about_us_image" id="aboutUsImage">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
            </div>
        </div>
    </div>


</div>
