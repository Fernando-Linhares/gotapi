<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    private static $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getEvent();
    }

    public function getEvent(): array
    {
        $events = $this->events();
        $event = $events[self::$index];
        self::$index++;

        return $event;
    }

    private function events(): array
    {
        return [
            ['name' => 'Robert\'s Rebellion', 'locale_id' => 1, 'description' => 'A rebellion against the Targaryen dynasty led by Robert Baratheon, resulting in the fall of the Targaryen dynasty and Robert becoming king.'],
            ['name' => 'Red Wedding', 'locale_id' => 10, 'description' => 'A massacre at the wedding feast of Edmure Tully and Roslin Frey, orchestrated by House Frey and House Bolton against House Stark and their allies.'],
            ['name' => 'Battle of the Blackwater', 'locale_id' => 4, 'description' => 'A major battle during the War of the Five Kings, where Stannis Baratheon attempts to take King\'s Landing from the Lannisters.'],
            ['name' => 'Battle of the Bastards', 'locale_id' => 5, 'description' => 'A battle between Jon Snow and Ramsay Bolton for control of Winterfell.'],
            ['name' => 'The Long Night', 'locale_id' => 3, 'description' => 'An epic battle against the White Walkers and their army of the dead, fought at Winterfell.'],
            ['name' => 'Death of Ned Stark', 'locale_id' => 5, 'description' => 'The execution of Eddard Stark, Lord of Winterfell and Warden of the North, ordered by King Joffrey Baratheon.'],
            ['name' => 'The Purple Wedding', 'locale_id' => 4, 'description' => 'The wedding of King Joffrey Baratheon and Margaery Tyrell, which ends in Joffrey\'s death.'],
            ['name' => 'Battle of Winterfell', 'locale_id' => 5, 'description' => 'A climactic battle between the living and the dead, where the fate of humanity is decided.'],
            ['name' => 'The Sack of King\'s Landing', 'locale_id' => 4, 'description' => 'The destruction of King\'s Landing by Daenerys Targaryen and her dragon, resulting in the death of thousands.'],
            ['name' => 'The Siege of Storm\'s End', 'locale_id' => 6, 'description' => 'The siege of Storm\'s End during Robert\'s Rebellion, where Stannis Baratheon held out against the forces of House Tyrell.'],
            ['name' => 'The Battle of the Trident', 'locale_id' => 1, 'description' => 'A decisive battle during Robert\'s Rebellion, where Robert Baratheon defeated Prince Rhaegar Targaryen, leading to the fall of the Targaryen dynasty.'],
            ['name' => 'The Fall of the Wall', 'locale_id' => 3, 'description' => 'The breach of the Wall by the Night King and the army of the dead, signaling the beginning of the Long Night.'],
        ];
    }

    public function countRegisters()
    {
        return count($this->events());
    }
}
