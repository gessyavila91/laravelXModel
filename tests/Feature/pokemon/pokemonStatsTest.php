<?php

use App\Enums\PokemonType;
use App\Models\Pokemon;
use function PHPUnit\Framework\assertEquals;

it('calculation of total sum of baseStat is equals 320 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(320, $pokemon->totalStats);
});

it('calculation of max attack Stat equals to 229 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(229, $pokemon->getMaxStat($pokemon->attack));
});

it('calculation of max defense Stat equals to 196 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(196, $pokemon->getMaxStat($pokemon->defense));
});

it('calculation of max spAttack Stat equals to 218 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(218, $pokemon->getMaxStat($pokemon->spAttack));
});

it('calculation of max spDefense Stat equals to 218 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(218, $pokemon->getMaxStat($pokemon->spDefense));
});

it('calculation of max speed Stat equals to 306 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(306, $pokemon->getMaxStat($pokemon->speed));
});

it('calculation of max hp Stat equals to 274 on pikachu', function () {
    $pokemon = Pokemon::factory()->make([
        'number' => 25,
        'name' => 'Pikachu',
        'type_1' => PokemonType::ELECTRIC,
        'type_2' => null,

        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    assertEquals(274, $pokemon->getMaxHPStat($pokemon->hp));
});
