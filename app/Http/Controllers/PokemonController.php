<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();

        return view('pokemon', compact('pokemons'));
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return view('pokemon', compact('pokemon'));
    }

    public function create()
    {
        return view('create-pokemon');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:pokemons|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
        ]);

        $pokemon = new Pokemon;
        $pokemon->name = $validatedData['name'];
        $pokemon->type = $validatedData['type'];
        $pokemon->description = $validatedData['description'];
        $pokemon->save();

        return redirect('/pokedex')->with('success', 'Pokemon creado exitosamente!');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return view('edit-pokemon', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
        ]);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->name = $validatedData['name'];
        $pokemon->type = $validatedData['type'];
        $pokemon->description = $validatedData['description'];
        $pokemon->save();

        return redirect('/pokedex')->with('success', 'Pokemon actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return redirect('/pokedex')->with('success', 'Pokemon eliminado exitosamente!');
    }
}
