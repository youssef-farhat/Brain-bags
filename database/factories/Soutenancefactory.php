<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enseignant;
use App\Etudiant;
use App\Soutenance;
use Faker\Generator as Faker;

$factory->define(Soutenance::class, function (Faker $faker) {
    return [
        //'etudiant_id'=>Etudiant::get('id')->random(),
        'enseignant_id'=>Enseignant::get('id')->random(),
        'type' => $faker->randomElement(['initiatin', 'perfectionnement' ,'pfe']),
        'date'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'salle' => $faker->randomElement(['ST1', 'ST2' ,'Amphi']),
        'image'=> $faker->imageUrl,
        'created_at'=> now()
    ];
});
