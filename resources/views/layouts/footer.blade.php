
<!--====================== footer begin ==================== -->
<?php

  $setting=App\Setting::first();
$news = App\News::limit(4)->inRandomOrder()->get();
$first=App\About::first();
?>

<!-- Footer
		============================================= -->
<footer id="footer" class="light">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <!-- Footer Widget
                ============================================= -->
                <div class="footer-widget">

                    <h4><span>{{__('lang.cairo')}}</span></h4>

                    <ul class="footer-nav list-unstyled clearfix">
                        <li><a href="{{ route('home', $lang) }}"><i class="fa fa-long-arrow-right"></i> {{ __('lang.home') }}</a></li>
                        <li><a href="{{ route('about', ['lang' => $lang, 'permalink' => $first->permalink]) }}"><i class="fa fa-long-arrow-right"></i> {{ __('lang.about') }}</a></li>
                        <li><a href="{{ route('products', ['lang' => $lang]) }}"><i class="fa fa-long-arrow-right"></i> {{ __('lang.products') }}</a></li>
                        <li><a href="{{ route('news', ['lang' => $lang]) }}"><i class="fa fa-long-arrow-right"></i> {{ __('lang.newsandevents') }}</a></li>
                        <li><a href="{{ route('contact', ['lang' => $lang]) }}"><i class="fa fa-long-arrow-right"></i> {{ __('lang.contact') }}</a></li>
                    </ul>

                </div>

            </div>



            <div class="col-md-4">

                <!-- Footer Widget
                ============================================= -->
                <div class="footer-widget">

                    <h4><span>{{__('lang.latestnews')}}</span></h4>

                    <div class="twitter-widget">
                        @foreach($news as $new)
                              <a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">
                                  <p>@php $new_title = $lang.'_title'@endphp {{ $new->$new_title }}</p></a>
                            @endforeach
                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <!-- Footer Widget
                ============================================= -->
                <div class="footer-widget">

                    <h4><span>{{__('lang.get')}}</span></h4>
                    <p>@php $word = 'word_'.$lang @endphp {{$setting->$word}}</p>

                    <div class="contact-widget">
                        <i class="fa fa-home"></i><p>{{$setting->address}}</p>
                        {{--<i class="fa fa-gam"></i><p><a href="{{$setting->email}}"></a></p>--}}
                        <i class="fa fa-mobile"></i><p class="phone-number">{{$setting->phone}}</p>
                    </div>

                    <ul class="social3 clearfix">
                        <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$setting->googleplus}}"><i class="fa fa-google-plus"></i></a></li>
                        {{--<li><a href="#."><i class="fa fa-skype"></i></a></li>--}}
                        <li><a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a></li>

                    </ul>

                </div>

            </div>
        </div>
    </div>


    <!-- Copyright
    ============================================= -->
    <p class="copyright text-center">Copyright &copy; 2019 Cairo House. All right reserved. Powered by <a href ="http://www.td.com.eg">Typical Design </a></p>


    <!-- Footer Bottom
    ============================================= -->



</footer>

<!-- back to top -->
<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
