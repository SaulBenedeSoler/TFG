<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('descripcion');
            $table->string('genero');
            $table->string('fecha_lanzamiento');
            $table->string('duracion');
            $table->string('imagen');
            $table->bigInteger('director_id');
            $table->bigInteger('actor_id');
            $table->bigInteger('semana_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
};
