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
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('maximo_asientos')->default(5);
            $table->integer('maximo_filas')->default(4);
            $table->string('asientos')->nullable();
            $table->integer('movie_id');
            $table->boolean('estado_asiento')->default(true);
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
        Schema::dropIfExists('sala');
    }
};

