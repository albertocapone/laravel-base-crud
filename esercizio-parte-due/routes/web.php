<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PokemonController@index')->name('pokedex');

Route::get('showPokemon/{id}', 'PokemonController@show')->name('showPokemon');
