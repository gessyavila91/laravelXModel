<?php

use App\Enums\PokemonType;

return [
    'number.required' => 'The Pokémon number is required',
    'name.required' => 'The Pokémon name is required',
    'name.min' => 'The Pokémon name must be at least 3 characters',
    'name.max' => 'The Pokémon name must not exceed 255 characters',

    'type_1.required' => 'The Pokémon type is required',
    'type_1.enum_value' => 'The Pokémon type must be '.implode(',', PokemonType::getValues()),

    'type_2.enum_value' => 'The secondary Pokémon type must be '.implode(',', PokemonType::getValues()),

    'stat.required' => 'The :attribute field is required.',
    'stat.integer' => 'The Pokémon :attribute must be an integer',
    'stat.min' => 'The Pokémon :attribute must not be less than 0',
    'stat.max' => 'The Pokémon :attribute must not exceed 255',
];
