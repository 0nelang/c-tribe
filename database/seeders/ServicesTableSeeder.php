<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'index' => 6,
                'logo' => 'service-image/8GdjleNCT2G11lIeaipTp7Xy0XS2SgBN3oUJuSpg.png',
                'service' => 'Music Podcast',
                'image' => 'service-image/q92Z33KIde083narbajdbrdwrJXUyD6Ow0ocltjA.jpg',
                'description' => '<p>--</p>',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-20 11:56:44',
                'updated_at' => '2022-01-21 04:22:09',
            ),
            1 => 
            array (
                'id' => 2,
                'index' => 5,
                'logo' => 'service-image/jfIysfx4DANDU5AVncQDwtCQIG88uVBvGNShH7LC.png',
                'service' => 'Concept Store',
                'image' => 'service-image/PozmYBwVSjgoOkii68MjSohX70zKFlIm0KupNcWx.jpg',
                'description' => '<p>---</p>',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-20 11:57:34',
                'updated_at' => '2022-01-21 04:21:52',
            ),
            2 => 
            array (
                'id' => 3,
                'index' => 4,
                'logo' => 'service-image/fg6P7MOgo26NyU4SH5rOHZGcWJBLd3RvUMjwHecD.png',
                'service' => 'Bottleshop & Bar',
                'image' => 'service-image/1xBHJEGJMIX8iJaZzhOFfgF6Rwj5M1WD3LexBW54.jpg',
                'description' => '<p>--</p>',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-20 11:58:04',
                'updated_at' => '2022-01-21 04:21:35',
            ),
            3 => 
            array (
                'id' => 4,
                'index' => 3,
                'logo' => 'service-image/1UEN6bkZLno346LEF1uHnGMMMmz1RkAsYMAiBbXW.png',
                'service' => 'Meeting Room',
                'image' => 'service-image/SlLt3kIRHDAnYvSk3Je8TPBLY8yfi9NhfnX1QM0e.jpg',
                'description' => '<p>--</p>',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-20 11:58:33',
                'updated_at' => '2022-01-21 04:21:09',
            ),
            4 => 
            array (
                'id' => 5,
                'index' => 2,
                'logo' => 'service-image/4tVKgWMjuBeJwnIW1f8xSMC0HRYWkueYaXMvgx8P.png',
                'service' => 'Meeting Room',
                'image' => 'service-image/0iLbRRAnwerKoCmUAiiKJMduoZD8YBlkFnM4Ww9x.jpg',
                'description' => '<p>---</p>',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-20 11:59:09',
                'updated_at' => '2022-01-21 04:20:49',
            ),
            5 => 
            array (
                'id' => 6,
                'index' => 1,
                'logo' => 'service-image/BgNgTyO5wlK9TAHVYHwOK52CduSujS4feFb2N8ev.png',
                'service' => 'Food and Beverage',
                'image' => 'service-image/sAazZdGfjZQqt9GghnWY0ZTKqOABCPCzxcgaVLde.jpg',
                'description' => '<p>---</p>',
                'body' => '<p>---</p>',
                'created_at' => '2022-01-20 11:59:32',
                'updated_at' => '2022-01-21 04:20:15',
            ),
        ));
        
        
    }
}