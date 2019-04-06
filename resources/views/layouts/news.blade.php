

<section class="doctors-list arabic_dir">

    <div class="container">

        <h2 class="light bordered"> <span>{{__('lang.ourlatestnews')}}</span></h2>

        <ul class="list-unstyled owl-carousel row" id="our-doctors-list">
            @forelse($news as $new)
            <li>

                <div class="doctors-img">

                    <img src="{{ $new->image }}" width="234" alt="" title="">

                </div>

                <div class="doctors-detail">
                    <h4 class="sty-text-right">
                       <a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">
                           @php $new_title = $lang.'_title'@endphp {{ $new->$new_title }}
                       </a>
                        <span>{{ $new->day }} {{ $new->month }} {{ $new->year }}</span></h4>


                    <p> <label class="detail sty_news_details">@php $new_details = $lang.'_details'@endphp {{ $new->$new_details }}</label></p>
                </div>

            </li>
            @empty
                <p class="text-center">
                    {{ __('lang.no_data') }}
                </p>
            @endforelse
        </ul>

    </div>

</section>



<!-- Medicom Tour and Appointment
============================================= -->


<div class="height20"></div>

<div class="colourfull-row"></div>