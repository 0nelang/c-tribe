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
    <main class="page-inspiration-s">
      <section class="page-inspiration-s__one">
        <div class="wrap">
          <h1>FRASER COOKE IS <br>NIKE’S GATEKEEPER <br>OF HYPE</h1>
          <div class="desc">
            <p>CTRIBE Scores a Coveted Meeting with the Brand's Special Projects Senior Director, the Man Behind Every Fashionable Nike Collaboration From the Past Decade</p>
          </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-inspiration-s__two" id="sec2">
        <div class="wrap">
          <p>Jun Takahashi, Rei Kawakubo, Craig Green, Virgil Abloh, Chitose Abe, Errolson Hugh, and Kim Jones all share the same sneaker connect. Fraser Cooke. The Nike global influencer marketing special projects senior director, Cooke has been the guy behind the scenes crafting every creative sneaker collaboration at the company for over a decade. He’s the gatekeeper at Nike when it comes to their most infamous fashion collaborations, from the Nike Sacai Blazer Low to the Comme des Garçons Homme Plus Air Max 180. His vision has launched Nike ahead of the competition when it comes to partnerships, and he credits following his intuition as his compass. Take his work with Undercover’s Jun Takahashi. Cooke and Takahashi were friends for years before they decided to formally undertake a Nike collaboration in 2010. Cooke was waiting for the perfect time. They now have over seven esteemed releases together. Being respectful of a designers intrinsic creative output and process, and trying to figure out how to incorporate that into the big machine of Nike is his utmost concern. In a fast fashion economy, what’s so special about Cooke is he’s not afraid to take it slow.</p>
        </div>
      </section>
      <section class="page-inspiration-s__three">
        <div class="wrap">
          <div class="video-wrap">
            <div class="btn-play"></div><video width="1920" height="1080" controls>
            <source src="/images/bg-vid.mp4" type="video/mp4">
            <Your>browser does not support the video tag.</Your></video>
          </div>
        </div>
      </section>
      <section class="page-inspiration__footer">
        <div class="page-inspiration__footer-top">
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