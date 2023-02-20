<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OriginalPokemonFactory extends Factory
{
    protected $model = Pokemon::class;

    public function definition()
    {
        $number = $this->faker->numberBetween(1, 151);

        for ($i = 1; $i <= 151; $i++) {
        }

        return $this->getPokemonName($number);
    }

    private function getPokemonName($number): ?array
    {
        return match ($number) {
            '1' => [
                'number' => '1', 'name' => 'Bulbasaur', 'type_1' => 'Grass', 'type_2' => 'Poison', 'total' => '318',
                'hp' => '45', 'attack' => '49', 'defense' => '49', 'spAttack' => '65', 'spDefense' => '65',
                'speed' => '45',
            ],
            '2' => [
                'number' => '2', 'name' => 'Ivysaur', 'type_1' => 'Grass', 'type_2' => 'Poison', 'total' => '405',
                'hp' => '60', 'attack' => '62', 'defense' => '63', 'spAttack' => '80', 'spDefense' => '80',
                'speed' => '60',
            ],
            '3' => [
                'number' => '3', 'name' => 'Venusaur', 'type_1' => 'Grass', 'type_2' => 'Poison', 'total' => '525',
                'hp' => '80', 'attack' => '82', 'defense' => '83', 'spAttack' => '100', 'spDefense' => '100',
                'speed' => '80',
            ],
            '3Mega' => [
                'number' => '3', 'name' => 'VenusaurMega Venusaur', 'type_1' => 'Grass', 'type_2' => 'Poison',
                'total' => '625', 'hp' => '80', 'attack' => '100', 'defense' => '123', 'spAttack' => '122',
                'spDefense' => '120', 'speed' => '80',
            ],
            '4' => [
                'number' => '4', 'name' => 'Charmander', 'type_1' => 'Fire', 'type_2' => '', 'total' => '309',
                'hp' => '39', 'attack' => '52', 'defense' => '43', 'spAttack' => '60', 'spDefense' => '50',
                'speed' => '65',
            ],
            '5' => [
                'number' => '5', 'name' => 'Charmeleon', 'type_1' => 'Fire', 'type_2' => '', 'total' => '405',
                'hp' => '58', 'attack' => '64', 'defense' => '58', 'spAttack' => '80', 'spDefense' => '65',
                'speed' => '80',
            ],
            '6' => [
                'number' => '6', 'name' => 'Charizard', 'type_1' => 'Fire', 'type_2' => 'Flying', 'total' => '534',
                'hp' => '78', 'attack' => '84', 'defense' => '78', 'spAttack' => '109', 'spDefense' => '85',
                'speed' => '100',
            ],
            '6MegaX' => [
                'number' => '6', 'name' => 'CharizardMega Charizard X', 'type_1' => 'Fire', 'type_2' => 'Dragon',
                'total' => '634', 'hp' => '78', 'attack' => '130', 'defense' => '111', 'spAttack' => '130',
                'spDefense' => '85', 'speed' => '100',
            ],
            '6MegaY' => [
                'number' => '6', 'name' => 'CharizardMega Charizard Y', 'type_1' => 'Fire', 'type_2' => 'Flying',
                'total' => '634', 'hp' => '78', 'attack' => '104', 'defense' => '78', 'spAttack' => '159',
                'spDefense' => '115', 'speed' => '100',
            ],
            '7' => [
                'number' => '7', 'name' => 'Squirtle', 'type_1' => 'Water', 'type_2' => '', 'total' => '314',
                'hp' => '44', 'attack' => '48', 'defense' => '65', 'spAttack' => '50', 'spDefense' => '64',
                'speed' => '43',
            ],
            '8' => [
                'number' => '8', 'name' => 'Wartortle', 'type_1' => 'Water', 'type_2' => '', 'total' => '405',
                'hp' => '59', 'attack' => '63', 'defense' => '80', 'spAttack' => '65', 'spDefense' => '80',
                'speed' => '58',
            ],
            '9' => [
                'number' => '9', 'name' => 'Blastoise', 'type_1' => 'Water', 'type_2' => '', 'total' => '530',
                'hp' => '79', 'attack' => '83', 'defense' => '100', 'spAttack' => '85', 'spDefense' => '105',
                'speed' => '78',
            ],
            '9Mega' => [
                'number' => '9', 'name' => 'BlastoiseMega Blastoise', 'type_1' => 'Water', 'type_2' => '',
                'total' => '630', 'hp' => '79', 'attack' => '103', 'defense' => '120', 'spAttack' => '135',
                'spDefense' => '115', 'speed' => '78',
            ],
            '10' => [
                'number' => '10', 'name' => 'Caterpie', 'type_1' => 'Bug', 'type_2' => '', 'total' => '195',
                'hp' => '45', 'attack' => '30', 'defense' => '35', 'spAttack' => '20', 'spDefense' => '20',
                'speed' => '45',
            ],
            '11' => [
                'number' => '11', 'name' => 'Metapod', 'type_1' => 'Bug', 'type_2' => '', 'total' => '205',
                'hp' => '50', 'attack' => '20', 'defense' => '55', 'spAttack' => '25', 'spDefense' => '25',
                'speed' => '30',
            ],
            '12' => [
                'number' => '12', 'name' => 'Butterfree', 'type_1' => 'Bug', 'type_2' => 'Flying', 'total' => '395',
                'hp' => '60', 'attack' => '45', 'defense' => '50', 'spAttack' => '90', 'spDefense' => '80',
                'speed' => '70',
            ],
            '13' => [
                'number' => '13', 'name' => 'Weedle', 'type_1' => 'Bug', 'type_2' => 'Poison', 'total' => '195',
                'hp' => '40', 'attack' => '35', 'defense' => '30', 'spAttack' => '20', 'spDefense' => '20',
                'speed' => '50',
            ],
            '14' => [
                'number' => '14', 'name' => 'Kakuna', 'type_1' => 'Bug', 'type_2' => 'Poison', 'total' => '205',
                'hp' => '45', 'attack' => '25', 'defense' => '50', 'spAttack' => '25', 'spDefense' => '25',
                'speed' => '35',
            ],
            '15' => [
                'number' => '15', 'name' => 'Beedrill', 'type_1' => 'Bug', 'type_2' => 'Poison', 'total' => '395',
                'hp' => '65', 'attack' => '90', 'defense' => '40', 'spAttack' => '45', 'spDefense' => '80',
                'speed' => '75',
            ],
            '15Mega' => [
                'number' => '15', 'name' => 'BeedrillMega Beedrill', 'type_1' => 'Bug', 'type_2' => 'Poison',
                'total' => '495', 'hp' => '65', 'attack' => '150', 'defense' => '40', 'spAttack' => '15',
                'spDefense' => '80', 'speed' => '145',
            ],
            '16' => [
                'number' => '16', 'name' => 'Pidgey', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '251',
                'hp' => '40', 'attack' => '45', 'defense' => '40', 'spAttack' => '35', 'spDefense' => '35',
                'speed' => '56',
            ],
            '17' => [
                'number' => '17', 'name' => 'Pidgeotto', 'type_1' => 'Normal', 'type_2' => 'Flying',
                'total' => '349', 'hp' => '63', 'attack' => '60', 'defense' => '55', 'spAttack' => '50',
                'spDefense' => '50', 'speed' => '71',
            ],
            '18' => [
                'number' => '18', 'name' => 'Pidgeot', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '479',
                'hp' => '83', 'attack' => '80', 'defense' => '75', 'spAttack' => '70', 'spDefense' => '70',
                'speed' => '101',
            ],
            '18Mega' => [
                'number' => '18', 'name' => 'PidgeotMega Pidgeot', 'type_1' => 'Normal', 'type_2' => 'Flying',
                'total' => '579', 'hp' => '83', 'attack' => '80', 'defense' => '80', 'spAttack' => '135',
                'spDefense' => '80', 'speed' => '121',
            ],
            '19' => [
                'number' => '19', 'name' => 'Rattata', 'type_1' => 'Normal', 'type_2' => '', 'total' => '253',
                'hp' => '30', 'attack' => '56', 'defense' => '35', 'spAttack' => '25', 'spDefense' => '35',
                'speed' => '72',
            ],
            '20' => [
                'number' => '20', 'name' => 'Raticate', 'type_1' => 'Normal', 'type_2' => '', 'total' => '413',
                'hp' => '55', 'attack' => '81', 'defense' => '60', 'spAttack' => '50', 'spDefense' => '70',
                'speed' => '97',
            ],
            '21' => [
                'number' => '21', 'name' => 'Spearow', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '262',
                'hp' => '40', 'attack' => '60', 'defense' => '30', 'spAttack' => '31', 'spDefense' => '31',
                'speed' => '70',
            ],
            '22' => [
                'number' => '22', 'name' => 'Fearow', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '442',
                'hp' => '65', 'attack' => '90', 'defense' => '65', 'spAttack' => '61', 'spDefense' => '61',
                'speed' => '100',
            ],
            '23' => [
                'number' => '23', 'name' => 'Ekans', 'type_1' => 'Poison', 'type_2' => '', 'total' => '288',
                'hp' => '35', 'attack' => '60', 'defense' => '44', 'spAttack' => '40', 'spDefense' => '54',
                'speed' => '55',
            ],
            '24' => [
                'number' => '24', 'name' => 'Arbok', 'type_1' => 'Poison', 'type_2' => '', 'total' => '438',
                'hp' => '60', 'attack' => '85', 'defense' => '69', 'spAttack' => '65', 'spDefense' => '79',
                'speed' => '80',
            ],
            '25' => [
                'number' => '25', 'name' => 'Pikachu', 'type_1' => 'Electric', 'type_2' => '', 'total' => '320',
                'hp' => '35', 'attack' => '55', 'defense' => '40', 'spAttack' => '50', 'spDefense' => '50',
                'speed' => '90',
            ],
            '26' => [
                'number' => '26', 'name' => 'Raichu', 'type_1' => 'Electric', 'type_2' => '', 'total' => '485',
                'hp' => '60', 'attack' => '90', 'defense' => '55', 'spAttack' => '90', 'spDefense' => '80',
                'speed' => '110',
            ],
            '27' => [
                'number' => '27', 'name' => 'Sandshrew', 'type_1' => 'Ground', 'type_2' => '', 'total' => '300',
                'hp' => '50', 'attack' => '75', 'defense' => '85', 'spAttack' => '20', 'spDefense' => '30',
                'speed' => '40',
            ],
            '28' => [
                'number' => '28', 'name' => 'Sandslash', 'type_1' => 'Ground', 'type_2' => '', 'total' => '450',
                'hp' => '75', 'attack' => '100', 'defense' => '110', 'spAttack' => '45', 'spDefense' => '55',
                'speed' => '65',
            ],
            '29' => [
                'number' => '29', 'name' => 'Nidoran♀', 'type_1' => 'Poison', 'type_2' => '', 'total' => '275',
                'hp' => '55', 'attack' => '47', 'defense' => '52', 'spAttack' => '40', 'spDefense' => '40',
                'speed' => '41',
            ],
            '30' => [
                'number' => '30', 'name' => 'Nidorina', 'type_1' => 'Poison', 'type_2' => '', 'total' => '365',
                'hp' => '70', 'attack' => '62', 'defense' => '67', 'spAttack' => '55', 'spDefense' => '55',
                'speed' => '56',
            ],
            '31' => [
                'number' => '31', 'name' => 'Nidoqueen', 'type_1' => 'Poison', 'type_2' => 'Ground',
                'total' => '505', 'hp' => '90', 'attack' => '92', 'defense' => '87', 'spAttack' => '75',
                'spDefense' => '85', 'speed' => '76',
            ],
            '32' => [
                'number' => '32', 'name' => 'Nidoran♂', 'type_1' => 'Poison', 'type_2' => '', 'total' => '273',
                'hp' => '46', 'attack' => '57', 'defense' => '40', 'spAttack' => '40', 'spDefense' => '40',
                'speed' => '50',
            ],
            '33' => [
                'number' => '33', 'name' => 'Nidorino', 'type_1' => 'Poison', 'type_2' => '', 'total' => '365',
                'hp' => '61', 'attack' => '72', 'defense' => '57', 'spAttack' => '55', 'spDefense' => '55',
                'speed' => '65',
            ],
            '34' => [
                'number' => '34', 'name' => 'Nidoking', 'type_1' => 'Poison', 'type_2' => 'Ground',
                'total' => '505', 'hp' => '81', 'attack' => '102', 'defense' => '77', 'spAttack' => '85',
                'spDefense' => '75', 'speed' => '85',
            ],
            '35' => [
                'number' => '35', 'name' => 'Clefairy', 'type_1' => 'Fairy', 'type_2' => '', 'total' => '323',
                'hp' => '70', 'attack' => '45', 'defense' => '48', 'spAttack' => '60', 'spDefense' => '65',
                'speed' => '35',
            ],
            '36' => [
                'number' => '36', 'name' => 'Clefable', 'type_1' => 'Fairy', 'type_2' => '', 'total' => '483',
                'hp' => '95', 'attack' => '70', 'defense' => '73', 'spAttack' => '95', 'spDefense' => '90',
                'speed' => '60',
            ],
            '37' => [
                'number' => '37', 'name' => 'Vulpix', 'type_1' => 'Fire', 'type_2' => '', 'total' => '299',
                'hp' => '38', 'attack' => '41', 'defense' => '40', 'spAttack' => '50', 'spDefense' => '65',
                'speed' => '65',
            ],
            '38' => [
                'number' => '38', 'name' => 'Ninetales', 'type_1' => 'Fire', 'type_2' => '', 'total' => '505',
                'hp' => '73', 'attack' => '76', 'defense' => '75', 'spAttack' => '81', 'spDefense' => '100',
                'speed' => '100',
            ],
            '39' => [
                'number' => '39', 'name' => 'Jigglypuff', 'type_1' => 'Normal', 'type_2' => 'Fairy',
                'total' => '270', 'hp' => '115', 'attack' => '45', 'defense' => '20', 'spAttack' => '45',
                'spDefense' => '25', 'speed' => '20',
            ],
            '40' => [
                'number' => '40', 'name' => 'Wigglytuff', 'type_1' => 'Normal', 'type_2' => 'Fairy',
                'total' => '435', 'hp' => '140', 'attack' => '70', 'defense' => '45', 'spAttack' => '85',
                'spDefense' => '50', 'speed' => '45',
            ],
            '41' => [
                'number' => '41', 'name' => 'Zubat', 'type_1' => 'Poison', 'type_2' => 'Flying', 'total' => '245',
                'hp' => '40', 'attack' => '45', 'defense' => '35', 'spAttack' => '30', 'spDefense' => '40',
                'speed' => '55',
            ],
            '42' => [
                'number' => '42', 'name' => 'Golbat', 'type_1' => 'Poison', 'type_2' => 'Flying', 'total' => '455',
                'hp' => '75', 'attack' => '80', 'defense' => '70', 'spAttack' => '65', 'spDefense' => '75',
                'speed' => '90',
            ],
            '43' => [
                'number' => '43', 'name' => 'Oddish', 'type_1' => 'Grass', 'type_2' => 'Poison', 'total' => '320',
                'hp' => '45', 'attack' => '50', 'defense' => '55', 'spAttack' => '75', 'spDefense' => '65',
                'speed' => '30',
            ],
            '44' => [
                'number' => '44', 'name' => 'Gloom', 'type_1' => 'Grass', 'type_2' => 'Poison', 'total' => '395',
                'hp' => '60', 'attack' => '65', 'defense' => '70', 'spAttack' => '85', 'spDefense' => '75',
                'speed' => '40',
            ],
            '45' => [
                'number' => '45', 'name' => 'Vileplume', 'type_1' => 'Grass', 'type_2' => 'Poison',
                'total' => '490', 'hp' => '75', 'attack' => '80', 'defense' => '85', 'spAttack' => '110',
                'spDefense' => '90', 'speed' => '50',
            ],
            '46' => [
                'number' => '46', 'name' => 'Paras', 'type_1' => 'Bug', 'type_2' => 'Grass', 'total' => '285',
                'hp' => '35', 'attack' => '70', 'defense' => '55', 'spAttack' => '45', 'spDefense' => '55',
                'speed' => '25',
            ],
            '47' => [
                'number' => '47', 'name' => 'Parasect', 'type_1' => 'Bug', 'type_2' => 'Grass', 'total' => '405',
                'hp' => '60', 'attack' => '95', 'defense' => '80', 'spAttack' => '60', 'spDefense' => '80',
                'speed' => '30',
            ],
            '48' => [
                'number' => '48', 'name' => 'Venonat', 'type_1' => 'Bug', 'type_2' => 'Poison', 'total' => '305',
                'hp' => '60', 'attack' => '55', 'defense' => '50', 'spAttack' => '40', 'spDefense' => '55',
                'speed' => '45',
            ],
            '49' => [
                'number' => '49', 'name' => 'Venomoth', 'type_1' => 'Bug', 'type_2' => 'Poison', 'total' => '450',
                'hp' => '70', 'attack' => '65', 'defense' => '60', 'spAttack' => '90', 'spDefense' => '75',
                'speed' => '90',
            ],
            '50' => [
                'number' => '50', 'name' => 'Diglett', 'type_1' => 'Ground', 'type_2' => '', 'total' => '265',
                'hp' => '10', 'attack' => '55', 'defense' => '25', 'spAttack' => '35', 'spDefense' => '45',
                'speed' => '95',
            ],
            '51' => [
                'number' => '51', 'name' => 'Dugtrio', 'type_1' => 'Ground', 'type_2' => '', 'total' => '405',
                'hp' => '35', 'attack' => '80', 'defense' => '50', 'spAttack' => '50', 'spDefense' => '70',
                'speed' => '120',
            ],
            '52' => [
                'number' => '52', 'name' => 'Meowth', 'type_1' => 'Normal', 'type_2' => '', 'total' => '290',
                'hp' => '40', 'attack' => '45', 'defense' => '35', 'spAttack' => '40', 'spDefense' => '40',
                'speed' => '90',
            ],
            '53' => [
                'number' => '53', 'name' => 'Persian', 'type_1' => 'Normal', 'type_2' => '', 'total' => '440',
                'hp' => '65', 'attack' => '70', 'defense' => '60', 'spAttack' => '65', 'spDefense' => '65',
                'speed' => '115',
            ],
            '54' => [
                'number' => '54', 'name' => 'Psyduck', 'type_1' => 'Water', 'type_2' => '', 'total' => '320',
                'hp' => '50', 'attack' => '52', 'defense' => '48', 'spAttack' => '65', 'spDefense' => '50',
                'speed' => '55',
            ],
            '55' => [
                'number' => '55', 'name' => 'Golduck', 'type_1' => 'Water', 'type_2' => '', 'total' => '500',
                'hp' => '80', 'attack' => '82', 'defense' => '78', 'spAttack' => '95', 'spDefense' => '80',
                'speed' => '85',
            ],
            '56' => [
                'number' => '56', 'name' => 'Mankey', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '305',
                'hp' => '40', 'attack' => '80', 'defense' => '35', 'spAttack' => '35', 'spDefense' => '45',
                'speed' => '70',
            ],
            '57' => [
                'number' => '57', 'name' => 'Primeape', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '455',
                'hp' => '65', 'attack' => '105', 'defense' => '60', 'spAttack' => '60', 'spDefense' => '70',
                'speed' => '95',
            ],
            '58' => [
                'number' => '58', 'name' => 'Growlithe', 'type_1' => 'Fire', 'type_2' => '', 'total' => '350',
                'hp' => '55', 'attack' => '70', 'defense' => '45', 'spAttack' => '70', 'spDefense' => '50',
                'speed' => '60',
            ],
            '59' => [
                'number' => '59', 'name' => 'Arcanine', 'type_1' => 'Fire', 'type_2' => '', 'total' => '555',
                'hp' => '90', 'attack' => '110', 'defense' => '80', 'spAttack' => '100', 'spDefense' => '80',
                'speed' => '95',
            ],
            '60' => [
                'number' => '60', 'name' => 'Poliwag', 'type_1' => 'Water', 'type_2' => '', 'total' => '300',
                'hp' => '40', 'attack' => '50', 'defense' => '40', 'spAttack' => '40', 'spDefense' => '40',
                'speed' => '90',
            ],
            '61' => [
                'number' => '61', 'name' => 'Poliwhirl', 'type_1' => 'Water', 'type_2' => '', 'total' => '385',
                'hp' => '65', 'attack' => '65', 'defense' => '65', 'spAttack' => '50', 'spDefense' => '50',
                'speed' => '90',
            ],
            '62' => [
                'number' => '62', 'name' => 'Poliwrath', 'type_1' => 'Water', 'type_2' => 'Fighting',
                'total' => '510', 'hp' => '90', 'attack' => '95', 'defense' => '95', 'spAttack' => '70',
                'spDefense' => '90', 'speed' => '70',
            ],
            '63' => [
                'number' => '63', 'name' => 'Abra', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '310',
                'hp' => '25', 'attack' => '20', 'defense' => '15', 'spAttack' => '105', 'spDefense' => '55',
                'speed' => '90',
            ],
            '64' => [
                'number' => '64', 'name' => 'Kadabra', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '400',
                'hp' => '40', 'attack' => '35', 'defense' => '30', 'spAttack' => '120', 'spDefense' => '70',
                'speed' => '105',
            ],
            '65' => [
                'number' => '65', 'name' => 'Alakazam', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '500',
                'hp' => '55', 'attack' => '50', 'defense' => '45', 'spAttack' => '135', 'spDefense' => '95',
                'speed' => '120',
            ],
            '65Mega' => [
                'number' => '65', 'name' => 'AlakazamMega Alakazam', 'type_1' => 'Psychic', 'type_2' => '',
                'total' => '590', 'hp' => '55', 'attack' => '50', 'defense' => '65', 'spAttack' => '175',
                'spDefense' => '95', 'speed' => '150',
            ],
            '66' => [
                'number' => '66', 'name' => 'Machop', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '305',
                'hp' => '70', 'attack' => '80', 'defense' => '50', 'spAttack' => '35', 'spDefense' => '35',
                'speed' => '35',
            ],
            '67' => [
                'number' => '67', 'name' => 'Machoke', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '405',
                'hp' => '80', 'attack' => '100', 'defense' => '70', 'spAttack' => '50', 'spDefense' => '60',
                'speed' => '45',
            ],
            '68' => [
                'number' => '68', 'name' => 'Machamp', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '505',
                'hp' => '90', 'attack' => '130', 'defense' => '80', 'spAttack' => '65', 'spDefense' => '85',
                'speed' => '55',
            ],
            '69' => [
                'number' => '69', 'name' => 'Bellsprout', 'type_1' => 'Grass', 'type_2' => 'Poison',
                'total' => '300', 'hp' => '50', 'attack' => '75', 'defense' => '35', 'spAttack' => '70',
                'spDefense' => '30', 'speed' => '40',
            ],
            '70' => [
                'number' => '70', 'name' => 'Weepinbell', 'type_1' => 'Grass', 'type_2' => 'Poison',
                'total' => '390', 'hp' => '65', 'attack' => '90', 'defense' => '50', 'spAttack' => '85',
                'spDefense' => '45', 'speed' => '55',
            ],
            '71' => [
                'number' => '71', 'name' => 'Victreebel', 'type_1' => 'Grass', 'type_2' => 'Poison',
                'total' => '490', 'hp' => '80', 'attack' => '105', 'defense' => '65', 'spAttack' => '100',
                'spDefense' => '70', 'speed' => '70',
            ],
            '72' => [
                'number' => '72', 'name' => 'Tentacool', 'type_1' => 'Water', 'type_2' => 'Poison',
                'total' => '335', 'hp' => '40', 'attack' => '40', 'defense' => '35', 'spAttack' => '50',
                'spDefense' => '100', 'speed' => '70',
            ],
            '73' => [
                'number' => '73', 'name' => 'Tentacruel', 'type_1' => 'Water', 'type_2' => 'Poison',
                'total' => '515', 'hp' => '80', 'attack' => '70', 'defense' => '65', 'spAttack' => '80',
                'spDefense' => '120', 'speed' => '100',
            ],
            '74' => [
                'number' => '74', 'name' => 'Geodude', 'type_1' => 'Rock', 'type_2' => 'Ground', 'total' => '300',
                'hp' => '40', 'attack' => '80', 'defense' => '100', 'spAttack' => '30', 'spDefense' => '30',
                'speed' => '20',
            ],
            '75' => [
                'number' => '75', 'name' => 'Graveler', 'type_1' => 'Rock', 'type_2' => 'Ground', 'total' => '390',
                'hp' => '55', 'attack' => '95', 'defense' => '115', 'spAttack' => '45', 'spDefense' => '45',
                'speed' => '35',
            ],
            '76' => [
                'number' => '76', 'name' => 'Golem', 'type_1' => 'Rock', 'type_2' => 'Ground', 'total' => '495',
                'hp' => '80', 'attack' => '120', 'defense' => '130', 'spAttack' => '55', 'spDefense' => '65',
                'speed' => '45',
            ],
            '77' => [
                'number' => '77', 'name' => 'Ponyta', 'type_1' => 'Fire', 'type_2' => '', 'total' => '410',
                'hp' => '50', 'attack' => '85', 'defense' => '55', 'spAttack' => '65', 'spDefense' => '65',
                'speed' => '90',
            ],
            '78' => [
                'number' => '78', 'name' => 'Rapidash', 'type_1' => 'Fire', 'type_2' => '', 'total' => '500',
                'hp' => '65', 'attack' => '100', 'defense' => '70', 'spAttack' => '80', 'spDefense' => '80',
                'speed' => '105',
            ],
            '79' => [
                'number' => '79', 'name' => 'Slowpoke', 'type_1' => 'Water', 'type_2' => 'Psychic',
                'total' => '315', 'hp' => '90', 'attack' => '65', 'defense' => '65', 'spAttack' => '40',
                'spDefense' => '40', 'speed' => '15',
            ],
            '80' => [
                'number' => '80', 'name' => 'Slowbro', 'type_1' => 'Water', 'type_2' => 'Psychic', 'total' => '490',
                'hp' => '95', 'attack' => '75', 'defense' => '110', 'spAttack' => '100', 'spDefense' => '80',
                'speed' => '30',
            ],
            '80Mega' => [
                'number' => '80', 'name' => 'SlowbroMega Slowbro', 'type_1' => 'Water', 'type_2' => 'Psychic',
                'total' => '590', 'hp' => '95', 'attack' => '75', 'defense' => '180', 'spAttack' => '130',
                'spDefense' => '80', 'speed' => '30',
            ],
            '81' => [
                'number' => '81', 'name' => 'Magnemite', 'type_1' => 'Electric', 'type_2' => 'Steel',
                'total' => '325', 'hp' => '25', 'attack' => '35', 'defense' => '70', 'spAttack' => '95',
                'spDefense' => '55', 'speed' => '45',
            ],
            '82' => [
                'number' => '82', 'name' => 'Magneton', 'type_1' => 'Electric', 'type_2' => 'Steel',
                'total' => '465', 'hp' => '50', 'attack' => '60', 'defense' => '95', 'spAttack' => '120',
                'spDefense' => '70', 'speed' => '70',
            ],
            '83' => [
                'number' => '83', 'name' => 'Farfetch\'d', 'type_1' => 'Normal', 'type_2' => 'Flying',
                'total' => '352', 'hp' => '52', 'attack' => '65', 'defense' => '55', 'spAttack' => '58',
                'spDefense' => '62', 'speed' => '60',
            ],
            '84' => [
                'number' => '84', 'name' => 'Doduo', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '310',
                'hp' => '35', 'attack' => '85', 'defense' => '45', 'spAttack' => '35', 'spDefense' => '35',
                'speed' => '75',
            ],
            '85' => [
                'number' => '85', 'name' => 'Dodrio', 'type_1' => 'Normal', 'type_2' => 'Flying', 'total' => '460',
                'hp' => '60', 'attack' => '110', 'defense' => '70', 'spAttack' => '60', 'spDefense' => '60',
                'speed' => '100',
            ],
            '86' => [
                'number' => '86', 'name' => 'Seel', 'type_1' => 'Water', 'type_2' => '', 'total' => '325',
                'hp' => '65', 'attack' => '45', 'defense' => '55', 'spAttack' => '45', 'spDefense' => '70',
                'speed' => '45',
            ],
            '87' => [
                'number' => '87', 'name' => 'Dewgong', 'type_1' => 'Water', 'type_2' => 'Ice', 'total' => '475',
                'hp' => '90', 'attack' => '70', 'defense' => '80', 'spAttack' => '70', 'spDefense' => '95',
                'speed' => '70',
            ],
            '88' => [
                'number' => '88', 'name' => 'Grimer', 'type_1' => 'Poison', 'type_2' => '', 'total' => '325',
                'hp' => '80', 'attack' => '80', 'defense' => '50', 'spAttack' => '40', 'spDefense' => '50',
                'speed' => '25',
            ],
            '89' => [
                'number' => '89', 'name' => 'Muk', 'type_1' => 'Poison', 'type_2' => '', 'total' => '500',
                'hp' => '105', 'attack' => '105', 'defense' => '75', 'spAttack' => '65', 'spDefense' => '100',
                'speed' => '50',
            ],
            '90' => [
                'number' => '90', 'name' => 'Shellder', 'type_1' => 'Water', 'type_2' => '', 'total' => '305',
                'hp' => '30', 'attack' => '65', 'defense' => '100', 'spAttack' => '45', 'spDefense' => '25',
                'speed' => '40',
            ],
            '91' => [
                'number' => '91', 'name' => 'Cloyster', 'type_1' => 'Water', 'type_2' => 'Ice', 'total' => '525',
                'hp' => '50', 'attack' => '95', 'defense' => '180', 'spAttack' => '85', 'spDefense' => '45',
                'speed' => '70',
            ],
            '92' => [
                'number' => '92', 'name' => 'Gastly', 'type_1' => 'Ghost', 'type_2' => 'Poison', 'total' => '310',
                'hp' => '30', 'attack' => '35', 'defense' => '30', 'spAttack' => '100', 'spDefense' => '35',
                'speed' => '80',
            ],
            '93' => [
                'number' => '93', 'name' => 'Haunter', 'type_1' => 'Ghost', 'type_2' => 'Poison', 'total' => '405',
                'hp' => '45', 'attack' => '50', 'defense' => '45', 'spAttack' => '115', 'spDefense' => '55',
                'speed' => '95',
            ],
            '94' => [
                'number' => '94', 'name' => 'Gengar', 'type_1' => 'Ghost', 'type_2' => 'Poison', 'total' => '500',
                'hp' => '60', 'attack' => '65', 'defense' => '60', 'spAttack' => '130', 'spDefense' => '75',
                'speed' => '110',
            ],
            '94Mega' => [
                'number' => '94', 'name' => 'GengarMega Gengar', 'type_1' => 'Ghost', 'type_2' => 'Poison',
                'total' => '600', 'hp' => '60', 'attack' => '65', 'defense' => '80', 'spAttack' => '170',
                'spDefense' => '95', 'speed' => '130',
            ],
            '95' => [
                'number' => '95', 'name' => 'Onix', 'type_1' => 'Rock', 'type_2' => 'Ground', 'total' => '385',
                'hp' => '35', 'attack' => '45', 'defense' => '160', 'spAttack' => '30', 'spDefense' => '45',
                'speed' => '70',
            ],
            '96' => [
                'number' => '96', 'name' => 'Drowzee', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '328',
                'hp' => '60', 'attack' => '48', 'defense' => '45', 'spAttack' => '43', 'spDefense' => '90',
                'speed' => '42',
            ],
            '97' => [
                'number' => '97', 'name' => 'Hypno', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '483',
                'hp' => '85', 'attack' => '73', 'defense' => '70', 'spAttack' => '73', 'spDefense' => '115',
                'speed' => '67',
            ],
            '98' => [
                'number' => '98', 'name' => 'Krabby', 'type_1' => 'Water', 'type_2' => '', 'total' => '325',
                'hp' => '30', 'attack' => '105', 'defense' => '90', 'spAttack' => '25', 'spDefense' => '25',
                'speed' => '50',
            ],
            '99' => [
                'number' => '99', 'name' => 'Kingler', 'type_1' => 'Water', 'type_2' => '', 'total' => '475',
                'hp' => '55', 'attack' => '130', 'defense' => '115', 'spAttack' => '50', 'spDefense' => '50',
                'speed' => '75',
            ],
            '100' => [
                'number' => '100', 'name' => 'Voltorb', 'type_1' => 'Electric', 'type_2' => '', 'total' => '330',
                'hp' => '40', 'attack' => '30', 'defense' => '50', 'spAttack' => '55', 'spDefense' => '55',
                'speed' => '100',
            ],
            '101' => [
                'number' => '101', 'name' => 'Electrode', 'type_1' => 'Electric', 'type_2' => '', 'total' => '480',
                'hp' => '60', 'attack' => '50', 'defense' => '70', 'spAttack' => '80', 'spDefense' => '80',
                'speed' => '140',
            ],
            '102' => [
                'number' => '102', 'name' => 'Exeggcute', 'type_1' => 'Grass', 'type_2' => 'Psychic',
                'total' => '325', 'hp' => '60', 'attack' => '40', 'defense' => '80', 'spAttack' => '60',
                'spDefense' => '45', 'speed' => '40',
            ],
            '103' => [
                'number' => '103', 'name' => 'Exeggutor', 'type_1' => 'Grass', 'type_2' => 'Psychic',
                'total' => '520', 'hp' => '95', 'attack' => '95', 'defense' => '85', 'spAttack' => '125',
                'spDefense' => '65', 'speed' => '55',
            ],
            '104' => [
                'number' => '104', 'name' => 'Cubone', 'type_1' => 'Ground', 'type_2' => '', 'total' => '320',
                'hp' => '50', 'attack' => '50', 'defense' => '95', 'spAttack' => '40', 'spDefense' => '50',
                'speed' => '35',
            ],
            '105' => [
                'number' => '105', 'name' => 'Marowak', 'type_1' => 'Ground', 'type_2' => '', 'total' => '425',
                'hp' => '60', 'attack' => '80', 'defense' => '110', 'spAttack' => '50', 'spDefense' => '80',
                'speed' => '45',
            ],
            '106' => [
                'number' => '106', 'name' => 'Hitmonlee', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '455',
                'hp' => '50', 'attack' => '120', 'defense' => '53', 'spAttack' => '35', 'spDefense' => '110',
                'speed' => '87',
            ],
            '107' => [
                'number' => '107', 'name' => 'Hitmonchan', 'type_1' => 'Fighting', 'type_2' => '', 'total' => '455',
                'hp' => '50', 'attack' => '105', 'defense' => '79', 'spAttack' => '35', 'spDefense' => '110',
                'speed' => '76',
            ],
            '108' => [
                'number' => '108', 'name' => 'Lickitung', 'type_1' => 'Normal', 'type_2' => '', 'total' => '385',
                'hp' => '90', 'attack' => '55', 'defense' => '75', 'spAttack' => '60', 'spDefense' => '75',
                'speed' => '30',
            ],
            '109' => [
                'number' => '109', 'name' => 'Koffing', 'type_1' => 'Poison', 'type_2' => '', 'total' => '340',
                'hp' => '40', 'attack' => '65', 'defense' => '95', 'spAttack' => '60', 'spDefense' => '45',
                'speed' => '35',
            ],
            '110' => [
                'number' => '110', 'name' => 'Weezing', 'type_1' => 'Poison', 'type_2' => '', 'total' => '490',
                'hp' => '65', 'attack' => '90', 'defense' => '120', 'spAttack' => '85', 'spDefense' => '70',
                'speed' => '60',
            ],
            '111' => [
                'number' => '111', 'name' => 'Rhyhorn', 'type_1' => 'Ground', 'type_2' => 'Rock', 'total' => '345',
                'hp' => '80', 'attack' => '85', 'defense' => '95', 'spAttack' => '30', 'spDefense' => '30',
                'speed' => '25',
            ],
            '112' => [
                'number' => '112', 'name' => 'Rhydon', 'type_1' => 'Ground', 'type_2' => 'Rock', 'total' => '485',
                'hp' => '105', 'attack' => '130', 'defense' => '120', 'spAttack' => '45', 'spDefense' => '45',
                'speed' => '40',
            ],
            '113' => [
                'number' => '113', 'name' => 'Chansey', 'type_1' => 'Normal', 'type_2' => '', 'total' => '450',
                'hp' => '250', 'attack' => '5', 'defense' => '5', 'spAttack' => '35', 'spDefense' => '105',
                'speed' => '50',
            ],
            '114' => [
                'number' => '114', 'name' => 'Tangela', 'type_1' => 'Grass', 'type_2' => '', 'total' => '435',
                'hp' => '65', 'attack' => '55', 'defense' => '115', 'spAttack' => '100', 'spDefense' => '40',
                'speed' => '60',
            ],
            '115' => [
                'number' => '115', 'name' => 'Kangaskhan', 'type_1' => 'Normal', 'type_2' => '', 'total' => '490',
                'hp' => '105', 'attack' => '95', 'defense' => '80', 'spAttack' => '40', 'spDefense' => '80',
                'speed' => '90',
            ],
            '115Mega' => [
                'number' => '115', 'name' => 'KangaskhanMega Kangaskhan', 'type_1' => 'Normal', 'type_2' => '',
                'total' => '590', 'hp' => '105', 'attack' => '125', 'defense' => '100', 'spAttack' => '60',
                'spDefense' => '100', 'speed' => '100',
            ],
            '116' => [
                'number' => '116', 'name' => 'Horsea', 'type_1' => 'Water', 'type_2' => '', 'total' => '295',
                'hp' => '30', 'attack' => '40', 'defense' => '70', 'spAttack' => '70', 'spDefense' => '25',
                'speed' => '60',
            ],
            '117' => [
                'number' => '117', 'name' => 'Seadra', 'type_1' => 'Water', 'type_2' => '', 'total' => '440',
                'hp' => '55', 'attack' => '65', 'defense' => '95', 'spAttack' => '95', 'spDefense' => '45',
                'speed' => '85',
            ],
            '118' => [
                'number' => '118', 'name' => 'Goldeen', 'type_1' => 'Water', 'type_2' => '', 'total' => '320',
                'hp' => '45', 'attack' => '67', 'defense' => '60', 'spAttack' => '35', 'spDefense' => '50',
                'speed' => '63',
            ],
            '119' => [
                'number' => '119', 'name' => 'Seaking', 'type_1' => 'Water', 'type_2' => '', 'total' => '450',
                'hp' => '80', 'attack' => '92', 'defense' => '65', 'spAttack' => '65', 'spDefense' => '80',
                'speed' => '68',
            ],
            '120' => [
                'number' => '120', 'name' => 'Staryu', 'type_1' => 'Water', 'type_2' => '', 'total' => '340',
                'hp' => '30', 'attack' => '45', 'defense' => '55', 'spAttack' => '70', 'spDefense' => '55',
                'speed' => '85',
            ],
            '121' => [
                'number' => '121', 'name' => 'Starmie', 'type_1' => 'Water', 'type_2' => 'Psychic',
                'total' => '520', 'hp' => '60', 'attack' => '75', 'defense' => '85', 'spAttack' => '100',
                'spDefense' => '85', 'speed' => '115',
            ],
            '122' => [
                'number' => '122', 'name' => 'Mr.Mime', 'type_1' => 'Psychic', 'type_2' => 'Fairy',
                'total' => '460', 'hp' => '40', 'attack' => '45', 'defense' => '65', 'spAttack' => '100',
                'spDefense' => '120', 'speed' => '90',
            ],
            '123' => [
                'number' => '123', 'name' => 'Scyther', 'type_1' => 'Bug', 'type_2' => 'Flying', 'total' => '500',
                'hp' => '70', 'attack' => '110', 'defense' => '80', 'spAttack' => '55', 'spDefense' => '80',
                'speed' => '105',
            ],
            '124' => [
                'number' => '124', 'name' => 'Jynx', 'type_1' => 'Ice', 'type_2' => 'Psychic', 'total' => '455',
                'hp' => '65', 'attack' => '50', 'defense' => '35', 'spAttack' => '115', 'spDefense' => '95',
                'speed' => '95',
            ],
            '125' => [
                'number' => '125', 'name' => 'Electabuzz', 'type_1' => 'Electric', 'type_2' => '', 'total' => '490',
                'hp' => '65', 'attack' => '83', 'defense' => '57', 'spAttack' => '95', 'spDefense' => '85',
                'speed' => '105',
            ],
            '126' => [
                'number' => '126', 'name' => 'Magmar', 'type_1' => 'Fire', 'type_2' => '', 'total' => '495',
                'hp' => '65', 'attack' => '95', 'defense' => '57', 'spAttack' => '100', 'spDefense' => '85',
                'speed' => '93',
            ],
            '127' => [
                'number' => '127', 'name' => 'Pinsir', 'type_1' => 'Bug', 'type_2' => '', 'total' => '500',
                'hp' => '65', 'attack' => '125', 'defense' => '100', 'spAttack' => '55', 'spDefense' => '70',
                'speed' => '85',
            ],
            '127Mega' => [
                'number' => '127', 'name' => 'PinsirMega Pinsir', 'type_1' => 'Bug', 'type_2' => 'Flying',
                'total' => '600', 'hp' => '65', 'attack' => '155', 'defense' => '120', 'spAttack' => '65',
                'spDefense' => '90', 'speed' => '105',
            ],
            '128' => [
                'number' => '128', 'name' => 'Tauros', 'type_1' => 'Normal', 'type_2' => '', 'total' => '490',
                'hp' => '75', 'attack' => '100', 'defense' => '95', 'spAttack' => '40', 'spDefense' => '70',
                'speed' => '110',
            ],
            '129' => [
                'number' => '129', 'name' => 'Magikarp', 'type_1' => 'Water', 'type_2' => '', 'total' => '200',
                'hp' => '20', 'attack' => '10', 'defense' => '55', 'spAttack' => '15', 'spDefense' => '20',
                'speed' => '80',
            ],
            '130' => [
                'number' => '130', 'name' => 'Gyarados', 'type_1' => 'Water', 'type_2' => 'Flying',
                'total' => '540', 'hp' => '95', 'attack' => '125', 'defense' => '79', 'spAttack' => '60',
                'spDefense' => '100', 'speed' => '81',
            ],
            '130Mega' => [
                'number' => '130', 'name' => 'GyaradosMega Gyarados', 'type_1' => 'Water', 'type_2' => 'Dark',
                'total' => '640', 'hp' => '95', 'attack' => '155', 'defense' => '109', 'spAttack' => '70',
                'spDefense' => '130', 'speed' => '81',
            ],
            '131' => [
                'number' => '131', 'name' => 'Lapras', 'type_1' => 'Water', 'type_2' => 'Ice', 'total' => '535',
                'hp' => '130', 'attack' => '85', 'defense' => '80', 'spAttack' => '85', 'spDefense' => '95',
                'speed' => '60',
            ],
            '132' => [
                'number' => '132', 'name' => 'Ditto', 'type_1' => 'Normal', 'type_2' => '', 'total' => '288',
                'hp' => '48', 'attack' => '48', 'defense' => '48', 'spAttack' => '48', 'spDefense' => '48',
                'speed' => '48',
            ],
            '133' => [
                'number' => '133', 'name' => 'Eevee', 'type_1' => 'Normal', 'type_2' => '', 'total' => '325',
                'hp' => '55', 'attack' => '55', 'defense' => '50', 'spAttack' => '45', 'spDefense' => '65',
                'speed' => '55',
            ],
            '134' => [
                'number' => '134', 'name' => 'Vaporeon', 'type_1' => 'Water', 'type_2' => '', 'total' => '525',
                'hp' => '130', 'attack' => '65', 'defense' => '60', 'spAttack' => '110', 'spDefense' => '95',
                'speed' => '65',
            ],
            '135' => [
                'number' => '135', 'name' => 'Jolteon', 'type_1' => 'Electric', 'type_2' => '', 'total' => '525',
                'hp' => '65', 'attack' => '65', 'defense' => '60', 'spAttack' => '110', 'spDefense' => '95',
                'speed' => '130',
            ],
            '136' => [
                'number' => '136', 'name' => 'Flareon', 'type_1' => 'Fire', 'type_2' => '', 'total' => '525',
                'hp' => '65', 'attack' => '130', 'defense' => '60', 'spAttack' => '95', 'spDefense' => '110',
                'speed' => '65',
            ],
            '137' => [
                'number' => '137', 'name' => 'Porygon', 'type_1' => 'Normal', 'type_2' => '', 'total' => '395',
                'hp' => '65', 'attack' => '60', 'defense' => '70', 'spAttack' => '85', 'spDefense' => '75',
                'speed' => '40',
            ],
            '138' => [
                'number' => '138', 'name' => 'Omanyte', 'type_1' => 'Rock', 'type_2' => 'Water', 'total' => '355',
                'hp' => '35', 'attack' => '40', 'defense' => '100', 'spAttack' => '90', 'spDefense' => '55',
                'speed' => '35',
            ],
            '139' => [
                'number' => '139', 'name' => 'Omastar', 'type_1' => 'Rock', 'type_2' => 'Water', 'total' => '495',
                'hp' => '70', 'attack' => '60', 'defense' => '125', 'spAttack' => '115', 'spDefense' => '70',
                'speed' => '55',
            ],
            '140' => [
                'number' => '140', 'name' => 'Kabuto', 'type_1' => 'Rock', 'type_2' => 'Water', 'total' => '355',
                'hp' => '30', 'attack' => '80', 'defense' => '90', 'spAttack' => '55', 'spDefense' => '45',
                'speed' => '55',
            ],
            '141' => [
                'number' => '141', 'name' => 'Kabutops', 'type_1' => 'Rock', 'type_2' => 'Water', 'total' => '495',
                'hp' => '60', 'attack' => '115', 'defense' => '105', 'spAttack' => '65', 'spDefense' => '70',
                'speed' => '80',
            ],
            '142' => [
                'number' => '142', 'name' => 'Aerodactyl', 'type_1' => 'Rock', 'type_2' => 'Flying',
                'total' => '515', 'hp' => '80', 'attack' => '105', 'defense' => '65', 'spAttack' => '60',
                'spDefense' => '75', 'speed' => '130',
            ],
            '142Mega' => [
                'number' => '142', 'name' => 'AerodactylMega Aerodactyl', 'type_1' => 'Rock', 'type_2' => 'Flying',
                'total' => '615', 'hp' => '80', 'attack' => '135', 'defense' => '85', 'spAttack' => '70',
                'spDefense' => '95', 'speed' => '150',
            ],
            '143' => [
                'number' => '143', 'name' => 'Snorlax', 'type_1' => 'Normal', 'type_2' => '', 'total' => '540',
                'hp' => '160', 'attack' => '110', 'defense' => '65', 'spAttack' => '65', 'spDefense' => '110',
                'speed' => '30',
            ],
            '144' => [
                'number' => '144', 'name' => 'Articuno', 'type_1' => 'Ice', 'type_2' => 'Flying', 'total' => '580',
                'hp' => '90', 'attack' => '85', 'defense' => '100', 'spAttack' => '95', 'spDefense' => '125',
                'speed' => '85',
            ],
            '145' => [
                'number' => '145', 'name' => 'Zapdos', 'type_1' => 'Electric', 'type_2' => 'Flying',
                'total' => '580', 'hp' => '90', 'attack' => '90', 'defense' => '85', 'spAttack' => '125',
                'spDefense' => '90', 'speed' => '100',
            ],
            '146' => [
                'number' => '146', 'name' => 'Moltres', 'type_1' => 'Fire', 'type_2' => 'Flying', 'total' => '580',
                'hp' => '90', 'attack' => '100', 'defense' => '90', 'spAttack' => '125', 'spDefense' => '85',
                'speed' => '90',
            ],
            '147' => [
                'number' => '147', 'name' => 'Dratini', 'type_1' => 'Dragon', 'type_2' => '', 'total' => '300',
                'hp' => '41', 'attack' => '64', 'defense' => '45', 'spAttack' => '50', 'spDefense' => '50',
                'speed' => '50',
            ],
            '148' => [
                'number' => '148', 'name' => 'Dragonair', 'type_1' => 'Dragon', 'type_2' => '', 'total' => '420',
                'hp' => '61', 'attack' => '84', 'defense' => '65', 'spAttack' => '70', 'spDefense' => '70',
                'speed' => '70',
            ],
            '149' => [
                'number' => '149', 'name' => 'Dragonite', 'type_1' => 'Dragon', 'type_2' => 'Flying',
                'total' => '600', 'hp' => '91', 'attack' => '134', 'defense' => '95', 'spAttack' => '100',
                'spDefense' => '100', 'speed' => '80',
            ],
            '150' => [
                'number' => '150', 'name' => 'Mewtwo', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '680',
                'hp' => '106', 'attack' => '110', 'defense' => '90', 'spAttack' => '154', 'spDefense' => '90',
                'speed' => '130',
            ],
            '150MegaX' => [
                'number' => '150', 'name' => 'MewtwoMega Mewtwo X', 'type_1' => 'Psychic', 'type_2' => 'Fighting',
                'total' => '780', 'hp' => '106', 'attack' => '190', 'defense' => '100', 'spAttack' => '154',
                'spDefense' => '100', 'speed' => '130',
            ],
            '150MegaY' => [
                'number' => '150', 'name' => 'MewtwoMega Mewtwo Y', 'type_1' => 'Psychic', 'type_2' => '',
                'total' => '780', 'hp' => '106', 'attack' => '150', 'defense' => '70', 'spAttack' => '194',
                'spDefense' => '120', 'speed' => '140',
            ],
            '151' => [
                'number' => '151', 'name' => 'Mew', 'type_1' => 'Psychic', 'type_2' => '', 'total' => '600',
                'hp' => '100', 'attack' => '100', 'defense' => '100', 'spAttack' => '100', 'spDefense' => '100',
                'speed' => '100',
            ],
            default => null,
        };
    }
}
