<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2022_01_12_032742_create_generals_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2022_01_12_033807_create_partners_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2022_01_12_034912_create_our_peoples_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2022_01_12_042343_create_pages_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2022_01_12_050027_create_services_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2022_01_12_051948_create_projects_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2022_01_12_084609_create_inspirations_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2022_01_18_073015_create_project_images_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2022_01_18_105334_create_flagships_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2022_01_19_074516_create_flagship_images_table',
                'batch' => 1,
            ),
        ));
        
        
    }
}