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
            'titulo' => 'Yo el vaquilla',
            'imagen' => 'elvaquilla.jpg',
            'descripcion' => 'Consigue ya tu entrada para la película "Yo el Vaquilla" y llevate una poster de esta y un menú básico gratis',
            'Precio' => '19.99',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Viven',
            'imagen' => 'centurion.jpg',
            'descripcion' => 'Consigue un poster exclusivo de Viven y un menu a elegir',
            'Precio' => '24.99',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Cars',
            'imagen' => 'elpeleador.jpg',
            'descripcion' => 'Consigue ya tu entrada para la película "Yo el Vaquilla" y llevate una poster de esta y un menú básico gratis',
            'Precio' => '19.99',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Faster',
            'imagen' => 'cars.jpg',
            'descripcion' => 'Consigue un poster exclusivo de Faster y un menu de nachos',
            'Precio' => '24.99',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Cine gratis durante un mes',
            'imagen' => 'bichos.jpg',
            'descripcion' => 'Compra tu abono para el cine durante un mes, este incluye todas las películas que se emitiran durante el mes.',
            'Precio' => '34.99',
        ]);

        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta regalo',
            'imagen' => 'dragon.jpg',
            'descripcion' => 'Compra ya tu tarjeta regalo para esa persona.',
            'Precio' => '30.99',
        ]);


        DB::table('promociones')->insert([
            'titulo' => 'Tarjeta VIP cine',
            'imagen' => 'elvaquilla.jpg',
            'descripcion' => 'Consigue la tarjet VIP del cine para poder disfrutar durante un mes de dos películas gratis y dos menus a elegir.',
            'Precio' => '24.99',
        ]);

        DB::table('promociones')->insert([
            'titulo' => '2X1 en menus',
            'imagen' => 'Batman.jpg',
            'descripcion' => 'Consigue un 2X1 en menus grandes.',
            'Precio' => '14.99',
        ]);
    }
}
