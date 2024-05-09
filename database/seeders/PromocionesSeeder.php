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
            'titulo' => 'Pase fiesta del cine ',
            'imagen' => 'centurion.jpg',
            'descripcion' => 'Obten esta promociones y consigue todas las entradas durante la semana por 3,50.',
            'Precio' => '14.99',
            'tipo' => 'eventos',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Cine Familiar',
            'imagen' => 'elpeleador.jpg',
            'descripcion' => 'Obten esta promocion y conseguiras grandes descuentos en comida para toda la familia.',
            'Precio' => '49.99',
            'tipo' => 'eventos',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'CineTemporalFans',
            'imagen' => 'cars.jpg',
            'descripcion' => 'Obten esta promocion y consigue cinco entradas de cine con precios bajos.',
            'Precio' => '24.99',
            'tipo' => 'eventos',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Cine gratis durante un mes',
            'imagen' => 'bichos.jpg',
            'descripcion' => 'Compra tu abono para el cine durante un mes, este incluye todas las películas que se emitiran durante el mes.',
            'Precio' => '70',
            'tipo' => 'mensual',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta regalo',
            'imagen' => 'dragon.jpg',
            'descripcion' => 'Compra esta tarjeta y consigue descuentos durante todo el mes',
            'Precio' => '30.99',
            'tipo' => 'mensual'
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta VIP cine',
            'imagen' => 'elvaquilla.jpg',
            'descripcion' => 'Consigue la tarjet VIP del cine para poder disfrutar durante un mes de dos películas gratis y dos menus a elegir.',
            'Precio' => '39.99',
            'tipo' => 'mensual',
        ]);

        DB::table('promociones')->insert([
            'titulo' => '2X1 en menus',
            'imagen' => '2x1.jpg',
            'descripcion' => 'Consigue un 2X1 en menus grandes durante todo el mes.',
            'Precio' => '14.99',
            'tipo' => 'mensual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Pase menus',
            'imagen' => 'PMenus.jpg',
            'descripcion' => 'Consigue un 2X1 en menus grandes durante todo el mes.',
            'Precio' => '14.99',
            'tipo' => 'anual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Pase Completo',
            'imagen' => 'Completo.jpg',
            'descripcion' => 'Consigue descuentos durante todo el año en entradas y menus.',
            'Precio' => '39.99',
            'tipo' => 'anual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Pase VIP anual',
            'imagen' => 'VIP.jpg',
            'descripcion' => 'Consigue dos entradas gratis cada semana durante todo el año.',
            'Precio' => '79.99',
            'tipo' => 'anual',
        ]);

        
        DB::table('promociones')->insert([
            'titulo' => 'Descuentos anuales',
            'imagen' => 'Batman.jpg',
            'descripcion' => 'Consigue descuentos durante todo el año',
            'Precio' => '59.99',
            'tipo' => 'anual',
        ]);
    }
}
