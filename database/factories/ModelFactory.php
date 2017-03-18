<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Agenda;
use App\Models\Cliente;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});


$factory->define(Cliente::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'cpf' => rand(1, 10),
        'empresa' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->email,
        'responsavel' => $faker->name,
        'endereco' => $faker->address,
        'atribuido' => $faker->word,
    ];

});


$factory->define(Agenda::class, function (Faker\Generator $faker) {

    return [
        'proposta_id' => rand(1, 10),
        'budget_id' => rand(1, 10),
        'titulo' => $faker->word,
        'atividade' => $faker->word,
        'data' => $faker->date,
        'duracao' => $faker->word,
        'atribuido' => $faker->name,
        'vinculo_prop' => $faker->name,
    ];

});