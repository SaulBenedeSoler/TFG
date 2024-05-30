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
            'descripcion' => 'Con este pase obtiene desccuento en todas las entradas que obtengas durante la semana que lo compres.',
            'Precio' => '19.99',
            'tipo' => 'eventos',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta regalo',
            'imagen' => 'regalo.png',
            'descripcion' => 'Compra esta tarjeta y consigue descuentos durante todo el mes',
            'Precio' => '30.99',
            'tipo' => 'mensual'
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Pase fiesta',
            'imagen' => 'fiestaCine.png',
            'descripcion' => 'Obten esta promociones y consigue todas las entradas durante la semana por 3,50.',
            'Precio' => '14.99',
            'tipo' => 'eventos',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Cine familiar',
            'imagen' => 'familia.png',
            'descripcion' => 'Obten esta promocion y conseguiras grandes descuentos en comida para toda la familia.',
            'Precio' => '49.99',
            'tipo' => 'eventos',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Pase Menus',
            'imagen' => 'Mmenus.png',
            'descripcion' => 'Compra esta promoción y consigue menus ilimitados durante el mes.',
            'Precio' => '14.99',
            'tipo' => 'mensual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Superpase Menus',
            'imagen' => 'PMenus.png',
            'descripcion' => 'Compra esta promoción y consigue menus ilimitados durante el año.',
            'Precio' => '14.99',
            'tipo' => 'anual',
        ]);

}
}