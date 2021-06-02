<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use App\User;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [

        'nom_entreprise' => $faker->sentence,
        'categorie' =>$faker->randomElement(['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']),
        'ville' => $faker->city,
        'logo' => $faker->word,
        'description' => $faker->sentence,
        'email'=>User::get('email')->random()

    ];
});
