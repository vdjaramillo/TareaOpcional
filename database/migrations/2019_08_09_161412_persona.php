<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->string('nombre');
            $table->integer('cedula')->primary();
            $table->rememberToken();
            $table->timestamps();
        });
        \App\Persona::create([
            'nombre' => 'Sebastian Gomez',
            'cedula' => 102931,
        ]);
        \App\Persona::create([
            'nombre' => 'Rafael Rangel',
            'cedula' => 102932,
        ]);
        \App\Persona::create([
            'nombre' => 'Victor Jaramillo',
            'cedula' => 1020481847,
        ]);
        \App\Persona::create([
            'nombre' => 'Gloria Lucia Giraldo',
            'cedula' => 102933,
        ]);
    }
   
    /**
     * 
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
