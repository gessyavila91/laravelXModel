<?php

namespace App\Http\Controllers;

use App\Enums\PokemonType;
use App\Models\Pokemon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{
    // Views
    public function index()
    {
        return view('pokemon.pokemonIndex', ['pokemons' => Pokemon::all()]);
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return view('pokemon', compact('pokemon'));
    }

    public function create()
    {
        return view('pokemon.pokemonCreate');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return view('edit-pokemon', compact('pokemon'));
    }

    // Actions

    public function store(Request $request): JsonResponse
    {
        $response = null;
        $validator = $this->fnValidator($request);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $response = response()->json($errors, 400);
        } else {
            $pokemon = new Pokemon();
            $this->setPokemonValues($request, $pokemon);
            $pokemon->save();
            $response = response()->json($pokemon, 201);
        }

        return $response;
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $validator = $this->fnValidator($request);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $pokemon = Pokemon::findOrFail($id);
        $this->setPokemonValues($request, $pokemon);
        $pokemon->save();

        return redirect('/pokedex')->with('success', 'Pokemon actualizado exitosamente!');
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return redirect('/pokedex')->with('success', 'Pokemon eliminado exitosamente!');
    }

    // Logic functions

    private function fnValidator(Request $request): \Illuminate\Validation\Validator
    {
        $rules = [
            'number' => 'required|integer',
            'name' => 'required|string|min:3|max:255',
            'type_1' => ['required', 'string', 'enum_value:'.PokemonType::class],
            'type_2' => ['nullable', 'string', 'enum_value:'.PokemonType::class],
            //pokemon stats rules
            'hp' => 'required|integer|min:0|max:255',
            'attack' => 'required|integer|min:0|max:255',
            'defense' => 'required|integer|min:0|max:255',
            'spAttack' => 'required|integer|min:0|max:255',
            'spDefense' => 'required|integer|min:0|max:255',
            'speed' => 'required|integer|min:0|max:255',
        ];

        $messages = [
            'number.required' => 'El número del Pokémon es obligatorio',
            'name.required' => 'El nombre del Pokémon es obligatorio',
            'name.min' => 'El nombre del Pokémon debe tener al menos 3 caracteres',
            'name.max' => 'El nombre del Pokémon no debe tener más de 255 caracteres',

            'type_1.required' => 'El tipo de Pokémon es obligatorio',
            'type_1.enum_value' => 'El tipo de Pokémon debe ser '.implode(',', PokemonType::getValues()),

            'type_2.enum_value' => 'El tipo secundario de Pokémon debe ser '.implode(',', PokemonType::getValues()),

            'hp.required' => 'La vida del Pokémon es obligatoria',
            'hp.integer' => 'La vida del Pokémon debe ser un número entero',
            'hp.min' => 'La vida del Pokémon no debe ser menor a 0',
            'hp.max' => 'La vida del Pokémon no debe ser mayor a 255',

            'attack.required' => 'El ataque del Pokémon es obligatorio',
            'attack.integer' => 'El ataque del Pokémon debe ser un número entero',
            'attack.min' => 'El ataque del Pokémon no debe ser menor a 0',
            'attack.max' => 'El ataque del Pokémon no debe ser mayor a 255',

            'defense.required' => 'La defensa del Pokémon es obligatoria',
            'defense.integer' => 'La defensa del Pokémon debe ser un número entero',
            'defense.min' => 'La defensa del Pokémon no debe ser menor a 0',
            'defense.max' => 'La defensa del Pokémon no debe ser mayor a 255',

            'spAttack.required' => 'El ataque especial del Pokémon es obligatorio',
            'spAttack.integer' => 'El ataque especial del Pokémon debe ser un número entero',
            'spAttack.min' => 'El ataque especial del Pokémon no debe ser menor a 0',
            'spAttack.max' => 'El ataque especial del Pokémon no debe ser mayor a 255',

            'spDefense.required' => 'La defensa especial del Pokémon es obligatoria',
            'spDefense.integer' => 'La defensa especial del Pokémon debe ser un número entero',
            'spDefense.min' => 'La defensa especial del Pokémon no debe ser menor a 0',
            'spDefense.max' => 'La defensa especial del Pokémon no debe ser mayor a 255',

            'speed.required' => 'La velocidad del Pokémon es obligatoria',
            'speed.integer' => 'La velocidad del Pokémon debe ser un número entero',
            'speed.min' => 'La velocidad del Pokémon no debe ser menor a 0',
            'speed.max' => 'La velocidad del Pokémon no debe ser mayor a 255',
        ];

        return Validator::make($request->all(), $rules, $messages);
    }

    private function setPokemonValues(Request $request, Pokemon $pokemon): void
    {
        $pokemon->number = $request->input('number');
        $pokemon->name = $request->input('name');
        $pokemon->type_1 = $request->input('type_1');
        $pokemon->type_2 = $request->input('type_2');
        //pokemon stats
        $pokemon->hp = $request->input('hp');
        $pokemon->attack = $request->input('attack');
        $pokemon->defense = $request->input('defense');
        $pokemon->spAttack = $request->input('spAttack');
        $pokemon->spDefense = $request->input('spDefense');
        $pokemon->speed = $request->input('speed');
    }
}
