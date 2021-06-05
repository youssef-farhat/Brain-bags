<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use App\User;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'email'=>User::all()->random()->email,
        'ville_E'=>$faker->city,
        'depe_E'=>$faker->randomElement(['informatique', 'Economie_gestion', 'Genie_proceder','mechanique','electrique']),
        'class_E'=>$faker->word,
        'description'=>$faker->sentence
    ];
});