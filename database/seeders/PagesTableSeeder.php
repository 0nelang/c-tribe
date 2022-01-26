<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page' => 'Landing 1',
                'title' => '<h1 class="page-landing__title">MEMANGGIL TEMAN SEMUA<br>BARENG-BARENG<br>IKUT<span>PE</span><i>LARI</i><span>AN</span></h1>',
                'sub_title' => '13 feb 2022',
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 05:54:43',
            ),
            1 => 
            array (
                'id' => 2,
                'page' => 'Landing 2',
                'title' => '<div>CUKUP PAKAI BAJU PUTIH</div><div>NYALAIN APLIKASI LARI, AND JUST RUN!</div>',
                'sub_title' => '<p><span class="text-white">PELARIAN</span> ADALAH SEBUAH MOVEMENT KOLEKTIF YANG MENGAJAK SETIAP ORANG UNTUK BISA MENJAUH DARI ANXIETY. BUKAN CUMA ITU, PERGERAKAN INI MENGINGATKAN AGAR KITA BELAJAR MENCINTAI JIWA RAGA YANG KALI INI LEWAT BERLARI. TUNJUKKAN KITA AWARE DAN KITA CARE AKAN MENTAL HEALTH ISSUE YANG TERJADI SEJAK PANDEMI DENGAN MENGAJAK TEMAN-TEMAN KOMUNITAS UNTUK BERLARI BERSAMA DI TEMPAT MASING-MASING.</p>
<p>SEKUATNYA, SEJAUHNYA, SEMAUNYA, SETUJUAN.  LET’S ENDXIETY THE ANXIETY.</p>
<p>SEBARKAN PERGERAKAN INI, JANGAN BERHENTI DI KITA AGAR PESAN MULIANYA TERDENGAR LANTANG.</p>
<p>JOIN THE MOVEMENT AND INSPIRE OTHERS!</p>
<p>CAPTURE YOUR RUNNING RESULT FROM ANY APPS AND POST IT ON YOUR SOCIAL MEDIA.</p>
<p>USE &nbsp;<a class="text-white" href="https://www.instagram.com/explore/tags/pelarian/" target="_blank">#PELARIAN</a> &nbsp;AND TAG &nbsp;<a class="text-white" href="https://www.instagram.com/ctribejkt/" target="_blank">@CTRIBEJKT &nbsp;</a><a class="text-white" href="https://www.instagram.com/dashsportsco/" target="_blank">@DASHSPORTS &nbsp;</a><a class="text-white" href="https://www.instagram.com/sanastudio/" target="_blank">@SANASTUDIO &nbsp;</a><a class="text-white" href="https://www.instagram.com/hatiplong/" target="_blank">@HATIPLONG &nbsp;</a><a class="text-white" href="https://www.instagram.com/runhoodmag/" target="_blank">@RUNHOODMAG</a></p>',
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 05:56:07',
            ),
            2 => 
            array (
                'id' => 4,
                'page' => 'Home 1',
                'title' => '<h1><span>WE CREATES MULTI-DIMENSIONS OF CREATIVITY THROUGH THE CREATION, COLLABORATION AND COMMUNICATION OF URBAN LIFESTYLE CULTURE</span><small>We empower brand and connect consumers through creative marketing solution for a better market presence</small></h1>',
                'sub_title' => NULL,
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 06:12:42',
            ),
            3 => 
            array (
                'id' => 5,
                'page' => 'Home 2',
                'title' => '.',
                'sub_title' => NULL,
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 10:40:18',
            ),
            4 => 
            array (
                'id' => 10,
                'page' => 'Our People 1',
                'title' => '<h1><span>WE CREATES MULTI-DIMENSIONS OF CREATIVITY THROUGH THE CREATION, COLLABORATION AND COMMUNICATION OF URBAN LIFESTYLE CULTURE&nbsp;</span><small>We empower brand and connect consumers through creative marketing solution for a better market presence</small></h1>',
                'sub_title' => NULL,
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 10:39:56',
            ),
            5 => 
            array (
                'id' => 11,
                'page' => 'Our People 2',
                'title' => '.',
                'sub_title' => '<p><br></p><p><br></p>',
            
                'created_at' => NULL,
                'updated_at' => '2022-01-20 10:38:35',
            ),
        ));
        
        
    }
}