<?php

use App\Etudiant;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Etudiant::class,10)->create();
    }
}
