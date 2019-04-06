@extends('layouts.layout')

@php
  $product_name = $lang.'_name';
  $product_details = $lang.'_details';
  $category_name = $lang.'_name';
@endphp

@section('title', $product->$product_name)

@section('description', $product->description)
@section('keywords', $product->keywords)

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
@endsection



@section('content')
<div class="main-content">
  <!-- Section: inner-header -->


</div>

<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

  <div class="overlay"></div>

  <div class="container">
    <h1 class="entry-title">{{ $product->$product_name }}</h1>
  </div>

</section>




<!-- Sub Page Content
============================================= -->
<div id="sub-page-content " class="clearfix">

  <div class="container">

    <div class="row">

      <div class="col-md-12 blog-wrapper clearfix">



        <article class="blog-item blog-full-width blog-detail">

          <div class="blog-thumbnail">
            <img alt="{{ $product->$product_name }}" src="{{ $product->full_image }}">
          </div>

          <div class="blog-content">
            <h4 class="blog-title">{{ $product->$product_name }}</h4>
            {!!  $product->$product_details  !!}
          </div>




        </article>






      </div>




    </div>

  </div>



</div><!--end sub-page-content-->

@if(count($product->images))
  <section class="meet-the-doctors no-bg-img team-carousel">

    <div class="container arabic_dir">

      <h2 class="light bordered">{{__('lang.productimages')}}</h2>

      <div id="team-carousel" class="owl-carousel wrapper-padding-none">
        @foreach($product->images as $image)
        <div class="team-member">
          <div class="team-thumb">
            <a class="fancybox" rel="imageproduct" href="{{ $image->full_image }}">
              <img src="{{ $image->image }}" width="234" alt="" title="">
            </a>
          </div>

        </div>
        @endforeach

      </div>

    </div>

  </section>
  @endif

<div class="colourfull-row"></div>
<!-- end main-content -->
@endsection
