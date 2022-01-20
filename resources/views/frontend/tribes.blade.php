@extends('frontend.partial.second')
@section('css')
<style>
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

            <a class="item" href="#">
            <div class="item__wrap">
              <div class="item__logo"><img src="{{ asset('storage/' . $s->logo) }}" alt="{{ $s->logo }}"/></div>
              <div class="item__title"><span>{{ $s->service }}</span></div>
            </div></a>

            @endforeach
      </section>
      <section class="page-home__footer">
        <div class="page-home__footer-top">
          <div class="left"><a class="item email" href="mailto:GENERAL INQUIRIESHOLA@CTRIBEJKT.COM">GENERAL INQUIRIES <br>HOLA@CTRIBEJKT.COM</a>
            <div class="item phone">Phone<br><a href="tel: +62812 197 19179">+62812 197 19179</a></div>
            <div class="item ig">INSTAGRAM<br><a href="#">CTRIBEJKT.</a></div>
          </div>
          <div class="right"><span>JKT, IND</span></div>
        </div>
        <div class="imgctribe"><img src="/images/big-ctribe.svg" alt="img"/></div>
      </section>
    </main>
    @endsection
