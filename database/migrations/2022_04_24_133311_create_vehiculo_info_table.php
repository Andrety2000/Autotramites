<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_info', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('modelo');
            $table->string('año_vehiculo')->unique();
            $table->string('marca');
            $table->string('tipo_vehiculo');
            $table->string('cilindraje');
            $table->string('color');
            $table->string('combustible');
            $table->string('carroceria');
            $table->string('cupo');
            $table->string('precio_vehiculo');


            $table->string('estado')->default(0);
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
        Schema::dropIfExists('vehiculo_info');
    }
}
