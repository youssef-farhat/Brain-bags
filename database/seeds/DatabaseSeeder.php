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
<<<<<<< HEAD
         $this->call(EntreprisesTableSeeder::class);
         $this->call(DemandesTableSeeder::class);
         $this->call(DemandesTableSeeder::class);
         $this->call(StagesTableSeeder::class);
=======
        // youssef
        $this->call(EnseignantTableSeeder::class);
        $this->call(SoutenanceTableSeeder::class);  
        $this->call(AdministrateurTableSeeder::class);

        
        $this->call(EtudiantTableSeeder::class);
         $this->call(EntrepriseTableSeeder::class);
         $this->call(StageTableSeeder::class);
         $this->call(DemandeTableSeeder::class);

>>>>>>> 73e5a1d27822ce03b9d3d7f22991b9efdaf57e4d
    }
}
