@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

        .page-inspiration__footer {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }

        .page-flagship__footer {
            background-image: url({{ asset('storage/' . $general->background_footer) }});
        }

    </style>
@endsection
@section('content')
    <main class="page-flagship">
        <section class="page-flagship__one">
            <div class="wrap">
                <div class="tagline-marquee marquee">
                    <h1>FLAGSHIP EVENT • FLAGSHIP EVENT</h1>
                </div>
            </div>
            <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png"
                        alt="arrow-down" /></a></div>
        </section>
        <section class="page-flagship__two" id="sec2">
            <div class="wrap">
                @foreach ($flagship as $index => $p)
                    @if ($index == 0 && count($flagship) % 2 != 0)
                        @if ($p->mainImage != null)
                            <div class="item item--lg anim">
                                <div class="item__wrap">
                                    <div class="item__bg"
                                        style="background-image: url('{{ asset('storage/' . $p->mainImage) }}')"></div>
                                    <div class="item__date-sm"><span>{{ $p->date }}</span></div>
                                    <div class="item__content">
                                        <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/flagship/detail/{{ $p->slug }}/{{ $index }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase">{{ $p->date }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="item item--lg anim">
                            <div class="item__wrap">
                                <div class="item__bg"
                                    style="background-image: url('{{ asset('storage/' . $p->detailImage) }}')"></div>
                                <div class="item__date-sm"><span>{{ $p->date }}</span></div>
                                <div class="item__content">
                                    <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                    <div class="item__cta"><a href="/flagship/detail/{{ $p->slug }}/{{ $index }}">READ THE FEATURE</a></div>
                                    <div class="item__date"><span class="text-uppercase">{{ $p->date }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @else
                        @if ($p->mainImage != null || $p->detailImage != null)
                            <div class="item anim">
                                <div class="item__wrap">
                                    @if ($p->mainImage != null)
                                    <div class="item__bg"
                                        style="background-image: url('{{ asset('storage/' . $p->mainImage) }}')"></div>
                                        @else
                                        <div class="item__bg"
                                            style="background-image: url('{{ asset('storage/' . $p->detailImage) }}')"></div>
                                    @endif
                                    <div class="item__date-sm"><span>{{ $p->date }}</span></div>
                                    <div class="item__content">
                                        <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/flagship/detail/{{ $p->slug }}/{{ $index }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase">{{ $p->date }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item item--alt anim">
                                <div class="item__wrap">
                                    <div class="item__bg"></div>
                                    <div class="item__date-sm dark"><span>{{ $p->date }}</span></div>
                                    <div class="item__content">
                                        <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/flagship/detail/{{ $p->slug }}/{{ $index }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span>{{ $p->date }}</span></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </section>
        <section class="page-flagship__footer">
            <div class="page-flagship__footer-top">
                <div class="left"><a class="item email"
                        href="mailto:{{ $general->email_footer }}">GENERAL INQUIRIES
                        <br>{{ $general->email_footer }}</a>
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
