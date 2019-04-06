@extends('layouts.layout')

@php
  $about_name = $lang.'_name';
  $about_details = $lang.'_details';
@endphp

@section('title', $about->$about_name)

@section('description', $about->description)
@section('keywords', $about->keywords)

@section('content')
  <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">

    <div class="overlay"></div>

    <div class="container">
      <h1 class="entry-title">{{ $about->$about_name }}</h1>
    </div>

  </section>
<!-- Section: about -->
<section class="mb-100">
  <div class="container pb-0">
    <div class="row">
      <div class="col-12">
        {{--<h2 class="text-theme-colored mt-0">{{ $about->$about_name }}</h2>--}}
        <p class="font-weight-600">
          {!! $about->$about_details !!}
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
