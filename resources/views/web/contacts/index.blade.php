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

@section('content')
  <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
      <h1 class="entry-title">{{__('lang.contact')}}</h1>
    </div>

  </section>
<!-- Section: Have Any Question -->
<section class="divider" style="margin-top: 100px;margin-bottom:100px ">
  <div class="container pt-60 pb-60">
    <div class="section-title mb-60">
      <div class="row">
        <div class="col-md-12">
          <div class="esc-heading small-border text-center">
            <h4>{{ __('lang.have_questions') }}</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        @if(isset($setting->phone) && $setting->phone != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h5>{{ __('lang.call_us') }}</h5>
            <h6 class="text-gray d-ltr">{{ $setting->phone }}</h6>
          </div>
        </div>
        @endif
        @if(isset($setting->address) && $setting->address != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h5>{{ __('lang.address') }}</h5>
            <h6 class="text-gray">{{ $setting->address }}</h6>
          </div>
        </div>
        @endif
        @if(isset($setting->email) && $setting->email != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h5>{{ __('lang.email') }}</h5>
            <h6 class="text-gray">{{ $setting->email }}</h6>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>

<!-- Section Contact -->

<div class="col-xs-12">
  @if(session('contact_errors'))

    <span class="help-block" style="text-align:right">
                            @foreach (session('contact_errors') as $error)

        <strong style="color:#f00">{{ $error }}</strong><br>
      @endforeach

    </span>
  @elseif (session('contact_success'))
    <label class="alert alert-success text">تم إرسال رسالتك بنجاح , شكرا للتواصل</label>
  @endif
    @if(session()->has('success'))

      <h2 class="alert alert-success">{{ session('success') }}</h2>

    @endif
</div>

<section id="contact" class="divider bg-lighter">
  <div class="container pt-0 pb-0">
    <div class="section-content">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-8">
          <div class="contact-wrapper">
            <h5 class="line-bottom mt-0 mb-20">{{ __('lang.interested_discussing') }}</h5>
            <!-- Contact Form -->
            <form id="contact_form_contact" name="contact_form" action="{{ route('contact.save', $lang) }}" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">{{ __('lang.name') }} <small>*</small></label>
                    <input name="name" style="width: 100%" class="form-control" type="text" placeholder="{{ __('lang.name') }}" required="required">
                    <div id="failed_contact_page_name" class="help-block"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email">{{ __('lang.email') }} <small>*</small></label>
                    <input name="email" style="width: 100%" class="form-control required email" type="email" placeholder="{{ __('lang.email') }}" required="required">
                    <div id="failed_contact_page_email" class="help-block"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="details">{{ __('lang.details') }} *</label>
                <textarea name="details" class="form-control required" rows="5" placeholder="{{ __('lang.details') }}" required="required"></textarea>
                <div id="failed_contact_page_details" class="help-block"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">{{ __('lang.send') }}</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">{{ __('lang.reset') }}</button>
              </div>

            </form>

          </div>
          </div>
        </div>

        <div class="col-md-2"></div>
        {{--<div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0">--}}


            {{--<h2 class="light bordered">get in <span>touch</span></h2>--}}


            {{--<!-- Get in Touch Widget--}}
            {{--============================================= -->--}}
            {{--<div class="get-in-touch-widget">--}}

              {{--<ul class="list-unstyled">--}}
                {{--<li><i class="fa fa-phone"></i>(+09) 0323 750 4561</li>--}}
                {{--<li><i class="fa fa-envelope"></i><a href="#.">quickhelp@medicom.com</a></li>--}}
                {{--<li><i class="fa fa-globe"></i><a href="#.">www.medicom-clinic.com</a></li>--}}
                {{--<li><i class="fa fa-clock-o"></i>Mon - Sat 9:00am - 6:00 pm</li>--}}
                {{--<li><i class="fa fa-map-marker"></i>Envato Marketplace Melbourne Farlane St Sydney TF - 123456</li>--}}
              {{--</ul>--}}

            {{--</div>--}}


            {{--<!-- Social--}}
            {{--============================================= -->--}}
            {{--<ul class="social-rounded">--}}
              {{--<li><a href="#."><i class="fa fa-facebook"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-twitter"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-google-plus"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-dribbble"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-youtube"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-vimeo-square"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-linkedin"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-rss"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-pinterest"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-android"></i></a></li>--}}
              {{--<li><a href="#."><i class="fa fa-flickr"></i></a></li>--}}
            {{--</ul>--}}


        {{--</div>--}}

      </div>

    </div>
  </div>
</section>

  <div class="colourfull-row"></div>
@endsection
