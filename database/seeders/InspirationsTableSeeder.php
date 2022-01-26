<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InspirationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inspirations')->delete();
        
        \DB::table('inspirations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subTitle' => NULL,
                'featured' => 0,
                'date' => '15TH FEB 2022',
                'mainImage' => 'inspiration-images/ym4WDZqy4HTw4valvgoq1OfpJVo13VD9xglIKbLi.png',
                'description' => '<p>d</p>',
                'video' => NULL,
                'created_at' => '2022-01-20 02:27:43',
                'updated_at' => '2022-01-20 11:48:27',
            ),
            1 => 
            array (
                'id' => 2,
                'subTitle' => '<p>Ctribe scores a coveted meeting with The brand\'s special projects senior director,</p><p>the man behind every fashionable nike collaboration From the past decade</p>',
                'featured' => 1,
                'date' => '15TH FEB 2022',
                'mainImage' => 'inspiration-images/ubIDtv13FXkPeZh4ZfFEiOD4PW1V40IivPBToP0t.png',
                'description' => '<p>ev</p>',
                'video' => NULL,
                'created_at' => '2022-01-20 02:28:11',
                'updated_at' => '2022-01-21 03:29:41',
            ),
            2 => 
            array (
                'id' => 3,
                'subTitle' => NULL,
                'featured' => 0,
                'date' => '15TH FEB 2022',
                'mainImage' => NULL,
                'description' => '<p>d2</p>',
                'video' => NULL,
                'created_at' => '2022-01-20 02:28:41',
                'updated_at' => '2022-01-20 09:34:54',
            ),
            3 => 
            array (
                'id' => 4,
                'subTitle' => NULL,
                'featured' => 0,
                'date' => '15TH FEB 2022',
                'mainImage' => 'inspiration-images/aV0EyZBi9aGPlkppkzP3JwRPTxfvMTzVpJpUVh7K.png',
                'description' => '<p>de</p>',
                'video' => NULL,
                'created_at' => '2022-01-20 02:29:22',
                'updated_at' => '2022-01-20 10:17:48',
            ),
            4 => 
            array (
                'id' => 5,
                'subTitle' => NULL,
                'featured' => 0,
                'date' => '15TH FEB 2022',
                'mainImage' => 'inspiration-images/xWdvFJnGNS4OODsexgQmfP7qRJaJykA8Eif3NcDx.png',
                'description' => '<p>defwefw</p>',
                'video' => NULL,
                'created_at' => '2022-01-20 02:29:41',
                'updated_at' => '2022-01-20 11:04:00',
            ),
        ));
        
        
    }
}