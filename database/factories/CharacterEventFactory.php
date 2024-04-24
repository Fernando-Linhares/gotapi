<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterEvent>
 */
class CharacterEventFactory extends Factory
{
    private static int $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getCharacterEvents();
    }

    private function getCharacterEvents(): array
    {
        $charactersEvent = $this->characterEvents();
        $characterEvent = $charactersEvent[self::$index];
        self::$index++;

        return $characterEvent;
    }

    public function countRegisters()
    {
        return count($this->characterEvents());
    }

    private function characterEvents(): array
    {
        return [
            ['character_id' => 1, 'event_id' => 1], ['character_id' => 15, 'event_id' => 1], ['character_id' => 7, 'event_id' => 1], ['character_id' => 12, 'event_id' => 1], ['character_id' => 16, 'event_id' => 1],
            // Red Wedding
            ['character_id' => 5, 'event_id' => 2], ['character_id' => 1, 'event_id' => 2], ['character_id' => 4, 'event_id' => 2], ['character_id' => 15, 'event_id' => 2],
            // Battle of the Blackwater
            ['character_id' => 2, 'event_id' => 3], ['character_id' => 6, 'event_id' => 3], ['character_id' => 8, 'event_id' => 3], ['character_id' => 10, 'event_id' => 3], ['character_id' => 11, 'event_id' => 3],
            // Battle of the Bastards
            ['character_id' => 1, 'event_id' => 4], ['character_id' => 5, 'event_id' => 4], ['character_id' => 19, 'event_id' => 4], ['character_id' => 20, 'event_id' => 4],
            // The Long Night
            ['character_id' => 1, 'event_id' => 5], ['character_id' => 2, 'event_id' => 5], ['character_id' => 4, 'event_id' => 5], ['character_id' => 8, 'event_id' => 5], ['character_id' => 19, 'event_id' => 5],
            // Death of Ned Stark
            ['character_id' => 1, 'event_id' => 6], ['character_id' => 7, 'event_id' => 6], ['character_id' => 15, 'event_id' => 6], ['character_id' => 12, 'event_id' => 6], ['character_id' => 5, 'event_id' => 6],
            // The Purple Wedding
            ['character_id' => 1, 'event_id' => 7], ['character_id' => 2, 'event_id' => 7], ['character_id' => 3, 'event_id' => 7], ['character_id' => 4, 'event_id' => 7],
            // Battle of Winterfell
            ['character_id' => 1, 'event_id' => 8], ['character_id' => 2, 'event_id' => 8], ['character_id' => 4, 'event_id' => 8], ['character_id' => 5, 'event_id' => 8], ['character_id' => 8, 'event_id' => 8],
            // The Sack of King's Landing
            ['character_id' => 2, 'event_id' => 9], ['character_id' => 3, 'event_id' => 9], ['character_id' => 4, 'event_id' => 9], ['character_id' => 8, 'event_id' => 9], ['character_id' => 5, 'event_id' => 9],
            // The Siege of Storm's End
            ['character_id' => 10, 'event_id' => 10], ['character_id' => 4, 'event_id' => 10],
            // The Battle of the Trident
            ['character_id' => 1, 'event_id' => 11], ['character_id' => 14, 'event_id' => 11], ['character_id' => 9, 'event_id' => 11], ['character_id' => 15, 'event_id' => 11],
            // The Fall of the Wall
            ['character_id' => 2, 'event_id' => 12], ['character_id' => 4, 'event_id' => 12], ['character_id' => 8, 'event_id' => 12], ['character_id' => 19, 'event_id' => 12],
        ];        
    }
}
