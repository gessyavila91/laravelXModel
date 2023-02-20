<?php

namespace App\Models;

use App\Enums\PokemonType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    // Especificar la tabla
    protected $table = 'pokemons';

    protected int $number;

    protected string $name;

    protected string $type_1;

    protected string $type_2;

    //pokemon stats as protected variables
    protected int $hp;

    protected int $attack;

    protected int $defense;

    protected int $spAttack;

    protected int $spDefense;

    protected int $speed;

    //methods
    public function totalStats(): int
    {
        return 0;
    }

    protected $casts = [
        'type' => PokemonType::class,
    ];
}
