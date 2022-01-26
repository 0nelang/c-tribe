<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlagshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flagships')->delete();
        
        \DB::table('flagships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'SUBCULTURE EVENT',
                'subTitle' => NULL,
                'featured' => 0,
                'date' => '15TH FEB 2022',
                'description' => 'bt',
                'body' => '<p>tbb</p>',
                'mainImage' => 'flagship-image/Bs95vxNxOWZeDw6bb1Aeg7VkS0DYA04hDWxXt334.jpg',
                'detailImage' => NULL,
                'created_at' => '2022-01-20 02:31:38',
                'updated_at' => '2022-01-24 03:56:13',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'PELARIAN X SANA STUDIO X DASH',
                'subTitle' => '<p>We empower brand and connect consumers <br>through creative marketing solution for a better market presence</p>',
                'featured' => 1,
                'date' => '15TH FEB 2022',
                'description' => '<p>We empower brand and connect consumers <br>through creative marketing solution for a better market presence</p>',
                'body' => '<p>few</p>',
                'mainImage' => 'project-image/c18GSBLaSg2OoZAoCl3pyHg96VQ5MvjkOY8Kf35S.jpg',
                'detailImage' => 'project-image/n6elkFtghOFMAiaMz0I2qN2zoGBmMMk3j4y8juY2.jpg',
                'created_at' => '2022-01-20 02:32:07',
                'updated_at' => '2022-01-24 03:56:15',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'BAR HOPPING AREA IN SENOPATI',
                'subTitle' => NULL,
                'featured' => NULL,
                'date' => '15TH FEB 2022',
                'description' => 'de',
                'body' => '<p>de</p>',
                'mainImage' => NULL,
                'detailImage' => NULL,
                'created_at' => '2022-01-20 02:32:35',
                'updated_at' => '2022-01-20 02:32:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'NIKE DUNK EXHIBITION AT PIK AVENUE',
                'subTitle' => NULL,
                'featured' => NULL,
                'date' => '15TH FEB 2022',
                'description' => 'fe',
                'body' => '<p>fe</p>',
                'mainImage' => 'flagship-image/0dgK5MotFYyEK6nSSChkDu8XqAXM7oD3qKopSawz.jpg',
                'detailImage' => NULL,
                'created_at' => '2022-01-20 02:32:52',
                'updated_at' => '2022-01-20 02:32:52',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'TAKASHI MURAKAMI EXHIBITION AT PLAZA INDONESIA LV',
                'subTitle' => NULL,
                'featured' => NULL,
                'date' => '15TH FEB 2022',
                'description' => 'ce',
                'body' => '<p>ce</p>',
                'mainImage' => 'flagship-image/0dAMzJjxGjfm5UYSlC8eG8iWKthWvqGQENQCJ2NB.jpg',
                'detailImage' => NULL,
                'created_at' => '2022-01-20 02:33:12',
                'updated_at' => '2022-01-20 02:33:12',
            ),
        ));
        
        
    }
}