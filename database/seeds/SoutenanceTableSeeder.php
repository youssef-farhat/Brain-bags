<?php

use App\Soutenance;
use Illuminate\Database\Seeder;

class SoutenanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Soutenance::class, 10)->create();
    }
}
