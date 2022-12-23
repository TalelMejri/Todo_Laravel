<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Categorie::factory()->count(30)->create();
        \App\Models\Categorie::factory(10)->create();
        //factory(\App\Models\Category::class,10)->create();
    }
}
