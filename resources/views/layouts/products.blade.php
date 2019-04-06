<!--start PRODUCT RANGE-->
<div id="content-index">


    <!-- Services
    ============================================= -->

    <div id="sub-page-content" class="clearfix">



        <div class="container">


            <!-- BEGIN GALLERY SECTION -->

            <section class="gallery no-padding">

                <!-- GALLERY NAV -->
                <div class="gallery-filter-nav">
                    <div class="filter active" data-filter="all">{{__('lang.all')}}</div>

                    @foreach($products as $product)
                        @php $product_name = $lang.'_name'@endphp
                        <div class="filter" data-filter=".{{$product->id}}">
                             {{ $product->$product_name }}
                        </div>
                    @endforeach
                </div>

                <div id="Container-gallery">

                    <ul class="clearfix">
                        @foreach($products as $product)
                            @php $product_name = $lang.'_name'@endphp
                        <li class="mix {{$product->id}}" style="display: inline-block;">

                            <div class="gallery-item">
                                <div class="gallery-item-thumb">

                                    <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">
                                        <img src="{{$product->image}}" alt="">
                                    </a>

                                    {{--<a href="images/gallery-img1.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox"></a>--}}
                                </div>
                                {{--<div class="gallery-item-info">--}}
                                    {{--<p><a href="#.">Cairo House   </a><span>Products Details </span></p>--}}
                                {{--</div>--}}
                            </div>

                        </li>
                        @endforeach


                    </ul>

                </div>


            </section><!-- END GALLERY SECTION -->


        </div>


    </div><!--end sub-page-content-->





<!--end PRODUCT RANGE-->