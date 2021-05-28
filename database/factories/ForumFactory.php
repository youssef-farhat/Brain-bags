<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enseignant;
use App\Etudiant;
use App\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
    return [
        'id_etude'=>Etudiant::get('id')->random(),
        'id_profe'=>Enseignant::get('id')->random(),
        'description'=>$faker->sentence
    ];
});
