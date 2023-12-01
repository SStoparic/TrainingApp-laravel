<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Polaznik;
use App\Models\Instruktor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trening>
 */
class TreningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement($array = array('HIIT trening',
            'Kickbox', 'MMA trening', 'Funkcionalni trening', 'Powerlifting trening', 'Trening za seniore',
            'Trening za trkace', 'Calisthenics trening', 'CrossFit trening')),
            'trajanje' => $this->faker->numberBetween($min = 60, $max = 90),
            'nivoTezine' => $this->faker->randomElement($array = array('Pocetnicki','Srednji','Napredni')),
            'polaznik_id' => Polaznik::factory(),
            'instruktor_id' => Instruktor::factory(),
        ];
    }
}
