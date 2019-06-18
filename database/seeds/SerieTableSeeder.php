<?php

use Illuminate\Database\Seeder;
use App\Serie;

class SerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Serie::class, 5)->create();
    }
}