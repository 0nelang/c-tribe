{{-- @dd($featured) --}}
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

    .page-home__footer {
        background-image: url("{{ asset('storage/' . $general->background_footer) }}");
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .home

</style>
@section('content')

    <main class="page-home">
        <section class="page-home__one header-2">
            <div class="wrap">
                {!! $home1->title !!}
            </div>
            <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down.png"
                        alt="arrow-down" /></a></div>
        </section>
        <section class="page-home__two cursor-img header-1" id="sec2">
            <div class="wrap"><span class="huge-text">TRIBE</span><span class="small-text">We empower brand
                    and connect consumers<br> through creative marketing solution<br> for a better market presence</span>
                <div class="wrap-buttons sm-only"><a class="rtf" href="#">READ THE FEATURE</a></div>
            </div>
        </section>
        @foreach ($featured as $index => $f)
            {{-- @dd($f) --}}
            @if ($f->featured == 3)
                <section class="page-home__three header-1" style="background-image:url(
                                {{ asset('storage/' . $f->mainImage) }})">
                    <div class="wrap">
                        <h2><span class="oa">OUR ACTION</span><span
                                class="date">{{ $f->date }}</span><span>{{ $f->title }}</span></h2>
                        <div class="desc">
                            {!! $f->subTitle !!}
                        </div><a class="rtf" href="#">READ THE FEATURE</a>
                    </div>
                </section>
            @elseif($f->featured == 1)
                <section class="page-home__four header-2">
                    <div class="wrap">
                        <div class="col-left"><span class="oa">
                            </span></div>
                        <div class="col-right"><span class="date">{{ $f->date }}</span></div>
                        <div class="col-main">
                            <h2>{!! $f->title !!}</h2>
                            <div class="img"><img src="{{ asset('storage/' . $f->mainImage) }}"
                                    alt="{{ $f->mainImage }}" /></div>
                            <div class="desc">
                                {!! $f->subTitle !!}
                            </div><a class="rtf" href="#">READ THE FEATURE</a>
                        </div>
                    </div>
                </section>
            @elseif($f->featured == 2)
                <section class="page-home__five header-1" style="background-image:url(
                                {{ asset('storage/' . $f->mainImage) }})">
                    <div class="wrap">
                        <div class="col-left text-uppercase"><span class="oa">OUR ACTION</span>
                            <h2 class="text-uppercase">{!! $f->title !!}</h2>
                            <div class="desc text-uppercase">
                                {!! $f->subTitle !!}
                            </div>
                            <div class="desc sm-only">
                                {!! $f->subTitle !!}
                            </div>
                        </div>
                        <div class="col-right"><a class="rtf" href="#">READ THE FEATURE</a></div>
                    </div>
                </section>
            @elseif($f->featured == 4)
                <section class="page-home__six header-1">
                    <div class="wrap">
                        <div class="col-main">
                            <div class="sm-only"><span class="oa">OUR ACTION</span><span
                                    class="date">{{ $f->date }}</span></div>
                            <div class="tagline-marquee marquee">
                                <h2 class="text-uppercase">{{ strip_tags($f->title) }}<span
                                        class="star">*</span>{{ strip_tags($f->title) }}<span
                                        class="star">*</span></h2>
                            </div>
                            <div class="img"><img src="{{ asset('storage/' . $f->mainImage) }}"
                                    alt="{{ $f->mainImage }}" /></div>
                        </div>
                        <div class="col-bot-l"><span class="oa">OUR ACTION</span>
                            <div class="desc">
                                {!! $f->subTitle !!}
                            </div>
                        </div>
                        <div class="col-bot-c"><a class="rtf" href="#">READ THE FEATURE</a></div>
                        <div class="col-bot-r"><span class="date">{{ $f->date }}</span><span
                                class="meta">{{ $f->project }}</span></div>
                    </div>
                </section>
            @endif

        @endforeach
        <section class="page-home__footer">
            <div class="page-home__footer-top">
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
            <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img" />
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-217402264-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-217402264-1');
    </script>
@endsection
