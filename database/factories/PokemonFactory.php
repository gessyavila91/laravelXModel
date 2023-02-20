<?php

namespace Database\Factories;

use App\Enums\PokemonType;
use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->numberBetween(1, 151),
            'name' => strtoupper(ucwords(implode('', fake()->words(rand(1, 2))))),
            'type_1' => PokemonType::getRandomValue(),
            'type_2' => PokemonType::getRandomValue(),
            //Pokemon Stats
            'hp' => fake()->numberBetween(1, 255),
            'attack' => fake()->numberBetween(1, 255),
            'defense' => fake()->numberBetween(1, 255),
            'spAttack' => fake()->numberBetween(1, 255),
            'spDefense' => fake()->numberBetween(1, 255),
            'speed' => fake()->numberBetween(1, 255),

        ];
    }
}
