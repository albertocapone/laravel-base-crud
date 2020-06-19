<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PokemonController@index')->name('pokedex');

Route::get('showPokemon/{id}', 'PokemonController@show')->name('showPokemon');

Route::get('createPokemon', 'PokemonController@create')->name('createPokemon');

Route::post('storePokemon', 'PokemonController@store')->name('storePokemon');

Route::post('destroyPokemon/{id}', 'PokemonController@destroy')->name('destroyPokemon');

Route::get('editPokemon/{id}', 'PokemonController@edit')->name('editPokemon');

Route::post('updatePokemon/{id}', 'PokemonController@update')->name('updatePokemon');