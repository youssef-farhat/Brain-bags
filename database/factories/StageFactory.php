<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Entreprise;
use App\Stage;
use Faker\Generator as Faker;

$factory->define(Stage::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
        'type' => $faker->randomElement($array = array ('initiatin', 'perfectionnement' ,'pfe')),
        'departement' => $faker->randomElement($array = array ('Informatique','Economie_gestion','Genie_proceder','mechanique','electrique')),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl,
        'localisation' => $faker->address,
        'payement' => $faker->word,
        'description' => $faker->sentence,
        'entreprise_id' => Entreprise::get('id')->random()
=======
        'type'=>$faker->randomElement(['initiation', 'perfectionnement' ,'pfe']),
        'departement'=>$faker->randomElement(['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']),
        'date'=>$faker->date,
        'image'=>$faker->word,
        'localisation'=>$faker->country,
        'payement'=>$faker->word,
        'description'=>$faker->text(200),
        'id_entreprise'=>Entreprise::get('id')->random()
>>>>>>> 3f632b0d7822e1c50873da04bc36b64d14c8fb22
    ];
});
