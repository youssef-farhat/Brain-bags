<?php
use App\Forum;

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Forum::class,)->create();

    }
}
