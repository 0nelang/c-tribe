@extends('frontend.partial.second')

@section('unmute')
    <p id="btn-audio">UNMUTE</p>
@endsection

@section('content')

    <main class="page-landing">
        <div class="bg-video">
<<<<<<< HEAD
            <video src="{{ asset('storage/' . $general->video_background) }}" type="video/mp4" playsinline="playsinline"
                autoplay="autoplay" loop="loop" muted="muted" id="video-bg"></video>
                @if ( $general->link != null )
                <iframe width="100%" src="{{ str_replace( 'youtu.be', 'www.youtube-nocookie.com/embed', $general->link) }}?controls=0&amp;start=4&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                @endif
        </div>
=======
            {{-- <video src="{{ asset('storage/' . $general->video_background) }}" type="video/mp4" playsinline="playsinline"
                autoplay="autoplay" loop="loop" muted="muted" id="video-bg"></video> --}}
<<<<<<< HEAD
                <iframe width="100%" src="https://www.youtube-nocookie.com/embed/pAl4K9W2l1A?autoplay=1&amp;mute=1&amp;enablejsapi=1&amp;loop=1&amp;playlist=pAl4K9W2l1A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="wrap teks-home">
=======
                <iframe width="100%" src="https://www.youtube-nocookie.com/embed/pAl4K9W2l1A?autoplay=1&amp;mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
>>>>>>> 66b197e03d34aaa28a29c0973a41500bdb84ab37
        <div class="wrap teks-home">
>>>>>>> 39607aa7c84b08d43875771fccd5fea8182a878d
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

@section('js')
    <script>
        var video = document.getElementById("video-bg");
        var muteButton = document.getElementById("btn-audio");
        muteButton.addEventListener("click", function() {
            if (video.muted == true) {
                // Mute the video
                video.muted = false;

                // Update the button text
                muteButton.innerHTML = "MUTE";
            } else {
                // Unmute the video
                video.muted = true;

                // Update the button text
                muteButton.innerHTML = "UNMUTE";
            }
        });
    </script>
@endsection
