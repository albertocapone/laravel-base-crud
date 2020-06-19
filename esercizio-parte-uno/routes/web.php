<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesManager@index');
Route::get('/showCagnolino/{id}', 'PagesManager@showCagnolino')->name('showCagnolino');
