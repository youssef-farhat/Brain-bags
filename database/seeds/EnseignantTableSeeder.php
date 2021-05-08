<?php
use App\Enseignant;
use Illuminate\Database\Seeder;

class EnseignantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Enseignant::class, 10)->create();
        }
}
