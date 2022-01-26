@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

        .page-flagship__footer {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }

    </style>
    <main class="page-flagship">
        <section class="page-flagship-s__one">
            <div class="wrap">
                <h1>{!! $f->title !!}</h1>
                <div class="desc">
                    {!! $f->description !!}
                </div>

                <div class="img">
                    @if ($f->detailImage == null && $f->mainImage != null)
                        <img src="{{ asset('storage/' . $f->mainImage) }}" alt="Image" />

                    @elseif($f->detailImage != null) <img src="{{ asset('storage/' . $f->detailImage) }}"
                            alt="Image" />
                    @endif
                    <span class="caption">CREATIVE TRIBE FLAGSHIP EVENT VOL. 1</span>

                </div>
            </div>
        </section>
        <section class="page-flagship-s__two">
            <div class="wrap">
                <div class="article-top">
                    <div class="col">
                        <p>STRATEGY: BRAND ARTICULATIONS <br>AGENCY: STUDIO LORE <br>PRODUCTION COMPANY: BULLION PRODUCTIONS
                            <br>DIRECTOR: JAMES WILLIS
                        </p>
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
                    {!! $f->body !!}
                </article>
            </div>
        </section>
        @if ($f->otherImage)
            <section class="page-flagship-s__three">
            <div class="wrap">
                @foreach ($f->otherImage as $i)
                     <img class="img-full" src="{{ asset('storage/' . $i->otherImage) }}" alt="{{ $i->otherImage }}" />
                @endforeach
                   
                </div>
        </section>
        @endif
        
        <section class="page-flagship__footer">
            <div class="page-flagship__footer-top">
                <div class="left"><a class="item email" href="mailto:{{ $general->email_footer }}">GENERAL
                        INQUIRIES
                        <br>{{ $general->email_footer }}</a>
                    <div class="item phone">Phone<br><a
                            href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
                    <div class="item ig">INSTAGRAM<br><a target="_blank"
                            href="https://www.instagram.com/{{ $general->social_footer }}"
                            class="text-uppercase">{{ $general->social_footer }}.</a></div>
                </div>
                <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
            </div>
            <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}"
                    alt="{{ $general->brand_footer }}" /></div>
        </section>
    </main>
@endsection
