<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comida')->insert([
            'titulo' => 'Menu básico',
            'imagen' => 'SoloPalomitas.png',
            'descripcion' => 'contiene palomitas.',
            'Precio' => '4.99',
        ]);

        DB::table('comida')->insert([
            'titulo' => 'Menu simple',
            'imagen' => 'MenuSimple.png',
            'descripcion' => 'contiene palomitas y un refresco.',
            'Precio' => '9.99',
        ]);

        DB::table('comida')->insert([
            'titulo' => 'Menu grande',
            'imagen' => 'MenuGrande.png',
            'descripcion' => 'contiene dos boles palomitas y dos refrescos.',
            'Precio' => '14.99',
        ]);

        DB::table('comida')->insert([
            'titulo' => 'Menu simple',
            'imagen' => 'MenuSImplePatatas.png',
            'descripcion' => 'contiene un paquete de patatas y un refresco.',
            'Precio' => '4.99',
        ]);

        DB::table('comida')->insert([
            'titulo' => 'Menu nachos',
            'imagen' => 'Nachos.png',
            'descripcion' => 'contiene un bol de nachos con salsas y un refresco .',
            'Precio' => '9.99',
        ]);

        DB::table('comida')->insert([
            'titulo' => 'Menu grande',
            'imagen' => 'MenuGrandePatatas.png',
            'descripcion' => 'contiene dos paquetes de patatas y dos refresco.',
            'Precio' => '14.99',
        ]);
    }
}
