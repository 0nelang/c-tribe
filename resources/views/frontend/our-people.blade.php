@extends('frontend.partial.main')
@section('css')
<style>
    /* .cursor.hasimg { 
    background: url("{{ asset('storage/' . $general->cursor_image) }}");
  } */
    /* .cursor.hasimg{background: url("../../../images/our-people-s1.jpg");} */
    .text-uppercase {
        text-transform: uppercase;
    }

</style>
@endsection
@section('content')
<main class="page-ourpeople">
    <section class="page-ourpeople__one cursor-img header-2">
        <div class="wrap">
            <h1 class="page-ourpeople__title"><span>WE CREATES MULTI-DIMENSIONS OF CREATIVITY THROUGH THE CREATION,
                    COLLABORATION AND COMMUNICATION OF URBAN LIFESTYLE CULTURE</span><small>We empower brand and connect
                    consumers through creative marketing solution for a better market presence</small></h1>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"><img src="/images/arrow-down.png" alt="arrow-down" /></a>
        </div>
    </section>
    <section class="page-ourpeople__two header-1" id="sec2">
        <div class="tagline-marquee marquee">
            <h2>OUR TEAM • OUR TEAM</h2>
        </div>
        <div class="page-ourpeople__two-people">
            @foreach($people as $p)
                <div class="people-item">
                    <div class="photo"><img src="{{ asset('storage/' . $p->photo ) }}" alt="img" /></div>
                    <div class="text">
                        <div class="name">{{ $p->name }}</div>
                        <div class="position">{{ $p->title }}</div>
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
            <div class="page-ourpeople__three-logos">
                <div class="logo"><img src="/images/logo-1.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-2.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-3.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-4.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-5.png" alt="logo" /></div>
            </div>
            <div class="page-ourpeople__three-logos">
                <div class="logo"><img src="/images/logo-8.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-6.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-10.png" alt="logo" style="height: 8.073vw;" /></div>
                <div class="logo"><img src="/images/logo-11.png" alt="logo" /></div>
                <div class="logo"><img src="/images/logo-7.png" alt="logo" /></div>
            </div>
        </div>
    </section>
    <section class="page-ourpeople__four">
        <div class="page-ourpeople__four-top">
            <div class="left"><a class="item email" href="mailto:GENERAL {{ $general->email_footer }}">GENERAL
                    INQUIRIES <br>{{ $general->email_footer }}</a>
                <div class="item phone">Phone<br><a
                        href="tel: {{ $general->phone_footer }}">{{ $general->phone_footer }}</a></div>
                <div class="item ig">INSTAGRAM<br><a target="_blank"
                        href="https://www.instagram.com/{{ $general->social_footer }}"
                        class="text-uppercase">{{ $general->social_footer }}.</a></div>
            </div>
            <div class="right"><span class="text-uppercase">{{ $general->addres_footer }}</span></div>
        </div>
        <div class="imgctribe"><img src="{{ asset('storage/' . $general->brand_footer) }}"
                alt="img" /></div>
    </section>
</main>
@endsection
