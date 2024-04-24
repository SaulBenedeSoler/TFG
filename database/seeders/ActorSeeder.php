<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor')->insert([
            'nombre' => 'Paul',
            'apellido' => 'NewMan',
            'movie_id' => '1',
         ]);
 
         DB::table('actor')->insert([
            'nombre' => 'Paul',
            'apellido' => 'NewMan',
            'movie_id' => '1',
         ]);
 
 
         DB::table('actor')->insert([
             'nombre' => 'Arnold',
             'apellido' => 'Schwarzenegger',
             'movie_id' => '2',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Nikole',
             'apellido' => 'Kidman',
             'movie_id' => '3',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'John',
             'apellido' => 'Travolta',
             'movie_id' => '4',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Raúl',
             'apellido' => 'Garcia Losada',
             'movie_id' => '5',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => 'Michael',
             'apellido' => 'Keaton',
             'movie_id' => '6',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Sean',
             'apellido' => 'Astin',
             'movie_id' => '7',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Santiago',
             'apellido' => 'Segura',
             'movie_id' => '8',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Ethan',
             'apellido' => 'Hawke',
             'movie_id' => '9',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => 'Eduardo',
             'apellido' => 'Noriega',
             'movie_id' => '10',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => 'Kyle ',
             'apellido' => 'MacLachlan',
             'movie_id' => '11',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => ' Christian ',
             'apellido' => 'Clavier',
             'movie_id' => '12',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => 'Kevin',
             'apellido' => 'Spacey',
             'movie_id' => '13',
          ]);
 

 
          DB::table('actor')->insert([
             'nombre' => 'Ralph',
             'apellido' => 'Fiennes',
             'movie_id' => '14',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Owen',
             'apellido' => 'Wilson',
             'movie_id' => '15',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Sam',
             'apellido' => 'Worthington',
             'movie_id' => '16',
          ]);

 
          DB::table('actor')->insert([
             'nombre' => 'Tobey',
             'apellido' => 'Maguire',
             'movie_id' => '17',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Albert',
             'apellido' => 'Brooks',
             'movie_id' => '18',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Leonardo',
             'apellido' => 'DiCaprio',
             'movie_id' => '19',
          ]);

          DB::table('actor')->insert([
             'nombre' => 'Mel',
             'apellido' => 'Gibson',
             'movie_id' => '20',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Mel',
             'apellido' => 'Gibson',
             'movie_id' => '21',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Adam',
             'apellido' => 'Sandler',
             'movie_id' => '22',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Koji',
             'apellido' => 'Yakusho',
             'movie_id' => '23',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Jay',
             'apellido' => 'Baruchel',
             'movie_id' => '24',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Mark',
             'apellido' => 'Wahlberg',
             'movie_id' => '25',
          ]);
 
          DB::table('actor')->insert([
             'nombre' => 'Michael',
             'apellido' => 'Fassbender',
             'movie_id' => '26',
          ]);
 
 
          DB::table('actor')->insert([
             'nombre' => 'Damian',
             'apellido' => 'Wlashe-Howling',
             'movie_id' => '27',
          ]);
 
    }
}
