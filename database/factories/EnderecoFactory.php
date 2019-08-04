<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        'CEP' => $faker->numerify('#####-###'),
        'rua' => $faker->name,
        'numero' => $faker->buildingNumber,
        'bairro' => $faker->stateAbbr,
        'rua' => $faker->streetName,
        'cidade' => $faker->city,
        'estado' => $faker->state
    ];
});
