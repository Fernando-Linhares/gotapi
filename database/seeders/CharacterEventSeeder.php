<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CharacterEvent;

class CharacterEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amount = CharacterEvent::factory()->countRegisters();

        CharacterEvent::factory($amount)->create();
    }
}
