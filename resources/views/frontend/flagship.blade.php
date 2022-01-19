@extends('frontend.partial.main')
@section('css')
<style>
  .text-uppercase{ text-transform: uppercase;}
  </style>
@endsection
@section('content')
    <main class="page-flagship">
      <section class="page-flagship__one">
        <div class="wrap">
          <div class="tagline-marquee marquee">
            <h1>FLAGSHIP EVENT • FLAGSHIP EVENT</h1>
          </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-flagship__two" id="sec2">
        <div class="wrap">
          <div class="item item--lg anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('../images/img-flagship-01.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">SUBCULTURE EVENT</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('../images/img-flagship-02.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">PELARIAN X <br>SANA STUDIO X DASH</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item item--alt anim">
            <div class="item__wrap">
              <div class="item__bg"></div>
              <div class="item__date-sm dark"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">BAR HOPPING AREA <br>IN  SENOPATI</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('../images/img-flagship-03.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">NIKE DUNK EXHIBITION <br>AT PIK AVENUE</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('../images/img-flagship-04.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">TAKASHI MURAKAMI EXHIBITION <br>AT PLAZA INDONESIA LV</h2>
                <div class="item__cta"><a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-flagship__footer">
        <div class="page-flagship__footer-top">
          <div class="left"><a class="item email" href="mailto:GENERAL {{ $general->email_footer }}">GENERAL INQUIRIES <br>{{ $general->email_footer }}</a>
            <div class="item phone">Phone<br><a href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
            <div class="item ig">INSTAGRAM<br><a target="_blank" href="https://www.instagram.com/{{ $general->social_footer }}" class="text-uppercase">{{ $general->social_footer }}.</a></div>
          </div>
          <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img"/></div>
      </section>
    </main>
@endsection