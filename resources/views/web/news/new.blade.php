@extends('layouts.layout')

@php
  $news_title = $lang.'_title';
  $news_details = $lang.'_details';
@endphp

@section('title', $news->$news_title)

@section('description', $news->description)
@section('keywords', $news->keywords)

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
  $(".fancybox").fancybox();
});
</script>
@endsection

@section('content')
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
      <h1 class="entry-title">{{ $news->$news_title }}</h1>
    </div>

  </section>

  <!-- Section: Blog -->

  <div id="sub-page-content" class="clearfix">

    <div class="container">

      <div class="row">


            <div class="col-md-12 blog-wrapper clearfix">



              <article class="blog-item blog-full-width">
                <div class="blog-thumbnail">
                  <img alt="{{ $news->$news_title }}" src="{{ $news->full_image }}">
                </div>
                <div class="blog-full-width-date">
                  <p class="day">{{$news->day}}</p><p class="monthyear">{{$news->month}} {{$news->year}}</p>
                </div>
                <div class="blog-content">
                  <h4 class="blog-title">{{ $news->$news_title }}</h4>
                  <p>{!! $news->$news_details !!}</p>
                </div>
              </article>


            </div>





      </div>

    </div>



  </div><!--end sub-page-content-->



  <div class="colourfull-row"></div>
@endsection
