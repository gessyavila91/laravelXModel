<?php

use App\Enums\PokemonType;
use App\Models\Pokemon;
use Illuminate\Foundation\Testing\RefreshDatabase;

//uses(RefreshDatabase::class);

it('pokemon index can be render', function () {
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
    $pokemon->save();

    $response = $this->get('/pokemons');

    $response->assertStatus(200);
});

it('can create a new Pikachu with post', function () {
    $response = $this->post('api/pokemon', [
        'number' => '25',
        'name' => 'pikachu',
        'type_1' => 'ELECTRIC',
        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    $response->assertStatus(201);
});

it('can create a new factory Pokemon with post', function () {
    $pokemon = Pokemon::factory()->make();
    $response = $this->post('api/pokemon', [
        'number' => $pokemon->number,
        'name' => $pokemon->name,
        'type_1' => $pokemon->type_1,
        'type_2' => $pokemon->type_2,
        'hp' => $pokemon->hp,
        'attack' => $pokemon->attack,
        'defense' => $pokemon->defense,
        'spAttack' => $pokemon->spAttack,
        'spDefense' => $pokemon->spDefense,
        'speed' => $pokemon->speed,
    ]);

    $response->assertStatus(201);
});

it('can`t create a new Pokemon with shortName', function () {
    $pokemon = Pokemon::factory()->make();
    $response = $this->post('api/pokemon', [
        'number' => $pokemon->number,
        'name' => 'pi',
        'type_1' => $pokemon->type_1,
        'type_2' => $pokemon->type_2,
        'hp' => $pokemon->hp,
        'attack' => $pokemon->attack,
        'defense' => $pokemon->defense,
        'spAttack' => $pokemon->spAttack,
        'spDefense' => $pokemon->spDefense,
        'speed' => $pokemon->speed,
    ]);

    $response->assertStatus(400)->assertJson([
        'name' => [
            'El nombre del Pokémon debe tener al menos 3 caracteres',
        ],
    ]);
});

it('can`t create a new Pokemon with longName', function () {
    $pokemon = Pokemon::factory()->make();
    $response = $this->post('api/pokemon', [
        'number' => $pokemon->number,
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'type_1' => $pokemon->type_1,
        'type_2' => $pokemon->type_2,
        'hp' => $pokemon->hp,
        'attack' => $pokemon->attack,
        'defense' => $pokemon->defense,
        'spAttack' => $pokemon->spAttack,
        'spDefense' => $pokemon->spDefense,
        'speed' => $pokemon->speed,
    ]);
    //assert with response message
    $response->assertStatus(400)
        ->assertJson([
            'name' => [
                'El nombre del Pokémon no debe tener más de 255 caracteres',
            ],
        ]);
});
