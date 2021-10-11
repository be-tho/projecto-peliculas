<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTienenGeneros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_tienen_generos', function (Blueprint $table) {
            $table->foreignId('pelicula_id')->constrained('peliculas', 'pelicula_id');

            $table->unsignedSmallInteger('genero_id');

            $table->foreign('genero_id')->references('genero_id')->on('generos');
            $table->timestamps();

            $table->primary(['pelicula_id', 'genero_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas_tienen_generos');
    }
}
