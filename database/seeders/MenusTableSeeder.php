<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('menus')->delete();

        \DB::table('menus')->insert(array (
            0 =>
            array (
                'id' => 1,
                'index' => 1,
                'default_name' => 'PROJECT',
                'default_url' => 'project',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'index' => 2,
                'default_name' => 'PEOPLE',
                'default_url' => 'people',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'index' => 3,
                'default_name' => 'TRIBES',
                'default_url' => 'tribes',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'index' => 4,
                'default_name' => 'FLAGSHIP',
                'default_url' => 'flagship',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'index' => 5,
                'default_name' => 'SHOP',
                'default_url' => 'shop',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'index' => 6,
                'default_name' => 'INSPIRATION',
                'default_url' => 'inspiration',
                'custom_name' => NULL,
                'custom_url' => NULL,
                'custom' => NULL,
                'disabled' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
