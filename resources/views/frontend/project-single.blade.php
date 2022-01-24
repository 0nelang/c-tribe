@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

        .page-home__footer {background-image: url("{{ asset('storage/' . $general->background_footer) }}");}
        .text-uppercase {
            text-transform: uppercase;
        }
    </style>
@endsection
@section('content')
    <main class="page-project">
      <section class="page-project-s__one">
        <div class="wrap">
          <h1>NIKE X DRAKA <br>BRAND EXPRESSION</h1>
          <div class="desc">
            <p>CTRIBE Scores a Coveted Meeting with the Brand's Special Projects Senior Director, the Man Behind Every Fashionable Nike Collaboration From the Past Decade</p>
            <p>Strategy: Brand Articulations <br>Agency: Studio Lore <br>Production company: Bullion Productions <br>Director: James Willis</p>
            <p>Role & Lead art direction and design</p>
          </div>
          <div class="img"><img src="/images/img-project-single.jpg" alt="Image"/><span class="caption">CREATIVE TRIBE PROJECT</span></div>
        </div>
      </section>
      <section class="page-project-s__two">
        <div class="wrap">
          <div class="article-top">
            <div class="col">
              <p>STRATEGY: BRAND ARTICULATIONS <br>AGENCY: STUDIO LORE <br>PRODUCTION COMPANY: BULLION PRODUCTIONS <br>DIRECTOR: JAMES WILLIS</p>
            </div>
            <div class="col tc">
              <p>ROLE & LEAD ART DIRECTION AND DESIGN</p>
            </div>
            <div class="col tr">
              <p>FEBRUARY 2022 <br>JAKARTA, INDONESIA</p>
            </div>
            <div class="col"><a href="#">@CREATIVETRIBEJKT</a></div>
            <div class="col tc"><a href="#">@SANASTUDIO</a></div>
            <div class="col tr"><a href="#">@DASH</a></div>
          </div>
          <article>
            <p>adidas Run For The Oceans is a global movement that harnesses the power of running to raise awareness of the threat of marine plastic pollution and inspire positive action. For every 1 km run, adidas donates $1 to the Parley Ocean School to educate the next generation of ocean activists. The massive campaign ends in three running events hosted in New York City, Barcelona, and Shanghai on World Ocean Day. </p>
            <p>To promote the 2019 event and recruit the next generation of activists, we created a visual identity injecting some urgency around the issue. To represent the collective voice of activists, we developed a typographic repetition system combined with plastic-wrapped textures, confronting the audience with the plastic pollution problem in a real and tangible way but in the same conversation giving them a path to activism - through running.</p>
            <p>Strategy: Brand Articulations <br>Agency: Creative Tribe <br>Production company: Creative Tribe <br>Photographer: Albert Judiyanto <br>Filmmaker: Syndicate <br>Illustrator: Eze Matteo <br><br>Film</p>
            <p>Strategy: Brand Articulations <br>Agency: Studio Lore <br>Production company: Bullion Productions <br>Director: James Willis <br>Role & Lead art direction and design</p>
          </article>
        </div>
      </section>
      <section class="page-project-s__three">
        <div class="wrap"><img class="img-full" src="/images/img-project-single-01.jpg" alt="Image"/><img class="img-full" src="/images/img-project-single-02.jpg" alt="Image"/><img class="img-full" src="/images/img-project-single-03.jpg" alt="Image"/></div>
      </section>
      <section class="page-home__footer">
        <div class="page-home__footer-top">
          <div class="left"><a class="item email" href="mailto:{{ $general->email_footer }}">GENERAL INQUIRIES <br>{{ $general->email_footer }}</a>
            <div class="item phone">Phone<br><a href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
            <div class="item ig">INSTAGRAM<br><a href="https://www.instagram.com/{{ $general->social_footer }}" class="text-uppercase">{{ $general->social_footer }}.</a></div>
          </div>
          <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img"/></div>
      </section>
    </main>
@endsection