<?php

use App\Administrateur;
use Illuminate\Database\Seeder;

class AdministrateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Administrateur::class, 10)->create();
    }
}
