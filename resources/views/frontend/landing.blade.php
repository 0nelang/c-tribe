@extends('frontend.partial.main')

@section('content')
    
    <main class="page-landing">
      <div class="bg-video">
        <video src="/images/bg-vid.mp4" type="video/mp4" playsinline="playsinline" autoplay="autoplay" loop="loop" muted="muted"> </video>
      </div>
      <div class="wrap">
        <h1 class="page-landing__title">MEMANGGIL TEMAN SEMUA <br>BARENG-BARENG <br>IKUT <span>PE<i>LARI</i>AN</span></h1><span class="page-landing__date"> <img class="ic" src="/images/icon-01.svg" alt="Icon"/><img class="ic" src="/images/icon-01.svg" alt="Icon"/><span class="date">13 feb 2022</span><img class="ic" src="/images/icon-01.svg" alt="Icon"/><img class="ic" src="/images/icon-01.svg" alt="Icon"/></span><span class="page-landing__subtitle">CUKUP PAKAI BAJU PUTIH <br>NYALAIN APLIKASI LARI, AND JUST RUN!</span>
        <div class="page-landing__desc">
          <p> <span class="text-white">PELARIAN</span> ADALAH SEBUAH MOVEMENT KOLEKTIF YANG MENGAJAK SETIAP ORANG UNTUK BISA MENJAUH DARI ANXIETY. BUKAN CUMA ITU, PERGERAKAN INI MENGINGATKAN AGAR KITA BELAJAR MENCINTAI JIWA RAGA YANG KALI INI LEWAT BERLARI. TUNJUKKAN KITA AWARE DAN KITA CARE AKAN MENTAL HEALTH ISSUE YANG TERJADI SEJAK PANDEMI DENGAN MENGAJAK TEMAN-TEMAN KOMUNITAS UNTUK BERLARI BERSAMA DI TEMPAT MASING-MASING. </p>
          <p>SEKUATNYA, SEJAUHNYA, SEMAUNYA, SETUJUAN.  LET’S ENDXIETY THE ANXIETY.</p>
          <p>SEBARKAN PERGERAKAN INI, JANGAN BERHENTI DI KITA AGAR PESAN MULIANYA TERDENGAR LANTANG.</p>
          <p>JOIN THE MOVEMENT AND INSPIRE OTHERS!</p>
          <p>CAPTURE YOUR RUNNING RESULT FROM ANY APPS AND POST IT ON YOUR SOCIAL MEDIA.</p>
          <p>USE <a class="text-white" href="#">#PELARIAN</a> AND TAG <a class="text-white" href="#">@CTRIBEJKT  </a><a class="text-white" href="#">@DASHSPORTS  </a><a class="text-white" href="#">@SANASTUDIO  </a><a class="text-white" href="#">@HATIPLONG</a></p>
        </div>
        <div class="page-landing__info"><span class="title">INFO</span>
          <ul>
            <li><a class="text-white" href="#">IG: @CTRIBEJKT </a></li>
            <li><a class="text-white" href="#">CTRIBEJKT.COM</a></li>
          </ul>
        </div>
      </div>
    </main>
    @endsection