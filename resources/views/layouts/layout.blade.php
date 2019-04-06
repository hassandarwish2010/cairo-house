<!doctype html>

<html>

<head>
 <title>CairoHouse/@yield('title')</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Typical Design">
 @yield('meta')
 <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">

 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">



 <!-- CSS

  ================================================== -->


 <!-- Theme Color
 ============================================= -->
 <link rel="stylesheet" id="color" href="{{ asset('public/css/blue.css') }}">


 <!-- Medicom Style
 ============================================= -->
 <link rel="stylesheet" href="{{ asset('public/css/medicom.css') }}">


 <!-- Bootstrap
 ============================================= -->
 <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">


 <link href="{{ asset('public/css/light.css') }}" rel="stylesheet" id="choose-theme">

 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
 <link rel="stylesheet" href="{{ asset('public/web/css/en/custom.css') }}">
 <script src="{{ asset('public/js/modernizr-2.6.2.min.js') }}"></script>
 @isset($lang)
  @if($lang == 'ar')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="{{ asset('public/web/css/ar/style.css') }}">
   <link rel="stylesheet" href="{{ asset('public/web/css/ar/custom.css') }}">

   <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
 @endif
@endisset

 @yield('css')
<!-- Fancybox -->

 <link type="text/css" rel='stylesheet' href="{{ asset('public/js/fancybox/jquery.fancybox.css') }}">
 <!-- End Fancybox -->
 <!-- Fancybox -->

 <!-- End Fancybox -->
 <style>
.doctors-list a{
 color: #c95672;
}
.light a{
 color: #0b0b0b;
}
  @media all and(min-width:0px) and(max-width:650px) {
   .head{
    float: none !important;
   }

  }
 </style>


</head>

<body class="fixed-header">

<div id="wrapper" class="clearfix">
@include('layouts.navbar')
{{--@include('layouts.header')--}}
{{--@include('layouts.slider')--}}
{{--@include('layouts.blog')--}}
{{--@include('layouts.informations')--}}
{{--@include('layouts.products')--}}
{{--@include('layouts.discover')--}}
{{--@include('layouts.news')--}}
@yield('content')
@include('layouts.footer')


</div>
</div>

<!-- All Javascript
============================================= -->
<script src="{{ asset('public/js/jquery.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.stellar.js') }}"></script>
<script src="{{ asset('public/js/jquery-ui-1.10.3.custom.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.js') }}"></script>
<script src="{{ asset('public/js/counter.js') }}"></script>
<script src="{{ asset('public/js/waypoints.js') }}"></script>
<script src="{{ asset('public/js/jquery.uniform.js') }}"></script>
<script src="{{ asset('public/js/easyResponsiveTabs.js') }}"></script>
{{--<script src="{{ asset('public/js/jquery.fancybox.pack.js') }}"></script>--}}
{{--<script src="{{ asset('public/js/jquery.fancybox-media.js') }}"></script>--}}
<script src="{{ asset('public/js/jquery.mixitup.js') }}"></script>
<script src="{{ asset('public/js/forms-validation.js') }}"></script>
<script src="{{ asset('public/js/video.js') }}"></script>
<script src="{{ asset('public/js/jquery.jcarousel.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('public/js/scripts.js') }}"></script>

<script src="{{ asset('public/js/color-switcher.js') }}"></script>

<script src="{{ asset('public/js/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('public/js/fancybox/jquery.mousewheel.pack.js') }}"></script>
<script src="{{ asset('public/js/fancybox/jquery.fancybox.custom.js') }}"></script>
<script type="text/javascript">
 $(document).ready(function() {

  $(".fancybox").fancybox();


 });
</script>

</body>

</html>

