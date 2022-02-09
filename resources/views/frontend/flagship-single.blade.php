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
                <h1 class="text-uppercase">{!! $f->title !!}</h1>
                <div class="desc">
                    {!! $f->description !!}
                </div>

                <div class="img">
                    @if ($f->mainImage == null && $f->detailImage != null)
                        <img src="{{ asset('storage/' . $f->detailImage) }}" alt="Image" />

                    @elseif($f->mainImage != null && $f->detailImage == null)
                        <img src="{{ asset('storage/' . $f->mainImage) }}" alt="Image" />
                    @elseif($f->mainImage != null && $f->detailImage != null)
                        <img src="{{ asset('storage/' . $f->detailImage) }}" alt="Image" />
                    @endif
                    <span class="caption">CREATIVE TRIBE FLAGSHIP EVENT VOL. {{ $index + 1 }}</span>

                </div>
            </div>
        </section>
        <section class="page-flagship-s__two">
            <div class="wrap">
                <div class="article-top">
                    @if ($f->detail1 != null)
                        <div class="col">
                            {!! $f->detail1 !!}
                        </div>
                    @endif
                    @if ($f->detail2 != null)
                        <div class="col tc">
                            {!! $f->detail2 !!}
                        </div>
                    @endif
                    @if ($f->detail3 != null)
                        <div class="col tr">
                            {!! $f->detail3 !!}
                        </div>
                    @endif
                    @if ($f->insta1 != null)
                        <div class="col"><a target="_blank" href="https://www.instagram.com/{{ $f->insta1 }}"
                                class="text-uppercase">@<?= $f->insta1 ?>
                            </a></div>
                    @endif
                    @if ($f->insta2 != null)
                        <div class="col tc"><a target="_blank" href="https://www.instagram.com/{{ $f->insta2 }}"
                                class="text-uppercase">@<?= $f->insta2 ?></a></div>
                    @endif
                    @if ($f->insta3 != null)
                        <div class="col tr"><a target="_blank" href="https://www.instagram.com/{{ $f->insta3 }}"
                                class="text-uppercase">@<?= $f->insta3 ?></a></div>
                    @endif
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
                        <img class="img-full" src="{{ asset('storage/' . $i->otherImage) }}"
                            alt="{{ $i->otherImage }}" />
                    @endforeach

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
