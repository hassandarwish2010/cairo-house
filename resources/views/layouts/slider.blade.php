
<?php

?>


<div id="main-banner" class="owl-carousel main-banner arabic_dir">
    @foreach($banners as $banner)
    <div class="item">
        <img src="{{$banner->image}}" alt="" title="">
        <div class="slider-caption">
            <p>@php $banner_title = $lang.'_title'@endphp {{ $banner->$banner_title }}</p>
        </div>
    </div>
        @endforeach





</div>


<div class="clearfix"></div>