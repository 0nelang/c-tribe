@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

        .page-ourpeople__four {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }
    </style>
@endsection
@section('content')
    <main class="page-tribe">
      <section class="page-tribe-s__one">
        <div class="wrap">
          <h1 class="text-uppercase">{!! $t->title !!}</h1>
          <div class="desc">
           {!! $t->description !!}
          </div>
          @if ($t->image != null)
          <div class="img"><img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->image }}"/><span class="caption text-uppercase">{{ strip_tags($t->title) }}.</span></div>
          @endif
        </div>
      </section>
      <section class="page-tribe-s__two">
        <div class="wrap">
          <article>
           {!! $t->body !!}
          </article>
        </div>
      </section>
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