<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Marca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->string('nombre')->primary();
            $table->timestamps();
        });
        \App\Marca::create([
            'nombre' => 'Mazda',
        ]);
        \App\Marca::create([
            'nombre' => 'Chevrolet',
        ]);
        \App\Marca::create([
            'nombre' => 'Toyota',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marca');
    }
}
