<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function index(){
        $pokedex = Pokemon::all();
        return view('index', compact('pokedex'));
    }

    public function show($id){
        $pokemon = Pokemon::findOrFail($id);
        return view('showPokemon', compact('pokemon'));
    }

    public function create(){
        return view('pokemonCreationForm');
    }

    public function destroy($id){
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect()->route('pokedex');
    }

    public function edit($id){
        $pokemon = Pokemon::findOrFail($id);
        return view('editPokemonForm', compact('pokemon'));
    }

    public function update(Request $request, $id){
        $updateData = $request->all();
        $pokemon = Pokemon::findOrFail($id);

        $pokemon['Name'] = $updateData['Name'];
        $pokemon['Ndex'] = $updateData['Ndex'];
        $pokemon['Type'] = $updateData['Type'];
        $pokemon['Ability'] = $updateData['Ability'];

        $pokemon->save();

        return redirect()->route('pokedex');
    }

    public function store(Request $request){
        $updateData = $request->all();
        $pokemon = new Pokemon;

        $pokemon['Name'] = $updateData['Name'];
        $pokemon['Ndex'] = $updateData['Ndex'];
        $pokemon['Type'] = $updateData['Type'];
        $pokemon['Ability'] = $updateData['Ability'];

        $pokemon->save();

        return redirect()->route('pokedex');
    }

}
