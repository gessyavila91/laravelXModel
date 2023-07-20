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
            'number.required' => __('validation.number.required'),
            'name.required' => __('validation.name.required'),
            'name.min' => __('validation.name.min'),
            'name.max' => __('validation.name.max'),

            'type_1.required' => __('validation.type_1.required'),
            'type_1.enum_value' => __('validation.type_1.enum_value'),

            'type_2.enum_value' => __('validation.type_2.enum_value'),

            'hp.required' => __('validation.stat.required', ['attribute' => 'hp']),
            'hp.integer' => __('validation.stat.integer', ['attribute' => 'hp']),
            'hp.min' => __('validation.stat.min', ['attribute' => 'hp', 'min' => 0]),
            'hp.max' => __('validation.stat.max', ['attribute' => 'hp', 'max' => 255]),

            'attack.required' => __('validation.stat.required', ['attribute' => 'attack']),
            'attack.integer' => __('validation.stat.integer', ['attribute' => 'attack']),
            'attack.min' => __('validation.stat.min', ['attribute' => 'attack', 'min' => 0]),
            'attack.max' => __('validation.stat.max', ['attribute' => 'attack', 'max' => 255]),

            'defense.required' => __('validation.stat.required', ['attribute' => 'defense']),
            'defense.integer' => __('validation.stat.integer', ['attribute' => 'defense']),
            'defense.min' => __('validation.stat.min', ['attribute' => 'defense', 'min' => 0]),
            'defense.max' => __('validation.stat.max', ['attribute' => 'defense', 'max' => 255]),

            'spAttack.required' => __('validation.stat.required', ['attribute' => 'spAttack']),
            'spAttack.integer' => __('validation.stat.integer', ['attribute' => 'spAttack']),
            'spAttack.min' => __('validation.stat.min', ['attribute' => 'spAttack', 'min' => 0]),
            'spAttack.max' => __('validation.stat.max', ['attribute' => 'spAttack', 'max' => 255]),

            'spDefense.required' => __('validation.stat.required', ['attribute' => 'spDefense']),
            'spDefense.integer' => __('validation.stat.integer', ['attribute' => 'spDefense']),
            'spDefense.min' => __('validation.stat.min', ['attribute' => 'spDefense', 'min' => 0]),
            'spDefense.max' => __('validation.stat.max', ['attribute' => 'spDefense', 'max' => 255]),

            'speed.required' => __('validation.stat.required', ['attribute' => 'speed']),
            'speed.integer' => __('validation.stat.integer', ['attribute' => 'speed']),
            'speed.min' => __('validation.stat.min', ['attribute' => 'speed', 'min' => 0]),
            'speed.max' => __('validation.stat.max', ['attribute' => 'speed', 'max' => 255]),
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

    /**
     * @throws \JsonException
     */
    public function getPokemonByNumberFromJson($number, $option = []): array
    {
        $pokemon = null;
        $file = file_get_contents(resource_path('pokemonJson/pokemonGen01.json'));
        $pokemonJson = json_decode($file, true, 512, JSON_THROW_ON_ERROR);

        $pokemon = array_values((array) array_filter($pokemonJson, function ($pokemon) use ($number, $option) {
            if ($option == null) {
                $result = $pokemon['number'] == $number && ! array_key_exists('form', $pokemon);
            } elseif ($option == ['mega' => 'Y'] || $option == ['mega' => 'X']) {
                $result =
                    $pokemon['number'] == $number &&
                    array_key_exists('form', $pokemon) &&
                    $pokemon['form']['mega'] == $option['mega'];
            } else {
                $result = $pokemon['number'] == $number &&
                    array_key_exists('form', $pokemon) &&
                    $pokemon['form'] == 'mega';
            }

            return $result;
        }));

        return $pokemon != [] ? reset($pokemon) : [];
    }
}
