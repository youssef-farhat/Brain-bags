<?php

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
        // youssef
        // $this->call(EnseignantTableSeeder::class);
        // $this->call(SoutenanceTableSeeder::class);  
        $this->call(UsersTableSeeder::class);
        $this->call(AdministrateurTableSeeder::class);
         $this->call(EntrepriseTableSeeder::class);
         $this->call(StageTableSeeder::class);
<<<<<<< HEAD
         //$this->call(EtudiantTableSeeder::class);
         //$this->call(DemandeTableSeeder::class);
=======
         $this->call(EtudiantTableSeeder::class);
         $this->call(DemandeTableSeeder::class);
>>>>>>> 1298f03a74091ad8fd94e1f47230069552f049df


    }
}
