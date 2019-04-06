<?php

$products = App\Product::limit(5)->inRandomOrder()->get();
?>


<header id="header" class="medicom-header">

    <!-- Top Row
    ============================================= -->
    <div class="colourfull-row"></div>

    <div class="container">


        <!-- Primary Navigation
        ============================================= -->
        <nav class="navbar navbar-default" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display
            ============================================= -->

            <div class="navbar-header head-ar">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ route('home', $lang) }}"><img src="{{asset('public/images/logo.png')}}" alt="" title=""></a>

            </div>


            <div class="collapse navbar-collapse navbar-right" id="primary-nav">

                <ul class="nav navbar-nav">

                    <li class="dropdown active">
                        <a href="{{ route('home', $lang) }}" >{{ __('lang.home') }}</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ __('lang.about') }}</a>
                        <ul class="dropdown-menu">
                            @forelse($about_pages as $about)
                                <li><a href="{{ route('about', ['lang' => $lang, 'permalink' => $about->permalink]) }}">@php $about_name = $lang.'_name'@endphp {{ $about->$about_name}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </li>



                    <li class="mega-menu-item dropdown">
                        <a href="{{ route('products', ['lang' => $lang]) }}" >{{ __('lang.products') }}</a>
                        <div class="mega-menu dropdown-menu">
                            @foreach($products as $product)
                            <ul>

                                <li><a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">@php $product_name = $lang.'_name'@endphp <strong>{{clean_limit($product->$product_name,15) }}</strong></a></li>
                                <li><img src="{{asset('public/uploads/thumbs/' . $product->image)}}" class="img-rounded" alt="" title="" style="margin-bottom:5px"></li>

                                <li style="line-height:27px; text-align:justify" >
                                    @php $product_details = $lang.'_details'@endphp {{ str_replace ('&nbsp;' , ' ' , strip_tags (clean_limit($product->$product_details,45))) }}

                                </li>
                                <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" style="float:right">Read More</a>
                            </ul>
                          @endforeach


                        </div>
                    </li>



                    <li >
                        <a href="{{ route('news', ['lang' => $lang]) }}">{{ __('lang.newsandevents') }}</a>

                    </li>



                    <li class="dropdown last">
                        <a href="{{ route('contact', ['lang' => $lang]) }}">{{ __('lang.contact') }}</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ __('lang.language') }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('set.language', 'en') }}">  {{ __('lang.english') }} </a></li>
                            <li><a href="{{ route('set.language', 'ar') }}"> {{ __('lang.arabic') }} </a></li>
                        </ul>
                    </li>


                </ul>

            </div>

        </nav>

    </div>

    <div class="header-bottom-line"></div>

</header>