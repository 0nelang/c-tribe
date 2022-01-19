@extends('frontend.partial.main')
@section('css')
<style>
  .text-uppercase{ text-transform: uppercase;}
  </style>
@endsection
@section('content')
    <main class="page-inspiration">
      <section class="page-inspiration__one">
        <div class="wrap">
          <div class="tagline-marquee marquee">
            <h1>INSPIRATION • INSPIRATION</h1>
          </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-inspiration__two" id="sec2">
        <div class="wrap">
          <div class="item item--lg anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-inspiration-01.png')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">FAMED SNEAKER CUSTOMIZER SBTG</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-inspiration-02.png')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">FRASER COOKE <br>GATEKEEPER OF HYPE</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-inspiration-03.png')"></div>
              <div class="item__date-sm dark"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">HOW TO BUILD <br>STREETWEAR BRAND WITH KIMS</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item item--alt anim">
            <div class="item__wrap">
              <div class="item__bg"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">GALLERIES & <br>GRAFITY WITH DARBOTZ</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-inspiration-04.png')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">LUCA BENINI STARTED THE <br>HYPE 30 YEARS AGO</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-inspiration__footer">
        <div class="page-inspiration__footer-top">
          <div class="left"><a class="item email" href="mailto:GENERAL {{ $general->email_footer }}">GENERAL INQUIRIES <br>{{ $general->email_footer }}</a>
            <div class="item phone">Phone<br><a href="tel:  {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
            <div class="item ig">INSTAGRAM<br><a target="_blank" href="https://www.instagram.com/{{ $general->social_footer }}" class="text-uppercase">{{ $general->social_footer }}.</a></div>
          </div>
          <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img"/></div>
      </section>
    </main>
    @endsection