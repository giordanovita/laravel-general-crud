<?php

use Illuminate\Database\Seeder;
use App\Matche;

class MatcheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Matche::class, 30) -> create(); 
    }
}
