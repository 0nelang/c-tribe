{{-- @dd($project->otherImage) --}}
@extends('frontend.partial.second')
@section('css')
    <style>
        .text-uppercase {
            text-transform: uppercase;
        }

        .page-home__footer {
            background-image: url("{{ asset('storage/' . $general->background_footer) }}");
        }

        .text-uppercase {
            text-transform: uppercase;
        }

    </style>
@endsection
@section('content')
    <main class="page-project">
        <section class="page-project-s__one">
            <div class="wrap">
                <h1 class="text-uppercase">{!! $project->title !!}</h1>
                <div class="desc">
                    {!! $project->description !!}
                </div>
                <div class="img"><img src="{{ asset('storage/' . $project->mainImage) }}" alt="Image" /><span
                        class="caption">CREATIVE TRIBE PROJECT</span></div>
            </div>
        </section>
        <section class="page-project-s__two">
            <div class="wrap">
                <div class="article-top">
                    @if ($project->detail1 != null)
                        <div class="col">
                            {!! $project->detail1 !!}
                        </div>
                    @endif
                    @if ($project->detail2 != null)
                        <div class="col tc">
                            {!! $project->detail2 !!}
                        </div>
                    @endif
                    @if ($project->detail3 != null)
                        <div class="col tr">
                            {!! $project->detail3 !!}
                        </div>
                    @endif
                    @if ($project->insta1 != null)
                        <div class="col"><a href="https://www.instagram.com/{{ $project->insta1 }}"
                                class="text-uppercase">@ {{ $project->insta1 }}</a></div>
                    @endif
                    @if ($project->insta2 != null)
                        <div class="col tc"><a href="https://www.instagram.com/{{ $project->insta2 }}"
                                class="text-uppercase">@ {{ $project->insta2 }}</a></div>
                    @endif
                    @if ($project->insta3 != null)
                        <div class="col tr"><a href="https://www.instagram.com/{{ $project->insta3 }}"
                                class="text-uppercase">@ {{ $project->insta3 }}</a></div>
                    @endif
                </div>
                <article>
                    {!! $project->body !!}
                </article>
            </div>
        </section>
        <section class="page-project-s__three">
            @if ($project->otherImage)
                @foreach ($project->otherImage as $f)
                    <div class="wrap"><img class="img-full" src="{{ asset('storage/' . $f->otherImage) }}"
                            alt="{{ $f->otherImage }}" /></div>
                @endforeach
            @endif
        </section>
        <section class="page-home__footer">
            <div class="page-home__footer-top">
                <div class="left"><a class="item email" href="mailto:{{ $general->email_footer }}">GENERAL
                        INQUIRIES <br>{{ $general->email_footer }}</a>
                    <div class="item phone">Phone<br><a
                            href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
                    <div class="item ig">INSTAGRAM<br><a
                            href="https://www.instagram.com/{{ $general->social_footer }}"
                            class="text-uppercase">{{ $general->social_footer }}.</a></div>
                </div>
                <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
            </div>
            <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}" alt="img" /></div>
        </section>
    </main>
@endsection
