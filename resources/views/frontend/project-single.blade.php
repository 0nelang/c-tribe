{{-- @dd($project->otherImage) --}}
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
          <h1 class="text-uppercase">{{ strip_tags($project->title) }}</h1>
          <div class="desc">
            {!! $project->description !!}
          </div>
          <div class="img"><img src="{{ asset('storage/' . $project->mainImage) }}" alt="Image"/><span class="caption">CREATIVE TRIBE PROJECT</span></div>
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
            {!! $project->body !!}
          </article>
        </div>
      </section>
      <section class="page-project-s__three">
        @if ($project->otherImage)
        @foreach ($project->otherImage as $f)
        <div class="wrap"><img class="img-full" src="{{ asset('storage/' . $f->otherImage) }}" alt="{{ $f->otherImage }}"/></div>
        @endforeach
        @endif
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