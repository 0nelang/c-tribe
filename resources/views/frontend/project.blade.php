@extends('frontend.partial.second')
@section('css')
<style> 
  /* .cursor.hasimg { 
    background: url("{{ asset('storage/' . $general->cursor_image) }}");
  } */
  /* .cursor.hasimg{background: url("../../../images/our-people-s1.jpg");} */
  .text-uppercase{ text-transform: uppercase;}
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
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-project__two" id="sec2">
        <div class="wrap"><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>CITIBANK</span></div>
              <div class="item__meta"><span>Citiboys Club / Event</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-landing-bg.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>WONDERFUL INDONESIA</span></div>
              <div class="item__meta"><span>Print Ads & Digital Banner</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>MARLBORO</span></div>
              <div class="item__meta"><span>DWP M Land</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>SAMPOERNA</span></div>
              <div class="item__meta"><span>Limited Edition Pack Series</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>PERMATA BANK</span></div>
              <div class="item__meta"><span>Cant Stop Me</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>WONDERFUL INDONESIA</span></div>
              <div class="item__meta"><span>Mandalika Conceptual Photo Series</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>MAGNUM</span></div>
              <div class="item__meta"><span>Digital Banner</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>NIKE</span></div>
              <div class="item__meta"><span>Brand Expression</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>WONDERFUL INDONESIA</span></div>
              <div class="item__meta"><span>Print Ads & Digital Banner</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>MARLBORO</span></div>
              <div class="item__meta"><span>DWP M Land</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>SAMPOERNA</span></div>
              <div class="item__meta"><span>Limited Edition Pack Series</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>PERMATA BANK</span></div>
              <div class="item__meta"><span>Cant Stop Me</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>WONDERFUL INDONESIA</span></div>
              <div class="item__meta"><span>Mandalika Conceptual Photo Series</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a><a class="item" href="#" data-bg="/images/img-bg-project-01.jpg">
            <div class="item__wrap">
              <div class="item__title"><span>MAGNUM</span></div>
              <div class="item__meta"><span>Digital Banner</span></div>
              <div class="item__date"><span>2022</span></div>
            </div></a></div>
      </section>
      <section class="page-home__footer">
        <div class="page-home__footer-top">
          <div class="left"><a class="item email" href="mailto:GENERAL {{ $general->email_footer }}">GENERAL INQUIRIES <br>{{ $general->email_footer }}</a>
            <div class="item phone">Phone<br><a href="tel:  {{ $general->phone_footer }}"> {{ $general->phone_footer }}</a></div>
            <div class="item ig">INSTAGRAM<br><a target="_blank" href="https://www.instagram.com/{{ $general->social_footer }}" class="text-uppercase">{{ $general->social_footer }}.</a></div>
          </div>
          <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img"/></div>
      </section>
    </main>
    @endsection