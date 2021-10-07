<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *Este método debe contener lo que  queremos que la migration realize
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id('pelicula_id');

            $table->string('titulo', 100);
            $table->unsignedInteger('precio');
            $table->date('fecha_estreno');
            $table->text('descripcion');
            $table->string('poster')->nullable();
            $table->string('poster_descripcion')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *Este método debe contener las acciones ocpuestas a up()
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
