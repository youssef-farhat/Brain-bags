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

>>>>>>> f2b3ec73dd71f6433191b10190669f3c0e6f6aa1
    }
}
