<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(MovieSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(SemanaSeeder::class);
        $this->call(ComidaSeeder::class);
        $this->call(PromocionesSeeder::class);
        $this->call(SalaSeeder::class);
    }
}
