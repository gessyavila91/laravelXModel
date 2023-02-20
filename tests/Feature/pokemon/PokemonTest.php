<?php

it('can create a new Pikachu with post', function () {
    $response = $this->post('api/pokemon', [
        'number' => '25',
        'name' => 'pikachu',
        'type_1' => 'ELECTRIC',
        'type_2' => null,
        'hp' => '35',
        'attack' => '55',
        'defense' => '40',
        'spAttack' => '50',
        'spDefense' => '50',
        'speed' => '90',
    ]);

    $response->assertStatus(201);
});
