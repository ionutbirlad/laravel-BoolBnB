<?php

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
        // $this->call(UserSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        // $this->call(ApartamentsTableSeeder::class);
        // $this->call(MessagesTableSeeder::class);
        // $this->call(PhotosTableSeeder::class);
        // $this->call(InfoUserTableSeeder::class);
    }
}
