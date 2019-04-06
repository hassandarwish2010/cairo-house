@extends('layouts.layout')
@section('title')
  {{__('lang.products')}}
@endsection
@php

  //$about=App\About::orderBy('id','asc')->first();
@endphp

@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
@section('content')
  <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
      <h1 class="entry-title">{{__('lang.products')}}</h1>
    </div>

  </section>



  <div id="sub-page-content" class="clearfix">

    <div class="container">

      <div class="row">
        @isset($products)
        @foreach($products as $product)
        <div class="col-md-4 clearfix">

          <article class="blog-item blog-full-width">

          <div class="blog-thumbnail">
          <img alt="" src="{{$product->image}}">
          </div>
          <div class="">
          <h4 class="blog-title"><a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">
          @php $product_name = $lang.'_name'@endphp {{ $product->$product_name }}
          </a></h4>
          <p> @php $product_details = $lang.'_details'@endphp {{ str_replace ('&nbsp;' , ' ' , strip_tags (clean_limit($product->$product_details,200))) }}</p>
          <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" class="btn btn-default btn-mini btn-rounded">{{__('lang.readmore')}}</a>
          </div>

          </article>

        </div>
          @endforeach
          @endisset



      </div>
      <div class="col-sm-12 text-center">{{$products->links()}}</div>

    </div>




  </div><!--end sub-page-content-->

  <!-- Sub Page Content
  ============================================= -->

          {{--@isset($products)--}}
            {{--@foreach($products as $product)--}}

          {{--<article class="blog-item blog-full-width">--}}

            {{--<div class="blog-thumbnail">--}}
              {{--<img alt="" src="{{$product->image}}">--}}
            {{--</div>--}}
            {{--<div class="blog-content">--}}
              {{--<h4 class="blog-title"><a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">--}}
                  {{--@php $product_name = $lang.'_name'@endphp {{ $product->$product_name }}--}}
                {{--</a></h4>--}}
               {{--<p> @php $product_details = $lang.'_details'@endphp {{ str_replace ('&nbsp;' , ' ' , strip_tags (clean_limit($product->$product_details,45))) }}</p>--}}
              {{--<a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" class="btn btn-default btn-mini btn-rounded">READ MORE</a>--}}
            {{--</div>--}}

          {{--</article>--}}
            {{--@endforeach--}}
          {{--@endisset--}}

        {{--</div>--}}




      {{--</div>--}}

    {{--</div>--}}




  </div><!--end sub-page-content-->



  <div class="colourfull-row"></div>
<!-- end main-content -->
@endsection
