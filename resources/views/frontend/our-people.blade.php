
@extends('frontend.partial.main')

@section('css')
    <style> 
    .cursor.hasimg { 
      background: url("{{ asset('storage/' . $general->cursor_image) }}");
    }
    </style>
@endsection
@section('content')
    
    <main class="page-ourpeople">
      <section class="page-ourpeople__one cursor-img header-2">
        <div class="wrap">
          <h1 class="page-ourpeople__title"><span>WE CREATES MULTI-DIMENSIONS OF CREATIVITY THROUGH THE CREATION, COLLABORATION AND COMMUNICATION OF URBAN LIFESTYLE CULTURE</span><small>We empower brand and connect consumers through creative marketing solution for a better market presence</small></h1>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-ourpeople__two header-1" id="sec2">
        <div class="tagline-marquee marquee">
          <h2>OUR TEAM • OUR TEAM</h2>
        </div>
        <div class="wrap">
          {{-- <div class="page-ourpeople__two-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div> --}}
        </div>
        <div class="page-ourpeople__two-people">
          @foreach ($people as $p)
          <div class="people-item">
            <div class="photo"><img src="{{ asset('storage/' . $p->photo ) }}" alt="$p->photo"/></div>
            <div class="text">
              <div class="name">{!! $p->name !!}</div>
              <div class="position">{!! $p->title !!}</div>
              <div class="quote">{!! $p->description !!}</div>
            </div>
          </div>
          @endforeach
          <div class="people-item">
            <div class="photo"><img src="/images/ourpeople-1.jpg" alt="img"/></div>
            <div class="text">
              <div class="name">WACHYOE<br> MAHENDRA</div>
              <div class="position">CHIEF OPERATION OFFICER</div>
              <div class="quote">We empower brand and connect consumers through creative marketing solution for a better market presence</div>
            </div>
          </div>
          <div class="people-item">
            <div class="photo"><img src="/images/ourpeople-2.jpg" alt="img"/></div>
            <div class="text">
              <div class="name">ADHITYA ADJI DHAERMA</div>
              <div class="position">CHIEF OPERATION OFFICER</div>
              <div class="quote">We empower brand and connect consumers through creative marketing solution for a better market presence</div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-ourpeople__three header-2">
        <div class="wrap">
          <h2 class="page-ourpeople__three-title">OUR PARTNER</h2>
          <div class="page-ourpeople__three-logos">
            <div class="logo"><img src="/images/logo-1.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-2.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-3.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-4.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-5.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-6.png" alt="logo"/></div>
          </div>
          <div class="page-ourpeople__three-logos">
            <div class="logo"><img src="/images/logo-7.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-8.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-9.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-10.png" alt="logo"/></div>
            <div class="logo"><img src="/images/logo-11.png" alt="logo"/></div>
          </div>
        </div>
      </section>
      <section class="page-ourpeople__four">
        <div class="page-ourpeople__four-top">
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
