<?php

/* @var $factory Factory */

use App\Model;
use App\Models\Docente;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Docente::class, function (Faker $faker) {
    return [
        'nombre_completo' => $faker->name,
        'lugar_nac' => $faker->name,
        'fecha_nac' => $faker->name,//now(),
        'edad' => 31,
        'religion' => "Catolico",
        'titulo_prof' => $faker->name,
        'tipo_documento' => $faker->name,
        'genero' => "Masculino",
        'number_id' => 31,

    ];
});
