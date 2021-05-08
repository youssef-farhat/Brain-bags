<?php
<<<<<<< HEAD
=======

>>>>>>> f2b3ec73dd71f6433191b10190669f3c0e6f6aa1
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
<<<<<<< HEAD
        }
=======
    }
>>>>>>> f2b3ec73dd71f6433191b10190669f3c0e6f6aa1
}
