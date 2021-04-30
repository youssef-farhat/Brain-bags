<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Entreprise;
use App\Stage;
use Faker\Generator as Faker;

$factory->define(Stage::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('initiatin', 'perfectionnement' ,'pfe')),
        'departement' => $faker->randomElement($array = array ('Informatique','Economie_gestion','Genie_proceder','mechanique','electrique')),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl,
        'localisation' => $faker->address,
        'payement' => $faker->word,
        'description' => $faker->sentence,
        'entreprise_id' => Entreprise::get('id')->random()
    ];
});
