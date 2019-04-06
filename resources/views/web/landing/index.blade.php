@extends('layouts.layout')
@section('title')
  Home
@endsection


@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

  <meta property="og:title" content="الرئيسية"/>
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
@section('content')
  @include('layouts.slider')

  @include('layouts.products')
  @include('layouts.news')



@endsection