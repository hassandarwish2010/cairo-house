<section class="section-parthners-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12 parthners">
                <div class="text-center">
                    <h2>OUR PARTHNERS</h2>
                    <div class="separator">
                        <div class="separator-style"></div>
                    </div>
                    @isset($parteners)
                    @foreach($parteners as $partener)
                    <div class="col-xs-2 col-md-2">
                        <a href="{{$partener->url}}" target="_blank">
                            <img src="{{$partener->image}}" alt="{{$partener->url}}"/>
                        </a>

                    </div>
                        @endforeach
                    @endisset
                </div><!--Close col-md-12-->
            </div>
        </div>
    </div>
</section>