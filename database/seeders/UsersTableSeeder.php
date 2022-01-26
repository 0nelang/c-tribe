<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HUAc9HFHeKYbeYc69cJz3OhhYsSOXXtBea3.A4JiStp9blltLtSPS',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-01-21 01:52:12',
            ),
        ));
        
        
    }
}