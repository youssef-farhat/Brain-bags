<?php

use App\Stage;
use Illuminate\Database\Seeder;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Stage::class,10)->create();

    }
}
