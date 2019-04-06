@extends('layouts.layout')

@php
  $news_title = $lang.'_title';
  $news_details = $lang.'_details';

@endphp



@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection

@section('content')
  <!-- Sub Page Banner
			============================================= -->
  <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
      <h1 class="entry-title">{{__('lang.newsandevents')}}</h1>
    </div>

  </section>




  <!-- Sub Page Content
  ============================================= -->
  <div id="sub-page-content" class="clearfix">

    <div class="container">

      <div class="row">
        @isset($news)
        @foreach($news as $new)
            <div class="col-md-12 blog-wrapper clearfix">



              <article class="blog-item blog-full-width">
                <div class="blog-thumbnail">
                  <img alt="{{ $new->$news_title }}" src="{{ $new->full_image }}">
                </div>
                <div class="blog-full-width-date">
                  <p class="day">{{$new->day}}</p><p class="monthyear">{{$new->month}} {{$new->year}}</p>
                </div>
                <div class="blog-content">
                  <h4 class="blog-title"><a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">{{ $new->$news_title }}</a></h4>
                  <p>{{ $new->$news_details }}</p>
                  <a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}" class="btn btn-default btn-mini btn-rounded">{{__('lang.readmore')}}</a>
                </div>
              </article>


            </div>
          @endforeach
        @endisset



      </div>

    </div>



  </div><!--end sub-page-content-->



  <div class="colourfull-row"></div>
<!-- end main-content -->
@endsection
