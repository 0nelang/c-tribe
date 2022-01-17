<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>CTRIBE</title>
    <meta name="description" content=""/>
    <meta name="theme-color" content=""/>
    <link rel="shortcut icon" href="favicon.png"/>
    <link rel="stylesheet" href="{{ asset('/plugins/lity/lity.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/styles/main.css') }}"/>
  </head>
  <body>
    <div class="cursor"></div>
    <!-- HEADER-->
    @include('frontend.partial.head')
    @yield('content')
    <!-- FOOTER-->
    <footer class="footer" id="footer"></footer>
  </body>
  <script src="{{ asset('/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('/plugins/lity/lity.js') }}"></script>
  <script src="{{ asset('/plugins/marquee/js/marquee.js') }}"></script>
  <script src="{{ asset('/js/scripts/main.js') }}"></script>
</html>