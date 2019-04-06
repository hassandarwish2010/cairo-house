@isset($welcome)
<section class="top-we-are">
    <div class="container">
        <div class="row">
            <div class="col-md-12 effect-5 effects no-border-img">
                <div class="text-center top-txt-title">
                    <span> WELCOME A.W.T </span>
                         <a href="{{ route('about',['permalink'=>$welcome->permalink]) }}"><h2>{{$welcome->en_name}}</h2></a>
                    <div class="separator">
                        <div class="separator-style"></div>
                    </div>
                        <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($welcome->en_details),300)) }}
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>
    @endisset