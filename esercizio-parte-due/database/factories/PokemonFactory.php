<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pokemon;
use Faker\Generator as Faker;

$factory->define(Pokemon::class, function (Faker $faker) {
    static $ndex = 1;
    return [
        'Name'=> $faker->lastName(),
        'Ndex'=> $ndex++,
        'Type'=> $faker->randomElement($array = array('Normal', 'Figth', 'Flying', 'Poison', 'Rock', 'Fire', 'Water', 'Grass')),
        'Ability'=> $faker->jobTitle()
    ];
});
