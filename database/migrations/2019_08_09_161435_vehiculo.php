<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->integer('dueno');
            $table->string('placa')->unique();
            $table->string('marca');
            $table->foreign('dueno')->references('cedula')->on('persona');
            $table->foreign('marca')->references('nombre')->on('marca');
            $table->timestamps();
        });
        \App\Vehiculos::create([
            'dueno' => 1020481847,
            'placa' => 'MOL657',
            'marca' => 'Toyota',
        ]);
        \App\Vehiculos::create([
            'dueno' => 1020481847,
            'placa' => 'MOL658',
            'marca' => 'Mazda',
        ]);
        \App\Vehiculos::create([
            'dueno' => 1020481847,
            'placa' => 'MOL659',
            'marca' => 'Mazda',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
