<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FlagshipImagesTableSeeder::class);
        $this->call(FlagshipsTableSeeder::class);
        $this->call(GeneralsTableSeeder::class);
        $this->call(InspirationsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OurPeoplesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProjectImagesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
