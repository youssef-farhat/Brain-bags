<?php
use App\Enseignant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EnseignantTableSeeder::class);
         $this->call(EtudiantsTableSeeder::class);
         $this->call( ForumTableSeeder::class);

    }
}
