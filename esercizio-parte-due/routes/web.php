<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PokemonController@index')->name('pokedex');
