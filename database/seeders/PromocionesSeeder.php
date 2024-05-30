<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promociones')->insert([
            'titulo' => 'Pase cumpleaños',
            'imagen' => 'Cumple.png',
            'descripcion' => 'Consigue este pase la semana de tu cumpleaños y obtendrás descuentos.',
            'Precio' => '19.99',
            'tipo' => 'eventos',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Pase fiesta',
            'imagen' => 'fiestaCine.png',
            'descripcion' => 'Obten esta promoción y consigue tu entrada por 3.50 durante la semana del cine.',
            'Precio' => '3.50',
            'tipo' => 'eventos',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta regalo',
            'imagen' => 'regalo.png',
            'descripcion' => 'Compra esta tarjeta con valor de 39.99 en bar y cine.',
            'Precio' => '30.99',
            'tipo' => 'mensual'
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Cine familiar',
            'imagen' => 'familia.png',
            'descripcion' => 'Obten entradas gratis para toda la familia durante dos semanas.',
            'Precio' => '49.99',
            'tipo' => 'eventos',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Pase Mensual',
            'imagen' => 'iLmes.png',
            'descripcion' => 'Compra esta promoción y consigue entradas ilimitadas durante un mes.',
            'Precio' => '59.99',
            'tipo' => 'anual',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Pase Ilimitado',
            'imagen' => 'iLan.png',
            'descripcion' => 'Compra esta promoción y consigue entradas ilimitadas durante el año.',
            'Precio' => '69.99',
            'tipo' => 'anual',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Pase Menus',
            'imagen' => 'Mmenus.png',
            'descripcion' => 'Compra esta promoción y consigue menus ilimitados durante el mes.',
            'Precio' => '59.99',
            'tipo' => 'mensual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Superpase Menus',
            'imagen' => 'PMenus.png',
            'descripcion' => 'Compra esta promoción y consigue menus ilimitados durante el año.',
            'Precio' => '69.99',
            'tipo' => 'anual',
        ]);



}
}