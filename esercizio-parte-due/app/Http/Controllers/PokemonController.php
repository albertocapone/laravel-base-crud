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
}
