<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'mdp' => $faker->word,
        'nom_entreprise' => $faker->sentence,
        'categorie' =>$faker->randomElement(['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']),
        'ville' => $faker->city,
        'logo' => $faker->word,
        'description' => $faker->sentence
    ];
});
