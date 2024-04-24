<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    private static $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getHouse();
    }

    private function getHouse(): array
    {
        $houses = $this->houses();
        $house = $houses[self::$index];
        self::$index++;

        return $house;
    }

    private function houses(): array
    {
        return [
            ['name' => 'House Stark', 'description' => 'The noble family of the North, ruling from Winterfell.', 'icon' => '🐺'],
            ['name' => 'House Lannister', 'description' => 'One of the wealthiest families, ruling from Casterly Rock.', 'icon' => '🦁'],
            ['name' => 'House Targaryen', 'description' => 'Former rulers of the Seven Kingdoms, known for their dragons.', 'icon' => '🐉'],
            ['name' => 'House Baratheon', 'description' => 'Rulers who claimed the Iron Throne after Robert’s Rebellion.', 'icon' => '🦌'],
            ['name' => 'House Greyjoy', 'description' => 'Lords of the Iron Islands, known for their seafaring ways.', 'icon' => '🐙'],
            ['name' => 'House Tyrell', 'description' => 'Lords of the Reach, famed for their wealth and agricultural prowess.', 'icon' => '🌹'],
            ['name' => 'House Martell', 'description' => 'Rulers of Dorne, known for their resilience and hot climate.', 'icon' => '☀️'],
            ['name' => 'House Arryn', 'description' => 'Lords of the Vale, known for their impregnable castle, the Eyrie.', 'icon' => '🦅'],
            ['name' => 'House Tully', 'description' => 'Rulers of the Riverlands, with their seat at Riverrun.', 'icon' => '🐟'],
            ['name' => 'House Bolton', 'description' => 'Formerly vassals of House Stark, known for their cruelty.', 'icon' => '🔪'],
            ['name' => 'House Frey', 'description' => 'Lords of the Twins, known for their strategic position.', 'icon' => '🌉'],
            ['name' => 'House Mormont', 'description' => 'A noble family from the North, known for their loyalty.', 'icon' => '🐻'],
            ['name' => 'House Tarly', 'description' => 'Lords of Horn Hill, known for their military prowess.', 'icon' => '🗡️'],
            ['name' => 'House Clegane', 'description' => 'A lesser noble house, known for their fierce warriors.', 'icon' => '⚔️'],
            ['name' => 'House Dayne', 'description' => 'An ancient house of knights, famed for their sword Dawn.', 'icon' => '🌅'],
            ['name' => 'House Reed', 'description' => 'Lords of the crannogmen, sworn to House Stark.', 'icon' => '🍃'],
            ['name' => 'House Tarth', 'description' => 'Lords of the island of Tarth, known as the "Sapphire Isle".', 'icon' => '💎'],
            ['name' => 'House Karstark', 'description' => 'Formerly loyal bannermen of House Stark.', 'icon' => '❄️'],
            ['name' => 'House Seaworth', 'description' => 'A knightly house sworn to Stannis Baratheon.', 'icon' => '⛵'],
            ['name' => 'House Blackwood', 'description' => 'Noble house in the Riverlands, rivals of House Bracken.', 'icon' => '🌲'],
            ['name' => 'House Bracken', 'description' => 'Noble house in the Riverlands, rivals of House Blackwood.', 'icon' => '🏹'],
            ['name' => 'House Royce', 'description' => 'An ancient and proud house from the Vale.', 'icon' => '⚔️'],
            ['name' => 'House Redwyne', 'description' => 'Lords of the Arbor, known for their fleet of ships and wine.', 'icon' => '🍇'],
            ['name' => 'House Hightower', 'description' => 'Lords of Oldtown, one of the oldest and richest families in the Seven Kingdoms.', 'icon' => '🕯️'],
        ];
    }

    public function countRegisters()
    {
        return count($this->houses());
    }
}
