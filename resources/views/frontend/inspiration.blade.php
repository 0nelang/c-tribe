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
    <main class="page-inspiration">
        <section class="page-inspiration__one">
            <div class="wrap">
                <div class="tagline-marquee marquee">
                    <h1>INSPIRATION • INSPIRATION</h1>
                </div>
            </div>
            <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down-green.png"
                        alt="arrow-down" /></a></div>
        </section>
        <section class="page-inspiration__two" id="sec2">
            <div class="wrap">
                @foreach ($inspiration as $index => $p)
                    @if ($index == 0 && count($inspiration) % 2 != 0)
                        @if ($p->mainImage != null)
                            <div class="item item--lg anim">
                                <div class="item__wrap">
                                    <div class="item__bg"
                                        style="background-image: url('{{ asset('storage/' . $p->mainImage) }}')"></div>
                                    <div class="item__date-sm"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    <div class="item__content">
                                        <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/{{ $url }}/detail/{{ $p->slug }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item item--alt anim">
                                <div class="item__wrap">
                                    <div class="item__bg"></div>
                                    <div class="item__date-sm dark"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    <div class="item__content">
                                        <h2 class="item__title">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/{{ $url }}/detail/{{ $p->slug }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @else
                        @if ($p->mainImage != null)
                            <div class="item anim">
                                <div class="item__wrap">
                                    <div class="item__bg"
                                        style="background-image: url('{{ asset('storage/' . $p->mainImage) }}')"></div>
                                    <div class="item__date-sm"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    <div class="item__content">
                                        <h2 class="item__title text-uppercase">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/{{ $url }}/detail/{{ $p->slug }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item item--alt anim">
                                <div class="item__wrap">
                                    <div class="item__bg"></div>
                                    <div class="item__date-sm dark"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    <div class="item__content">
                                        <h2 class="item__title">{!! $p->title !!}</h2>
                                        <div class="item__cta"><a href="/{{ $url }}/detail/{{ $p->slug }}">READ THE FEATURE</a></div>
                                        <div class="item__date"><span class="text-uppercase"><?php
                                        $time = strtotime($p->date);
                                        $newformat = date('jS M Y', $time);
                                        echo $newformat;
                                        ?></span></div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
