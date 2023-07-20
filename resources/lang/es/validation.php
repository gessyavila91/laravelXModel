<?php

use App\Enums\PokemonType;

return [
    'number.required' => 'El número del Pokémon es obligatorio',
    'name.required' => 'El nombre del Pokémon es obligatorio',
    'name.min' => 'El nombre del Pokémon debe tener al menos 3 caracteres',
    'name.max' => 'El nombre del Pokémon no debe tener más de 255 caracteres',

    'type_1.required' => 'El tipo de Pokémon es obligatorio',
    'type_1.enum_value' => 'El tipo de Pokémon debe ser '.implode(',', PokemonType::getValues()),

    'type_2.enum_value' => 'El tipo secundario de Pokémon debe ser '.implode(',', PokemonType::getValues()),

    'stat.required' => 'El :attribute del Pokémon es obligatorio.',
    'stat.integer' => 'El :attribute debe ser un número entero.',
    'stat.min' => 'El :attribute no debe ser menor a 0',
    'stat.max' => 'El :attribute no debe ser mayor a 0',

];
