<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generals')->delete();
        
        \DB::table('generals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hover_image' => 'general-images/Puohtq7CDCzWyp1931wEnlNDIarK9XP4t6rdAb6X.jpg',
                'cursor_image' => 'general-images/NcNcYrShkwSwh2bZMgCz4SukmyvER1EZUeKzq2wM.jpg',
                'brand_navbar1' => 'general-images/XN16XDaNp9I1r6HDU06vWncrH6Ov2OqnMpsRkJNO.svg',
                'brand_navbar2' => 'general-images/IgpZaYu2Le8YTCkhrHBPquMMsZ5JqOiqfvfQh3PV.svg',
                'title' => NULL,
                'brand_footer' => 'general-images/GXJVlS4wHu6EHZvgtchDhONJnCvgvP63YIG66JdW.svg',
                'email_footer' => 'HOLA@CREATIVETRIBEJKT.COM',
                'phone_footer' => '+62812 197 19179',
                'social_footer' => 'ctribejkt',
                'addres_footer' => 'jkt,ind',
                'background_footer' => 'general-images/arnKsp3cF68o4U487TMkz6W6UchwrVt9cM1sB6iV.jpg',
                'video_background' => 'general-video/xHp1ggrbH31RjP24yHXZUqt5iSQ9KTR6JpjTznyF.mp4',
                'created_at' => NULL,
                'updated_at' => '2022-01-21 03:50:05',
            ),
        ));
        
        
    }
}