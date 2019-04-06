@isset($why)
<section class='why-choose-us' style="background-image: url('{{asset("public/images/global-map.jpg")}}')">
    <div class='paral-effect'></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 why-choose-us-wrapper">
                    <h2 class="title-2 put-logofly">{{$why->en_name}}</h2>


                    <div class="clear"></div>
                    {{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($why->en_details),300)) }}

                    <div class="box-button"><a class="btn btn-default" href="{{ route('about',['permalink'=>$why->permalink]) }}">Learn more</a></div>
                </div>
                <div class="col-md-4 box-middle-img"><img src="{{asset('public/images/girl-1.png')}}" alt="{{$why->en_name}}"/></div>
            </div>
        </div>
    </div>
</section>
    @endisset