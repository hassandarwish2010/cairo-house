
@section('css')
    <!--Slideshow-->
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/settings_slide2.cs') }}s" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/travel-mega-menu.css') }}" rel="stylesheet" type="text/css" />
    <!--Slideshow-->
    <link href="{{ asset('public/css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />
    <!--Carousel-->
    <link href="{{ asset('public/css/carousel/component.css') }}" rel="stylesheet" type="text/css" />
    <!--List-->
    <link href="{{ asset('public/css/list/component.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/layout2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../../code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"/>
    <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet" type="text/css" />

@endsection

<section id="parallax" class="about-prx">
    <div class="effect-over">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main">
                        <div id="cbp-contentslider" class="cbp-contentslider">
                            <ul>
                                @isset($news)
                                    @foreach($news as $index=>$new)
                                <li id="slide.{{$index}}">
                                    <h3 class=""><span><a style="    font-size: 24px;" href="{{ route('new',['permalink'=>$new->permalink]) }}">{{$new->en_title}}</a></span></h3>
                                    <div>
                                        <div class="cbp-content">
                                            <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($new->en_details),200)) }}</p>
                                             <p><img src="{{asset('public/uploads/thumbs/'.$new->image)}}" style="float: right;"></p>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                               @endisset
                            </ul>
                            <nav>
                                @isset($news)
                                    @foreach($news as $index=>$new)
                                <a href="#slide.{{$index}}" class="">
                                    <span>{{$new->en_title}}</span></a>
                                    @endforeach
                                @endisset

                            </nav>
                        </div>
                    </div>
                </div><!--Close col-md-12-->
            </div>
        </div>
    </div>
</section>


@section('js')


    <script src="{{ asset('public/js/modernizr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>
    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public/js/waypoints.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
    <!--Carousel-->
    <script src="{{ asset('public/js/carousel/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/carousel/jquery.cbpContentSlider.min.js') }}" type="text/javascript"></script>
    <script>
        $(function () {
            "use strict";
            $('#cbp-contentslider').cbpContentSlider();
        });
    </script>
    <!--slideshow-->
    <script src="{{ asset('public/js/jquery.bxslider.js') }}" type="text/javascript"></script>
    <script>
        $(function () {
            "use strict";
            $('.bxslider').bxSlider({
                pagerCustom: '#bx-pager'
            });
        });
    </script>

    <script src="../../../../code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script>
        $(function () {
            "use strict";
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    </script>
@endsection