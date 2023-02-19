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

    protected $number;

    protected $name;

    protected $type;

    //pokemon stats as protected variables
    protected $hp;

    protected $attack;

    protected $defense;

    protected $spAttack;

    protected $spDefense;

    protected $speed;

    //methods
    public function getTotalStats()
    {
        return $this->hp + $this->attack + $this->defense + $this->spAttack + $this->spDefense + $this->speed;
    }

    protected $casts = [
        'type' => PokemonType::class,
    ];
}
