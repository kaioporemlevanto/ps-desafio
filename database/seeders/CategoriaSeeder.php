<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::factory(['categoria' => 'Clássico'])->count(1)->create();
        Categoria::factory(['categoria' => 'Romance'])->count(1)->create();
        Categoria::factory(['categoria' => 'Terror'])->count(1)->create();
        Categoria::factory(['categoria' => 'Infantojuvenil'])->count(1)->create();
        Categoria::factory(['categoria' => 'Fantasia'])->count(1)->create();
        Categoria::factory(['categoria' => 'Virais do TikTok'])->count(1)->create();
    }
}
