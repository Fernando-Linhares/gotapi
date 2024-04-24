<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CharacterSeeder::class,
            EventSeeder::class,
            CharacterEventSeeder::class,
            HouseSeeder::class,
            LocaleSeeder::class,
        ]);
    }
}
