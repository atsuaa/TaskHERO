<?php

use Illuminate\Database\Seeder;
use App\Goal;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Goal::class, 5)->create();
    }
}
