@extends('frontend.partial.second')
@section('css')
<style>
  .text-uppercase {
      text-transform: uppercase;
  }
.page-home__footer {background-image: url({{ asset('storage/' . $general->background_footer) }});}
</style>   
@endsection
@section('content')
    <main class="page-tribes header-1">
      <section class="page-tribes__one">
        <div class="wrap">
          <div class="tagline-marquee marquee">
            <h1>TRIBES • TRIBES</h1>
          </div>
        </div>
      </section>
      <section class="page-tribes__two header-2">
        <div class="wrap">
            @foreach ($service as $s)

            <a class="item" href="/tribe/detail">
            <div class="item__wrap">
              <div class="item__logo"><img src="{{ asset('storage/' . $s->logo) }}" alt="{{ $s->logo }}"/></div>
              <div class="item__title"><span>{{ $s->service }}</span></div>
            </div></a>

            @endforeach
      </section>
      <section class="page-home__footer">
        <div class="page-home__footer-top">
          <div class="left"><a class="item email" href="mailto:{{ $general->email_footer }}">GENERAL INQUIRIES <br>{{ $general->email_footer }}</a>
            <div class="item phone">Phone<br><a href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
            <div class="item ig">INSTAGRAM<br><a href="{{ $general->social_footer }}" class="text-uppercase">{{ $general->social_footer }}.</a></div>
          </div>
          <div class="right"><span  class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}"/></div>
      </section>
    </main>
    @endsection
