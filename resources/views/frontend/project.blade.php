@extends('frontend.partial.second')
@section('css')
<style>
    /* .cursor.hasimg { 
    background: url("{{ asset('storage/' . $general->cursor_image) }}");
  } */
    /* .cursor.hasimg{background: url("../../../images/our-people-s1.jpg");} */
    .text-uppercase {
        text-transform: uppercase;
    }

</style>
@endsection
@section('content')
<main class="page-project">
    <section class="page-project__one">
        <div class="wrap">
            <div class="tagline-marquee marquee">
                <h1>PROJECT • PROJECT • PROJECT</h1>
            </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png"
                    alt="arrow-down" /></a></div>
    </section>
    <section class="page-project__two" id="sec2">
        <div class="wrap">
          @foreach ($project as $p)
          <a class="item" href="#" data-bg="{{ asset('storage/' . $p->mainImage) }}">
                <div class="item__wrap">
                    <div class="item__title"><span>{{ $p->brand }}</span></div>
                    <div class="item__meta"><span>{{ $p->project }}</span></div>
                    <div class="item__date"><span>{{ $p->date }}</span></div>
                </div>
            </a>
          @endforeach
           </div>
    </section>
    <section class="page-home__footer">
        <div class="page-home__footer-top">
            <div class="left"><a class="item email" href="mailto:GENERAL {{ $general->email_footer }}">GENERAL
                    INQUIRIES <br>{{ $general->email_footer }}</a>
                <div class="item phone">Phone<br><a href="tel:  {{ $general->phone_footer }}">
                        {{ $general->phone_footer }}</a></div>
                <div class="item ig">INSTAGRAM<br><a target="_blank"
                        href="https://www.instagram.com/{{ $general->social_footer }}"
                        class="text-uppercase">{{ $general->social_footer }}.</a></div>
            </div>
            <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}"
                alt="img" /></div>
    </section>
</main>
@endsection
