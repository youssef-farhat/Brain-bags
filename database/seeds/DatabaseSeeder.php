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

>>>>>>> 3f632b0d7822e1c50873da04bc36b64d14c8fb22
    }
}
