<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand' => 'Nike',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => 1,
                'project' => 'Brand Expression',
                'team' => '<p>CREATIVE DIRECTOR ABANK / GROUP HEAD BEN / ACCOUNT MANAGER DON / ART DIRECTOR BIMA</p><p><span style="font-family: sans-serif;">COPYWRITER ANTI / GRAPHIC DESIGN EJA / GRAPHIC DESIGN DIRGA</span></p>',
                'title' => '<h2>drake and nike</h2><h2>brand expression</h2>',
                'date' => '2022',
                'mainImage' => 'project-image/zu340wFlhMnZwXGCWNYlL7iDro14Kzj8lNyjBj3Q.jpg',
                'description' => 'asddasd',
                'body' => '<p>adsadasdsad</p>',
                'created_at' => '2022-01-19 17:30:42',
                'updated_at' => '2022-01-20 11:10:56',
            ),
            1 => 
            array (
                'id' => 2,
                'brand' => 'wonderful indonesia',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Print\'Ads & Digital Banner',
                'team' => '<p>--</p>',
                'title' => '----',
                'date' => '2022',
                'mainImage' => 'project-image/S0loswC955DwhCKUrbyhFECAJyzOnRIqbahSENsF.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-19 17:32:13',
                'updated_at' => '2022-01-20 11:13:18',
            ),
            2 => 
            array (
                'id' => 7,
                'brand' => 'Kenji Takimi',
                'subTitle' => NULL,
                'type' => 'person',
                'featured' => 0,
                'project' => 'ISLE MIXES WITH KENJI TAKIMI FROM CRUE L RECORDS / JP TOKYO',
                'team' => NULL,
                'title' => 'dummy',
                'date' => '15TH FEB 2022',
                'mainImage' => 'project-image/Ftb5daVOBEXZvg0sUzgX3VtOQ2D2tMxUg9TL7EJm.jpg',
                'description' => '<p>Kenji Takimi is a true pioneer of the Leftfield/Alternative Disco scene, <br>and his label Crue-l Records has been at the forefront of Japanese <br>alternative music since its inception 20 years ago. Kenji Takimi was <br>one of the first Japanese DJs to collaborat.</p>',
                'body' => '<p>body</p>',
                'created_at' => '2022-01-20 08:53:54',
                'updated_at' => '2022-01-20 11:03:24',
            ),
            3 => 
            array (
                'id' => 8,
                'brand' => 'malboro',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'DWP M Land',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/ZOi9zzcWMGrn9EweHOlKanV04aZD0UEHifmYJdMU.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 04:32:20',
                'updated_at' => '2022-01-21 04:32:20',
            ),
            4 => 
            array (
                'id' => 9,
                'brand' => 'sampoerna',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Limited Edition-Pack Series',
                'team' => '<p>--</p>',
                'title' => '<p>----</p>',
                'date' => '2022',
                'mainImage' => 'project-image/4873I7MAdqw6qZ7BSDjTc0dcAKMoji2ZHuwLBenq.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 05:58:27',
                'updated_at' => '2022-01-21 05:58:27',
            ),
            5 => 
            array (
                'id' => 10,
                'brand' => 'permata bank',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Cant Stop Me',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/D9HshirGJYzdA2xqQO5jEnmUM7dGzKPCv3AWgjii.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 05:59:25',
                'updated_at' => '2022-01-21 05:59:25',
            ),
            6 => 
            array (
                'id' => 11,
                'brand' => 'wonderful indonesia',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Mandalika Conceptual Photo Series',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/LIqh3HJAqHmjznASqKtS05deeYDjUTxJleosL690.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:00:00',
                'updated_at' => '2022-01-21 06:00:00',
            ),
            7 => 
            array (
                'id' => 12,
                'brand' => 'magnum',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Digital Banner',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/jOVW6mqu3CpLrmspy4ehFG24O2dv5Lm1BMtwG9ge.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:15:20',
                'updated_at' => '2022-01-21 06:15:20',
            ),
            8 => 
            array (
                'id' => 13,
                'brand' => 'nike',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Brand Expression',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/EHdoVU7SKVK3HfRKazLLsOe7edOH33mRl3MMv1LV.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:16:15',
                'updated_at' => '2022-01-21 06:16:15',
            ),
            9 => 
            array (
                'id' => 14,
                'brand' => 'wonderful indonesia',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Mandalika Conceptual Photo Series',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/znnQHGgxdARqAAMqO2T9wjH8FNFbcubgzzVemuhg.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:16:57',
                'updated_at' => '2022-01-21 06:16:57',
            ),
            10 => 
            array (
                'id' => 15,
                'brand' => 'malboro',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Dwp M Land',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/CGcCULtT3lZw5iMFrpl43mflql1zZok5vLvjv7YL.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:17:45',
                'updated_at' => '2022-01-21 06:17:45',
            ),
            11 => 
            array (
                'id' => 16,
                'brand' => 'sampoerna',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Limited Edition-Pack Series',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/Eu5hRWmL8vvkfVQkSFhWylgO4yG8THkkMNMJFeNM.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:18:28',
                'updated_at' => '2022-01-21 06:18:28',
            ),
            12 => 
            array (
                'id' => 17,
                'brand' => 'permata bank',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Cant Stop Me',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/Xrpb4SZBB4hpuKAbCV8Ti3dHAirxNZGFVrVY0Z4E.jpg',
                'description' => '--',
                'body' => '<p><br></p><p>--</p>',
                'created_at' => '2022-01-21 06:19:14',
                'updated_at' => '2022-01-21 06:19:14',
            ),
            13 => 
            array (
                'id' => 18,
                'brand' => 'wonderful indonesia',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Mandalika Conceptual Photo Series',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/7UNstZ7oTmZ3kwvPtaxqdr9v6dvs4Ogi3l4QpqpM.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:20:02',
                'updated_at' => '2022-01-21 06:20:02',
            ),
            14 => 
            array (
                'id' => 19,
                'brand' => 'magnum',
                'subTitle' => NULL,
                'type' => 'project',
                'featured' => NULL,
                'project' => 'Digital Banner',
                'team' => '<p>--</p>',
                'title' => '<p>--</p>',
                'date' => '2022',
                'mainImage' => 'project-image/EwHOmGj0zK9bXSi0nxF4q8vtP86ImxbZa65dqA6h.jpg',
                'description' => '--',
                'body' => '<p>--</p>',
                'created_at' => '2022-01-21 06:20:30',
                'updated_at' => '2022-01-21 06:20:30',
            ),
        ));
        
        
    }
}