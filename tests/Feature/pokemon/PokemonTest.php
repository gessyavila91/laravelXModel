<?php

use App\Enums\PokemonType;
use App\Http\Controllers\PokemonController;
use App\Models\Pokemon;

it('pokemon index can be render', function () {

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
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur
        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur
        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur
        adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
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

it('can`t create a new Pokemon with everything wrong', function () {
    $response = $this->post('api/pokemon', [
        'number' => -151,
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'type_1' => null,
        'type_2' => 'ANY',
        'hp' => 256,
        'attack' => -256,
        'defense' => 256,
        'spAttack' => -256,
        'spDefense' => 256,
        'speed' => -256,
    ]);
    //assert with response message
    $response->assertStatus(400)
        ->assertJson([
            'name' => [
                'El nombre del Pokémon no debe tener más de 255 caracteres',
            ],
            'type_1' => [
                'El tipo de Pokémon es obligatorio',
            ],
            'type_2' => [
                'El tipo secundario de Pokémon debe ser NORMAL,FIGHTING,FLYING,POISON,GROUND,ROCK,BUG,GHOST,STEEL,FIRE,WATER,GRASS,ELECTRIC,PSYCHIC,ICE,DRAGON,DARK,FAIRY',
            ],
            'hp' => [
                'La vida del Pokémon no debe ser mayor a 255',
            ],
            'attack' => [
                'El ataque del Pokémon no debe ser menor a 0',
            ],
            'defense' => [
                'La defensa del Pokémon no debe ser mayor a 255',
            ],
            'spAttack' => [
                'El ataque especial del Pokémon no debe ser menor a 0',
            ],
            'spDefense' => [
                'La defensa especial del Pokémon no debe ser mayor a 255',
            ],
            'speed' => [
                'La velocidad del Pokémon no debe ser menor a 0',
            ],
        ]);
});

it('find Pikachu', function () {
    //assert with response message
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(25);

    $this->assertEquals([
        'number' => '25',
        'name' => 'Pikachu',
        'type_1' => 'ELECTRIC',
        'type_2' => null,
        'total' => '320',
        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ], $json);
});

it('find Charizard (No Mega)', function () {
    //assert with response message
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(6);

    $this->assertEquals([
        'number' => '6',
        'name' => 'Charizard',
        'type_1' => 'FIRE',
        'type_2' => 'FLYING',
        'total' => '534',
        'hp' => '78',
        'attack' => '84',
        'defense' => '78',
        'spAttack' => '109',
        'spDefense' => '85',
        'speed' => '100',
    ], $json);
});

it('can find Mega Charizard X and Y using Option', function () {
    //assert with Charizard X
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(6, ['mega' => 'X']);

    $this->assertEquals([
        'number' => '6',
        'form' => [
            'mega' => 'X',
        ],
        'name' => 'Charizard X',
        'type_1' => 'FIRE',
        'type_2' => 'DRAGON',
        'total' => '634',
        'hp' => '78',
        'attack' => '130',
        'defense' => '111',
        'spAttack' => '130',
        'spDefense' => '85',
        'speed' => '100',
    ], $json);

    //assert with Charizard Y
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(6, ['mega' => 'Y']);

    $this->assertEquals([
        'number' => '6',
        'form' => [
            'mega' => 'Y',
        ],
        'name' => 'Charizard Y',
        'type_1' => 'FIRE',
        'type_2' => 'FLYING',
        'total' => '634',
        'hp' => '78',
        'attack' => '104',
        'defense' => '78',
        'spAttack' => '159',
        'spDefense' => '115',
        'speed' => '100',
    ], $json);
});

it('can`t find Mega Charizard Y with number and option with not  "Y"', function () {
    //assert with response message
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(6, ['mega']);

    $this->assertEmpty($json);
});

it('can find Blastoise', function () {
    //assert finding Blastoise
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(9);

    $this->assertEquals([
        'number' => '9',
        'name' => 'Blastoise',
        'type_1' => 'WATER',
        'type_2' => null,
        'total' => '530',
        'hp' => '79',
        'attack' => '83',
        'defense' => '100',
        'spAttack' => '85',
        'spDefense' => '105',
        'speed' => '78',
    ], $json);

    //assert finding Mega Blastoise
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(9, ['mega']);

    $this->assertEquals([
        'number' => '9',
        'name' => 'Blastoise',
        'form' => 'mega',
        'type_1' => 'WATER',
        'type_2' => null,
        'total' => '630',
        'hp' => '79',
        'attack' => '103',
        'defense' => '120',
        'spAttack' => '135',
        'spDefense' => '115',
        'speed' => '78',
    ], $json);
});

it('get Empty array using incorrect number', function () {
    //assert with response message
    $pokemonC = new PokemonController();
    $json = $pokemonC->getPokemonByNumberFromJson(200);

    $this->assertEmpty($json);
});
