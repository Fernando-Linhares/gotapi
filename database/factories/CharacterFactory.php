<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    private static int $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getCharacter();
    }

    private function getCharacter(): array
    {
        $characters = $this->characters();
        $character = $characters[self::$index];
        self::$index++;

        return $character;
    }

    public function countRegisters()
    {
        return count($this->characters());
    }

    private function characters(): array
    {
        return [
            ['name' => 'Jon Snow', 'description' => 'The bastard son of Eddard Stark, later revealed to be the son of Rhaegar Targaryen and Lyanna Stark.', 'house_id' => 1],
            ['name' => 'Daenerys Targaryen', 'description' => 'The last surviving member of House Targaryen, with a claim to the Iron Throne.', 'house_id' => 3],
            ['name' => 'Tyrion Lannister', 'description' => 'The youngest son of Tywin Lannister, known for his wit and intelligence.', 'house_id' => 2],
            ['name' => 'Arya Stark', 'description' => 'The youngest daughter of Eddard Stark, known for her skill in combat and her list of people to kill.', 'house_id' => 1],
            ['name' => 'Sansa Stark', 'description' => 'The eldest daughter of Eddard Stark, who goes through significant character development throughout the series.', 'house_id' => 1],
            ['name' => 'Cersei Lannister', 'description' => 'The queen regent of the Seven Kingdoms, known for her ruthless pursuit of power.', 'house_id' => 2],
            ['name' => 'Jaime Lannister', 'description' => 'The eldest son of Tywin Lannister, known as the Kingslayer and for his complicated relationship with his sister, Cersei.', 'house_id' => 2],
            ['name' => 'Bran Stark', 'description' => 'The second son of Eddard Stark, who becomes the Three-Eyed Raven and gains mystical abilities.', 'house_id' => 1],
            ['name' => 'Robb Stark', 'description' => 'The eldest son of Eddard Stark, who is proclaimed King in the North during the War of the Five Kings.', 'house_id' => 1],
            ['name' => 'Joffrey Baratheon', 'description' => 'The sadistic and cruel king of the Seven Kingdoms, believed to be the eldest son of Robert Baratheon and Cersei Lannister.', 'house_id' => 4],
            ['name' => 'Stannis Baratheon', 'description' => 'The younger brother of King Robert Baratheon, who claims the Iron Throne after Robert\'s death.', 'house_id' => 4],
            ['name' => 'Margaery Tyrell', 'description' => 'The beautiful and cunning queen of the Seven Kingdoms, who marries both Renly Baratheon and Joffrey Baratheon.', 'house_id' => 6],
            ['name' => 'Ramsay Bolton', 'description' => 'The sadistic and brutal ruler of Winterfell, who flays his enemies and torments Theon Greyjoy.', 'house_id' => 11],
            ['name' => 'Eddard Stark', 'description' => 'The honorable lord of Winterfell and Warden of the North, who uncovers the truth about the parentage of Joffrey Baratheon and his siblings.', 'house_id' => 1],
            ['name' => 'Robert Baratheon', 'description' => 'The king of the Seven Kingdoms at the start of the series, known for his prowess in battle and his love of wine and women.', 'house_id' => 4],
            ['name' => 'Catelyn Stark', 'description' => 'The wife of Eddard Stark and mother of Robb, Sansa, Arya, Bran, and Rickon Stark.', 'house_id' => 1],
            ['name' => 'Khal Drogo', 'description' => 'The leader of a Dothraki khalasar, who marries Daenerys Targaryen.', 'house_id' => null],
            ['name' => 'Theon Greyjoy', 'description' => 'The youngest son of Balon Greyjoy, who is taken as a ward by Eddard Stark and later returns to the Iron Islands.', 'house_id' => 5],
            ['name' => 'Samwell Tarly', 'description' => 'A member of the Night\'s Watch, known for his intelligence and bravery.', 'house_id' => 8],
            ['name' => 'Jorah Mormont', 'description' => 'A knight exiled from Westeros, who serves as an advisor and protector to Daenerys Targaryen.', 'house_id' => 12],
            ['name' => 'Brienne of Tarth', 'description' => 'A skilled warrior and knight, who is loyal to the Starks and later becomes a sworn sword to Sansa Stark.', 'house_id' => null],
            ['name' => 'Sandor Clegane', 'description' => 'A fearsome warrior known as the Hound, who serves various masters throughout the series.', 'house_id' => 14],
        ];
    }
}
