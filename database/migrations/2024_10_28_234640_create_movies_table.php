<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Autoincremental
            $table->string('title'); // String
            $table->string('year', 8); // String de longitud 8
            $table->string('director', 64); // String de longitud 64
            $table->string('poster'); // String
            $table->boolean('rented')->default(false); // Booleano con valor por defecto false
            $table->text('synopsis'); // Text
            $table->timestamps(); // Timestamps de Eloquent
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies'); // Eliminar tabla si existe
    }
}
