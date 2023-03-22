<?php

namespace App\Models;

use App\Enums\PokemonType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    protected $ev = 252;

    protected $level = 100;

    protected $iv = 31;

    protected $nature = 1.1;

    //methods

    public function getTotalStatsAttribute(): int
    {
        return $this->hp + $this->attack + $this->defense + $this->spAttack + $this->spDefense + $this->speed;
    }

    public function getMaxStat($baseStat): int
    {
        return floor(
            floor((2 * $baseStat + $this->iv +
                    floor($this->ev / 4)
            ) * $this->level / 100) + 5
        ) * $this->nature;
    }

    public function getMaxHPStat($baseStat): int
    {
        return floor(0.01 * (2 * $baseStat + $this->iv + floor(0.25 * $this->ev)) * $this->level) + $this->level + 10;
    }

    protected $casts = [
        'type' => PokemonType::class,
    ];
}
