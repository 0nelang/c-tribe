@extends('frontend.partial.main')
@section('css')
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

        .text-uppercase {
            text-transform: uppercase;
        }

        .page-ourpeople__four {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }

    </style>
@endsection
@section('content')
    <main class="page-ourpeople">
        <section class="page-ourpeople__one cursor-img header-2">
            <div class="wrap">
                {!! $pege1->title !!}
            </div>
            <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down.png"
                        alt="arrow-down" /></a>
            </div>
        </section>
        <section class="page-ourpeople__two header-1" id="sec2">
            <div class="tagline-marquee marquee">
                <h2>OUR TEAM • OUR TEAM</h2>
            </div>
            <div class="page-ourpeople__two-people">
                @foreach ($people as $p)
                    <div class="people-item">
                        <div class="photo"><img src="{{ asset('storage/' . $p->photo) }}"
                                alt="{{ $p->photo }}" /></div>
                        <div class="text">
                            <div class="name text-uppercase">{{ $p->name }}</div>
                            <div class="position text-uppercase">{{ $p->title }}</div>
                            <div class="quote">
                                {!! $p->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="page-ourpeople__three header-2">
            <div class="wrap">
                <h2 class="page-ourpeople__three-title">OUR PARTNER</h2>
                @foreach ($partner as $index => $p)
                    @php
                        $index = $index + 1;
                    @endphp
                    @if ($index % 5 == 1 || $index == 0)
                        <div class="page-ourpeople__three-logos">
                    @endif
                    <div class="logo"><img src="{{ asset('storage/' . $p->logo) }}" 
                            alt="{{ $p->logo }}" /></div>
                    @if ($index % 5 == 0)
                </div>
            @endif
            @endforeach
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
