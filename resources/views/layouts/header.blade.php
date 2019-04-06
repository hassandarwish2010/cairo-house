<!-- header begin -->
<?php
$cats=App\Category::orderBy('id','desc')->get();
$abouts=App\About::where('id','!=',1)->where('id','!=',2)->orderBy('id','desc')->get();
?>

<section>
    <div class="top-mega-menu">
        <div class="container">
            <!-- mega menu -->
            <ul class="travel-mega-menu travel-mega-menu-response-to-icons">
                <li class="line-logo">
                    <a class="logo" href="{{route('landing')}}"><img src="{{asset('public/images/logo.jpg')}}" alt="AWT"/></a>
                </li>

                <li>
                    <a class="top-menu-txt" href="{{route('landing')}}">Home</a>
                </li>


                <!-- About -->
                <li>
                    <a class="top-menu-txt" >About us</a>
                    <div class="grid-container3 blue-link">
                        <ul>
                            @if(count($abouts))
                                @foreach($abouts as $about)
                            <li><a href="{{ route('about',['permalink'=>$about->permalink]) }}">{{$about->en_name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
                <!--/ About -->

                <!-- products -->
                <li class="center">
                    <a class="top-menu-txt" href="#">Products</a>
                    <div class="grid-container10 destination">
                        <form>
                            <fieldset>
                                <div class="row">
                                    @if(count($cats)>0)
                                        @foreach($cats as $cat)
                                    <section class="col col-md-3 destination-img">
                                       <a href="{{ route('cats',['id'=>$cat->id]) }}"><h3>{{$cat->en_name}}</h3></a>
                                        <ul>
                                            @foreach(App\Product::where('category_id',$cat->id)->get() as $product )
                                            <li><a href="{{ route('product',['id'=>$product->permalink]) }}">{{$product->en_name}}</a></li>
                                             @endforeach
                                        </ul>
                                    </section>
                                        @endforeach
                                    @endif
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </li>
                <!--/ products -->
                <!-- News -->
                <li>
                    <a class="top-menu-txt" href="{{route('news')}}">News</a>
                </li>
                <!--/ news -->

                <!-- agents -->
                <li>
                    <a class="top-menu-txt" href="{{route('parteners')}}">Parteners</a>
                </li>
                <!--/ agents -->


                <!-- contacts -->
                <li>
                    <a class="top-menu-txt" href="{{route('contact')}}">
                        Contacts</a>

                </li>
                <!--/ contacts -->
            </ul>
            <!--/ mega menu -->
        </div>

        <nav id="mobile-menu-01" class="mobile-menu">
            <div class="line-logo">
                <a class="logo" href="{{route('landing')}}"><img src="{{asset('public/images/logo.jpg')}}" alt=""/></a><i class="fa fa-bars"></i>
            </div>
            <div class="clear"></div>
            <ul class="travel-mega-menu-mobile">

                <!-- about -->
                <li class="line-mini-menu k-opn">
                    <a class="top-menu-txt" href="{{route('landing')}}">Home</a>
                </li>
                <!--/ about -->
                <li class="line-mini-menu k-opn">
                    <a class="top-menu-txt">About us</a>
                    <div class="grid-container3 collapse blue-link">
                        <ul>
                            @if(count($abouts))
                                @foreach($abouts as $about)
                                    <li><a href="{{ route('about',['permalink'=>$about->permalink]) }}">{{$about->en_name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
                <!-- resume -->
                <li class="line-mini-menu k-opn">
                    <a class="top-menu-txt" href="#">Products</a>
                    <div class="grid-container10 destination collapse blue-link">
                        <form>
                            <fieldset>
                                <div class="row">
                                    @if(count($cats)>0)
                                        @foreach($cats as $cat)
                                            <section class="col col-md-3 destination-img">
                                                <a href="{{ route('cats',['id'=>$cat->id]) }}"><h3>{{$cat->en_name}}</h3></a>
                                                <ul>
                                                    @foreach(App\Product::where('category_id',$cat->id)->get() as $product )
                                                        <li><a href="{{ route('product',['id'=>$product->permalink]) }}">{{$product->en_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </section>
                                        @endforeach
                                    @endif
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </li>
                <!--/ resume -->
                <!-- hotels -->
                <li class="k-opn">
                    <a class="top-menu-txt" href="{{route('news')}}">News</a>
                </li>
                <!--/ hotels -->
                <!-- hotels -->
                <li class="k-opn">
                    <a class="top-menu-txt" href="{{route('parteners')}}">Parteners</a>
                </li>
                <!--/ hotels -->
                <!-- page -->
                <li class="line-mini-menu k-opn">
                    <a class="top-menu-txt" href="{{route('contact')}}">Contacts</a>
                </li>
                <!--/ page -->

            </ul>
            <!--/ mega menu -->
        </nav>

    </div>
</section>
<!-- header close -->