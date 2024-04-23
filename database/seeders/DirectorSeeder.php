<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('director')->insert([
            'nombre' => 'Martin',
            'apellido' => 'Scorese',
            'movie_id' => '1',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Ivan',
            'apellido' => 'Reitman',
            'movie_id' => '2',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Phillip',
            'apellido' => 'Noice',
            'movie_id' => '3',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Sylvester',
            'apellido' => 'Stallone',
            'movie_id' => '4',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Jose Anotnio',
            'apellido' => 'de la Loma',
            'movie_id' => '5',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Tim',
            'apellido' => 'Burton',
            'movie_id' => '6',
        ]);

        DB::table('director')->insert([
            'nombre' => 'Richard',
            'apellido' => 'Donner',
            'movie_id' => '7',
        ]);


        DB::table('director')->insert([
            'nombre' => 'Santiago',
            'apellido' => 'Segura',
            'movie_id' => '8',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Frank',
            'apellido' => 'Marshall',
            'movie_id' => '9',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Mateo',
            'apellido' => 'Gil',
            'movie_id' => '10',
         ]);

         DB::table('director')->insert([
            'nombre' => 'David ',
            'apellido' => 'Koepp',
            'movie_id' => '11',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Claude',
            'apellido' => 'Zidi',
            'movie_id' => '12',
         ]);

         DB::table('director')->insert([
            'nombre' => 'John',
            'apellido' => 'Lasseter',
            'movie_id' => '13',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Anthony',
            'apellido' => 'Minghella',
            'movie_id' => '14',
         ]);

         DB::table('director')->insert([
            'nombre' => 'John',
            'apellido' => 'Lasseter',
            'movie_id' => '15',
         ]);

         DB::table('director')->insert([
            'nombre' => 'James',
            'apellido' => 'Cameron',
            'movie_id' => '16',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Sam',
            'apellido' => 'Raimi',
            'movie_id' => '17',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Andrew',
            'apellido' => 'Stanson',
            'movie_id' => '18',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Danny',
            'apellido' => 'Boyle',
            'movie_id' => '19',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Peter',
            'apellido' => 'Lord',
            'movie_id' => '20',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Roland',
            'apellido' => 'Emmerich',
            'movie_id' => '21',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Dennis',
            'apellido' => 'Dugan',
            'movie_id' => '22',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Takashi',
            'apellido' => 'Miike',
            'movie_id' => '23',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Dean',
            'apellido' => 'Deblois',
            'movie_id' => '24',
         ]);

         DB::table('director')->insert([
            'nombre' => 'David',
            'apellido' => 'O. Russell',
            'movie_id' => '25',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Neil',
            'apellido' => 'Marshall',
            'movie_id' => '26',
         ]);

         DB::table('director')->insert([
            'nombre' => 'Andrew',
            'apellido' => 'Traucki',
            'movie_id' => '27',
         ]);

         DB::table('director')->insert([
            'nombre' => 'George',
            'apellido' => 'Tilman JR',
            'movie_id' => '28',
         ]);

    }
}
