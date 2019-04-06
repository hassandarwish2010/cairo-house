@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@section('js')
<script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
  });
</script>
@endsection

<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="en_title">{{ __('lang.en_title') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                <input type="text" class="form-control" id="en_title" placeholder="{{ __('lang.en_title') }}" name="en_title" value="@if(old('en_title') != null){{ old('en_title') }}@elseif(isset($banner)){{$banner->en_title}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('en_title'))
                <span class="help-block">
                    <strong>{{ $errors->first('en_title') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="ar_title">{{ __('lang.ar_title') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-tag"></i></div>
                <input type="text" class="form-control" id="ar_title" placeholder="{{ __('lang.ar_title') }}" name="ar_title" value="@if(old('ar_title') != null){{ old('ar_title') }}@elseif(isset($banner)){{$banner->ar_title}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('ar_title'))
                <span class="help-block">
                    <strong>{{ $errors->first('ar_title') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <label for="image">{{ __('lang.image') }} @isset($banner) @else * @endisset</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="ti-gallery"></i></div>
              <input type="file" class="form-control" id="image" name="image">
          </div>
          @isset($banner)
            <img src="{{ $banner->image }}" alt="{{ $banner->en_title }}" class="thumb-image">
          @endisset
          <div class="input-group">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
          </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="white-box">
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                <label for="en_description">{{ __('lang.en_description') }} *</label>
                <textarea id="editor1" name="en_description" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.en_description') }}">@if(old('en_description') != null){{ old('en_description') }}@elseif(isset($banner->en_description)){{$banner->en_description}}@endif</textarea>
                @if ($errors->has('en_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('en_description') }}</strong>
                    </span>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="white-box">
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                <label for="ar_description">{{ __('lang.ar_description') }} *</label>
                <textarea id="editor2" name="ar_description" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.ar_description') }}">@if(old('ar_description') != null){{ old('ar_description') }}@elseif(isset($banner->ar_description)){{$banner->ar_description}}@endif</textarea>
                @if ($errors->has('ar_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ar_description') }}</strong>
                    </span>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
