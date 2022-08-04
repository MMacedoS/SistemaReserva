<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        PeopleSeeder::class,
        UserSeeder::class,]
        );

    }
}
