<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sala')->insert([
            'nombre' => 'Sala 1',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '1',
            'horario' => '10:30',
        ]);

        DB::table('sala')->insert([
            'nombre' => 'Sala 2',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '1',
            'horario' => '12:30',
        ]);

        DB::table('sala')->insert([
            'nombre' => 'Sala 3',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '1',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 2*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 4',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '2',
            'horario' => '10:30',
        ]);

        DB::table('sala')->insert([
            'nombre' => 'Sala 5',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '2',
            'horario' => '12:30',
        ]);

        
        DB::table('sala')->insert([
            'nombre' => 'Sala 6',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '2',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 3*/
        
        DB::table('sala')->insert([
            'nombre' => 'Sala 7',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '3',
            'horario' => '10:30',
        ]);

        DB::table('sala')->insert([
            'nombre' => 'Sala 8',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '3',
            'horario' => '12:30',
        ]);

        DB::table('sala')->insert([
            'nombre' => 'Sala 9',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '3',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 4*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 10',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '4',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 11',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '4',
            'horario' => '12:30',
        ]);


        
        DB::table('sala')->insert([
            'nombre' => 'Sala 12',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '4',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 5*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 13',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '5',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 14',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '5',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 15',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '5',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 6*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 16',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '6',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 17',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '6',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 18',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '6',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 7*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 18',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '7',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 19',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '7',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 20',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '7',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 8*/
        
        DB::table('sala')->insert([
            'nombre' => 'Sala 21',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '8',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 22',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '8',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 23',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '8',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 9*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 24',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '9',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 25',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '9',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 26',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '9',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 10*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 27',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '10',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 28',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '10',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 29',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '10',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 11*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 30',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '11',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 31',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '11',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 32',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '11',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 12*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 33',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '12',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 34',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '12',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 35',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '12',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 13*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 36',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '13',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 37',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '13',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 38',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '13',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 14*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 39',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '14',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 40',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '14',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 41',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '14',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 15*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 42',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '15',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 43',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '15',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 44',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '15',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 16*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 45',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '16',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 46',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '16',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 47',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '16',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 17*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 48',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '17',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 49',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '17',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 50',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '17',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 18*/
        DB::table('sala')->insert([
            'nombre' => 'Sala 51',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '18',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 52',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '18',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 53',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '18',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 19*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 54',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '19',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 55',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '19',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 56',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '19',
            'horario' => '17:30',
        ]);
        /*SALAS PARA PELICULA CON ID 20*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 57',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '20',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 58',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '20',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 59',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '20',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 21*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 60',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '21',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 61',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '21',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 62',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '21',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 22*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 63',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '22',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 64',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '22',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 65',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '22',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 23*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 66',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '23',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 67',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '23',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 68',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '23',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 24*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 69',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '24',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 70',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '24',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 71',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '24',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 25*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 72',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '25',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 73',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '25',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 74',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '25',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 26*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 75',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '26',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 76',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '26',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 77',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '26',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 27*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 78',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '27',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 79',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '27',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 80',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '27',
            'horario' => '17:30',
        ]);

        /*SALAS PARA PELICULA CON ID 28*/

        DB::table('sala')->insert([
            'nombre' => 'Sala 81',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '28',
            'horario' => '10:30',
        ]);


        DB::table('sala')->insert([
            'nombre' => 'Sala 82',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '28',
            'horario' => '12:30',
        ]);

                
        DB::table('sala')->insert([
            'nombre' => 'Sala 83',
            'maximo_asientos' => 10,
            'maximo_filas' => 6,
            'precio' => '5.50',
            'movie_id' => '28',
            'horario' => '17:30',
        ]);
    
    }
}
