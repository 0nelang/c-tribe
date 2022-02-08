<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Creative Tribe | {{ $page }}</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles/preview.css') }}" />
    <link rel="stylesheet" href="{{ asset('/plugins/lity/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles/toni.css') }}"/>
    @yield('css')
    {{-- <style>
        .main-menu__bg {
            background: url("{{ asset('storage/' . $general->background_menu) }}") no-repeat center;
        }

    </style> --}}
</head>

</html>

<body>
    <div class="cursor"></div>
    @yield('unmute')
    {{-- HEAD --}}
    @include('frontend.partial.headsecond')
    @yield('content')
    <!-- FOOTER-->
    <footer class="footer" id="footer"></footer>
</body>
<script src="{{ asset('/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/plugins/lity/lity.js') }}"></script>
<script src="{{ asset('/plugins/marquee/js/marquee.js') }}"></script>
<script src="{{ asset('/js/scripts/main.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-217402264-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-217402264-1');
    </script>
    @yield('js')
</html>
