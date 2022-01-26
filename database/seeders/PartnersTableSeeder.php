<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'index' => 7,
                'logo' => 'logo/1642641101.png',
                'created_at' => '2022-01-20 02:11:41',
                'updated_at' => '2022-01-21 06:29:39',
            ),
            1 => 
            array (
                'id' => 2,
                'index' => 1,
                'logo' => 'logo/1642739087.png',
                'created_at' => '2022-01-20 02:11:54',
                'updated_at' => '2022-01-21 12:52:28',
            ),
            2 => 
            array (
                'id' => 3,
                'index' => 5,
                'logo' => 'logo/1642641123.png',
                'created_at' => '2022-01-20 02:12:03',
                'updated_at' => '2022-01-21 06:29:39',
            ),
            3 => 
            array (
                'id' => 4,
                'index' => 6,
                'logo' => 'logo/1642641137.png',
                'created_at' => '2022-01-20 02:12:17',
                'updated_at' => '2022-01-21 06:29:39',
            ),
            4 => 
            array (
                'id' => 5,
                'index' => 9,
                'logo' => 'logo/1642739048.png',
                'created_at' => '2022-01-20 02:12:28',
                'updated_at' => '2022-01-21 06:29:29',
            ),
            5 => 
            array (
                'id' => 6,
                'index' => 10,
                'logo' => 'logo/1642641158.png',
                'created_at' => '2022-01-20 02:12:38',
                'updated_at' => '2022-01-21 06:29:29',
            ),
            6 => 
            array (
                'id' => 8,
                'index' => 8,
                'logo' => 'logo/1642641179.png',
                'created_at' => '2022-01-20 02:12:59',
                'updated_at' => '2022-01-21 06:29:29',
            ),
            7 => 
            array (
                'id' => 9,
                'index' => 3,
                'logo' => 'logo/1642739120.png',
                'created_at' => '2022-01-20 02:13:02',
                'updated_at' => '2022-01-21 12:52:28',
            ),
            8 => 
            array (
                'id' => 10,
                'index' => 4,
                'logo' => 'logo/1642739176.png',
                'created_at' => '2022-01-20 02:13:07',
                'updated_at' => '2022-01-21 06:29:39',
            ),
            9 => 
            array (
                'id' => 11,
                'index' => 2,
                'logo' => 'logo/1642739150.png',
                'created_at' => '2022-01-20 02:22:20',
                'updated_at' => '2022-01-21 12:52:28',
            ),
        ));
        
        
    }
}