<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Reclamo::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(2),
        'descripcion' => $faker->text($maxNbChars = 200),
        'direccion' => $faker->address,
        'foto' => 'img/logo.png',
        'coordenadas' => 'acanomas',
        'categoria_id' => 1,
        'estado_id' => 3,
        'user_id' => 1,
        'created_at' => now(),
        
    ];
});
