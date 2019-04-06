@extends('layouts.layout')
@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

  <meta property="og:title" content="الرئيسية"/>
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
@section('css')
  <style>
    .contact_marge_bootom{
      margin-bottom: 40px;
    }
    .div_contact{
      padding-top: 45px;
      padding-bottom: 17px;
    }

  </style>

@endsection
@section('js')
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&callback=initMap"></script>
  {{--<script>--}}
  {{--function initMap() {--}}
  {{--var lat = {{ $setting_lat }};--}}
  {{--var lon = {{ $setting_lon }}--}}
  {{--var myLatLng = {lat: lat, lng: lon };--}}

  {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
  {{--zoom: 18,--}}
  {{--center: myLatLng--}}
  {{--});--}}

  {{--var marker = new google.maps.Marker({--}}
  {{--position: myLatLng,--}}
  {{--map: map,--}}
  {{--title: 'Medline'--}}
  {{--});--}}
  {{--};--}}
  {{--</script>--}}
@endsection

@section('content')


  <section class="about-section-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
  </section>
  <!-- subheader begin -->
  <section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{asset("public/wp-content/uploads/sites/19/2017/06/subheader-3.jpg")}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12 contact_marge_bootom">
              <div class="">

              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            @if(isset($setting->phone) && $setting->phone != null)
              <div class="col-sm-12 col-md-4">
                <div class="contact-info text-center">
                  <i class="fa fa-phone fa-2x text-theme-colored col-af"></i>
                  <h3>{{ __('lang.call_us') }}</h3>
                  <h3 class="text-gray d-ltr">{{ $setting->phone }}</h3>
                </div>
              </div>
            @endif
            @if(isset($setting->address) && $setting->address != null)
              <div class="col-sm-12 col-md-4">
                <div class="contact-info text-center">
                  <i class="fa fa-map-marker fa-2x mb-10 text-theme-colored col-af"></i>
                  <h3>{{ __('lang.address') }}</h3>
                  <h3 class="text-gray">{{ $setting->address }}</h3>
                </div>
              </div>
            @endif
            @if(isset($setting->email) && $setting->email != null)
              <div class="col-sm-12 col-md-4">
                <div class="contact-info text-center">
                  <i class="fa fa-envelope fa-2x mb-10 text-theme-colored col-af"></i>
                  <h3>{{ __('lang.email') }}</h3>
                  <h3 class="text-gray">{{ $setting->email }}</h3>
                </div>
              </div>
            @endif

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- subheader close -->

  <!-- Section Contact -->
  <section id="contact" class="divider bg-lighter div_contact">
    <div class="container-fluid pt-0 pb-0">
      <div class="section-content">
        <div class="row">
          <div class="col-xs-0 col-sm-0 col-md-3"></div>
          <div class="col-sm-12 col-md-6">
            <div class="contact-wrapper">
              <h3 class="line-bottom mt-0 mb-20">{{ __('lang.interested_discussing') }}</h3>
              <!-- Contact Form -->
              <div class="col-12">
                @if(session()->has('success_msg'))
                  <div class="alert alert-success">
                    {{ session()->get('success_msg') }}
                  </div>
                @endif

                @if(session()->has('error'))
                  <div class="alert alert-danger">
                    {{ session()->get('error') }}
                  </div>
                @endif
              </div>

              <form id="contact_form_contact" name="contact_form" action="{{ route('contact.save', $lang) }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name">{{ __('lang.name') }} <small>*</small></label>
                      <input name="name" class="form-control" type="text" placeholder="{{ __('lang.name') }}" required="required">
                      <div id="failed_contact_page_name" class=""></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">{{ __('lang.email') }} <small>*</small></label>
                      <input name="email" class="form-control required email" type="email" placeholder="{{ __('lang.email') }}" required="required">
                      <div id="failed_contact_page_email" class=""></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="details">{{ __('lang.details') }} *</label>
                  <textarea name="details" class="form-control required" rows="5" placeholder="{{ __('lang.details') }}" required="required"></textarea>
                  <div id="failed_contact_page_details" class=""></div>
                </div>
                {{--  <div class="row">
                   <div class="col-md-4"></div>
                   <div class="form-group col-md-4">
                     <div class="captcha">
                       <span>{!! captcha_img() !!}</span>
                       <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-4"></div>
                   <div class="form-group col-md-4">
                     <input id="captcha" type="text" required class="form-control" placeholder="Enter Captcha" name="captcha"></div>
                 </div> --}}
                @include('web.contacts.captcha')
                @if (session('contact_captcha'))
                  <span class="" style="text-align:center">
                                        <strong style="color:#a94442">{{ session('contact_captcha') }}</strong>
                                    </span>
                @endif
                <br>



                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">{{ __('lang.send') }}</button>
                  <button type="reset" class="btn btn-danger btn-flat btn-theme-colored ">{{ __('lang.reset') }}</button>
                </div>
              </form>
              @if(session('contact_errors'))

                <span class="" style="text-align:right">
                            @foreach (session('contact_errors') as $error)

                    <strong style="color:#f00">{{ $error }}</strong><br>
                  @endforeach
                            </span>
              @elseif (session('contact_success'))
                <label class="alert alert-success">تم إرسال رسالتك بنجاح , شكرا للتواصل</label>
              @endif
            </div>
          </div>
          <div class="col-xs-0 col-sm-0 col-md-3"></div>

        </div>
      </div>
    </div>
  </section>


@endsection
