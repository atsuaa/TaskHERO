<?php

use Illuminate\Database\Seeder;
use App\Reason;

class ReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reason::class, 5)->create();
    }
}
