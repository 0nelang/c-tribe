@extends('frontend.partial.second')

@section('content')

    <main class="page-landing">
        <div class="bg-video">
            <video src="{{ asset('storage/' . $general->video_background) }}" type="video/mp4" playsinline="playsinline"
                autoplay="autoplay" loop="loop" muted="muted"></video>
        </div>
        <div class="wrap">
            <h1 class="page-landing__title">{!! $landing1->title !!}</h1><span class="page-landing__date"><img
                    class="ic" src="/images/icon-01.svg" alt="Icon" /><img class="ic"
                    src="/images/icon-01.svg" alt="Icon" /><span class="date">{!! $landing1->sub_title !!}</span><img
                    class="ic" src="/images/icon-01.svg" alt="Icon" /><img class="ic"
                    src="/images/icon-01.svg" alt="Icon" /></span><span
                class="page-landing__subtitle">{!! $landing2->title !!}</span>
            <div class="page-landing__desc">
                {!! $landing2->sub_title !!}
            </div>
            <div class="page-landing__info"><span class="title">INFO</span>
                <ul>
                    <li><a class="text-white" href="https://www.instagram.com/ctribejkt/" target="_blank">IG:
                            @CTRIBEJKT</a></li>
                    <li><a class="text-white" href="our-people.html" target="_blank">CREATIVETRIBEJKT.COM</a></li>
                </ul>
            </div>
        </div>
    </main>
@endsection
