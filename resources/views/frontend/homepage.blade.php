@extends('frontend.partial.main')
<style>
 .cursor.hasimg {
        width: 30.208vw;
        height: 17.188vw;
        border-radius: 0;
        background: url("{{ asset('storage/' . $general->cursor_image) }}");
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
    }
  .page-home__footer {background-image: url({{ asset('storage/' . $general->background_footer) }});}
  .text-uppercase {
      text-transform: uppercase;
  }
</style>
@section('content')

<main class="page-home">
  <section class="page-home__one header-2">
    <div class="wrap">
      <h1><span>WE CREATES MULTI-DIMENSIONS OF CREATIVITY THROUGH THE CREATION, COLLABORATION AND COMMUNICATION OF URBAN LIFESTYLE CULTURE</span>
        <small>We empower brand and connect consumers through creative marketing solution for a better market presence</small></h1>
    </div>
    <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down.png" alt="arrow-down"/></a></div>
  </section>
  <section class="page-home__two cursor-img header-1" id="sec2">
    <div class="wrap"><span class="huge-text">TRIBE</span><span class="small-text">We empower brand and connect consumers<br> through creative marketing solution<br> for a better market presence</span>
      <div class="wrap-buttons sm-only"><a class="rtf" href="#">READ THE FEATURE</a></div>
    </div>
  </section>
  <section class="page-home__three header-1">
    <div class="wrap">
      <h2><span class="oa">OUR ACTION</span><span class="date">15TH FEB 2022</span><span>PELARIAN X SANA STUDIO X DASH</span></h2>
      <div class="desc">
        <p>We empower brand and connect consumers <br>through creative marketing solution for a better market presence</p>
      </div><a class="rtf" href="#">READ THE FEATURE</a>
    </div>
  </section>
  <section class="page-home__four header-2">
    <div class="wrap">
      <div class="col-left"><span class="oa">INSPIRATION</span></div>
      <div class="col-right"><span class="date">15TH FEB 2022</span></div>
      <div class="col-main">
        <h2>FRASER COOKE <br>GATEKEEPER OF HYPE</h2>
        <div class="img"><img src="/images/img-home-four.png" alt="Image"/></div>
        <div class="desc">
          <p>Ctribe scores a coveted meeting with The brand's special projects senior director, <br>the man behind every fashionable nike collaboration From the past decade</p>
        </div><a class="rtf" href="#">READ THE FEATURE</a>
      </div>
    </div>
  </section>
  <section class="page-home__five header-1">
    <div class="wrap">
      <div class="col-left"><span class="oa">PROJECTS</span>
        <h2>DRAKE AND NIKE <br>BRAND EXPRESSION</h2>
        <div class="desc">
          <p>CREATIVE DIRECTOR ABANK / GROUP HEAD BEN / ACCOUNT MANAGER DON / ART DIRECTOR BIMA <br>COPYWRITER ANTI / GRAPHIC DESIGN EJA / GRAPHIC DESIGN DIRGA</p>
        </div>
        <div class="desc sm-only">
          <p>We empower brand and connect consumers through creative marketing solution for a better market presence</p>
        </div>
      </div>
      <div class="col-right"><a class="rtf" href="#">READ THE FEATURE</a></div>
    </div>
  </section>
  <section class="page-home__six header-1">
    <div class="wrap">
      <div class="col-main">
        <div class="sm-only"><span class="oa">PARTNERS</span><span class="date">15TH FEB 2022</span></div>
        <div class="tagline-marquee marquee">
          <h2>KENJI TAKIMI<span class="star">*</span>KENJI TAKIMI<span class="star">*</span></h2>
        </div>
        <div class="img"><img src="/images/img-home-06.jpg" alt="Image"/></div>
      </div>
      <div class="col-bot-l"><span class="oa">PARTNERS</span>
        <div class="desc">
          <p>Kenji Takimi is a true pioneer of the Leftfield/Alternative Disco scene, <br>and his label Crue-l Records has been at the forefront of Japanese <br>alternative music since its inception 20 years ago. Kenji Takimi was <br>one of the first Japanese DJs to collaborat.</p>
        </div>
      </div>
      <div class="col-bot-c"><a class="rtf" href="#">READ THE FEATURE</a></div>
      <div class="col-bot-r"><span class="date">15TH FEB 2022</span><span class="meta">ISLE MIXES WITH <br>KENJI TAKIMI FROM CRUE L RECORDS / JP TOKYO</span></div>
    </div>
  </section>
  <section class="page-home__footer">
    <div class="page-home__footer-top">
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
