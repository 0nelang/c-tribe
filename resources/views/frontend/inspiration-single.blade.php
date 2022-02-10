@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

         .page-ourpeople__four {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }

        .page-inspiration-s__one{
          background-image: url({{ asset('storage/' . $i->mainImage) }});
        }
    </style>
@endsection
@section('content')
    <main class="page-inspiration-s">
      <section class="page-inspiration-s__one">
        <div class="wrap">
          <h1>{!! $i->title !!}</h1>
          <div class="desc">
            <p>{{ strip_tags($i->subTitle) }}</p>
          </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-inspiration-s__two" id="sec2">
        <div class="wrap">
          {!! $i->description !!}
        </div>
      </section>
      @if ($i->video)
          <section class="page-inspiration-s__three">
        <div class="wrap">
          <div class="video-wrap">
            <div class="btn-play"></div><video width="1920" height="1080" controls>
            <source src="{{ asset('storage/' . $i->video) }}" type="video/mp4">
            <Your>browser does not support the video tag.</Your></video>
          </div>
        </div>
      </section>
      @endif
      
      <section class="page-ourpeople__four">
        <div class="page-ourpeople__four-top">
            <div class="left"><a class="item email" href="mailto:{{ $general->email_footer }}">GENERAL
                    INQUIRIES <br>{{ $general->email_footer }}</a>
                <div class="item phone">Phone<br><a
                        href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
                <div class="item ig">INSTAGRAM<br><a target="_blank"
                        href="https://www.instagram.com/{{ $general->social_footer }}"
                        class="text-uppercase">{{ $general->social_footer }}.</a></div>
            </div>
            <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img" /></div>
    </section>
    </main>
@endsection