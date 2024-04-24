<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locale>
 */
class LocaleFactory extends Factory
{
    private static $index = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->getLocale();
    }

    private function getLocale(): array
    {
        $locales = $this->locales();
        $locale = $locales[self::$index];
        self::$index++;

        return $locale;
    }

    private function locales(): array
    {
        return [
            ['name' => 'Westeros', 'description' => 'The continent where most of the events in Game of Thrones take place.'],
            ['name' => 'Essos', 'description' => 'The continent located to the east of Westeros, home to many different cultures and civilizations.'],
            ['name' => 'The Wall', 'description' => 'A massive ice wall located in the northernmost part of Westeros, separating the Seven Kingdoms from the lands beyond.'],
            ['name' => 'King\'s Landing', 'description' => 'The capital city of the Seven Kingdoms, located on the eastern coast of Westeros.'],
            ['name' => 'Winterfell', 'description' => 'The ancestral home of House Stark, located in the North of Westeros.'],
            ['name' => 'Dragonstone', 'description' => 'An island fortress located off the coast of Westeros, formerly the seat of House Targaryen.'],
            ['name' => 'Pyke', 'description' => 'The seat of House Greyjoy, located on the Iron Islands.'],
            ['name' => 'The Eyrie', 'description' => 'A castle located high in the mountains of the Vale, known for its impregnable defenses.'],
            ['name' => 'Riverrun', 'description' => 'The seat of House Tully, located in the Riverlands.'],
            ['name' => 'Highgarden', 'description' => 'The seat of House Tyrell, located in the Reach.'],
            ['name' => 'Dorne', 'description' => 'A region located in the southernmost part of Westeros, known for its hot climate and strong independence.'],
            ['name' => 'Oldtown', 'description' => 'The oldest city in Westeros, located in the Reach and home to the Citadel, where maesters are trained.'],
            ['name' => 'Braavos', 'description' => 'A city located in Essos, known for its powerful banks and the Faceless Men.'],
            ['name' => 'Meereen', 'description' => 'A city located in Slaver\'s Bay, liberated by Daenerys Targaryen.'],
            ['name' => 'Vaes Dothrak', 'description' => 'The only city of the Dothraki people, located in the vast grasslands of Essos.'],
            ['name' => 'Qarth', 'description' => 'A city located in the southern part of Essos, known for its wealth and treachery.'],
            ['name' => 'Yunkai', 'description' => 'A city located in Slaver\'s Bay, conquered by Daenerys Targaryen.'],
            ['name' => 'Astapor', 'description' => 'A city located in Slaver\'s Bay, conquered by Daenerys Targaryen.'],
            ['name' => 'Volantis', 'description' => 'A city located in the southern part of Essos, known for its size and power.'],
            ['name' => 'Pentos', 'description' => 'A city located on the western coast of Essos, known for its trade and commerce.'],
        ];
    }

    public function countRegisters()
    {
        return count($this->locales());
    }
}
