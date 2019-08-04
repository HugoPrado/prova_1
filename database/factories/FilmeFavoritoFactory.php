<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FilmeFavorito;
use Faker\Generator as Faker;

$factory->define(FilmeFavorito::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'ano_de_lancamento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'diretor' =>  $faker->name
    ];
});
