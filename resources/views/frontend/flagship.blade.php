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
    <link rel="stylesheet" href="/plugins/lity/lity.css"/>
    <link rel="stylesheet" href="/css/styles/main.css"/>
  </head>
  <body>
    <div class="cursor"></div>
    <!-- HEADER-->
    @include('frontend.partial.head')
    <main class="page-flagship">
      <section class="page-flagship__one">
        <div class="wrap">
          <div class="tagline-marquee marquee">
            <h1>FLAGSHIP EVENT • FLAGSHIP EVENT</h1>
          </div>
          <div class="desc">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
        <div class="arrow"><a class="has-scroll" href="#sec2"> <img src="/images/arrow-down-green.png" alt="arrow-down"/></a></div>
      </section>
      <section class="page-flagship__two" id="sec2">
        <div class="wrap">
          <div class="item item--lg anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-flagship-01.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">SUBCULTURE EVENT</h2>
                <div class="item__cta"> <a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-flagship-02.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">PELARIAN X <br>SANA STUDIO X DASH</h2>
                <div class="item__cta"> <a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item item--alt anim">
            <div class="item__wrap">
              <div class="item__bg"></div>
              <div class="item__date-sm dark"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">BAR HOPPING AREA <br>IN  SENOPATI</h2>
                <div class="item__cta"> <a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-flagship-03.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">NIKE DUNK EXHIBITION <br>AT PIK AVENUE</h2>
                <div class="item__cta"> <a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
          <div class="item anim">
            <div class="item__wrap">
              <div class="item__bg" style="background-image: url('..//images/img-flagship-04.jpg')"></div>
              <div class="item__date-sm"><span>15TH FEB 2022</span></div>
              <div class="item__content">
                <h2 class="item__title">TAKASHI MURAKAMI EXHIBITION <br>AT PLAZA INDONESIA LV </h2>
                <div class="item__cta"> <a href="#">READ THE FEATURE</a></div>
                <div class="item__date"><span>15TH FEB 2022</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-flagship__footer">
        <div class="page-flagship__footer-top">
          <div class="left"><a class="item email" href="mailto:GENERAL INQUIRIESHOLA@CTRIBEJKT.COM">GENERAL INQUIRIES <br>HOLA@CTRIBEJKT.COM</a>
            <div class="item phone">Phone<br><a href="tel: +62812 197 19179">+62812 197 19179</a></div>
            <div class="item ig">INSTAGRAM<br><a href="#">CTRIBEJKT.</a></div>
          </div>
          <div class="right"><span>JKT, IND</span></div>
        </div>
        <div class="imgctribe"><img src="/images/big-ctribe.svg" alt="img"/></div>
      </section>
    </main>
    <!-- FOOTER-->
    <footer class="footer" id="footer"></footer>
  </body>
  <script src="/plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="/plugins/lity/lity.js"></script>
  <script src="/plugins/marquee/js/marquee.js"></script>
  <script src="/js/scripts/main.js"></script>
</html>