<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cadastro;
use Faker\Generator as Faker;

$factory->define(Cadastro::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'sobrenome' => $faker->name,
        'cpf' => $faker->numerify('###.###.###-##') ,
        'email' => $faker->unique()->safeEmail
    ];
});
