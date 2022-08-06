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
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('servicio');
            $table->string('descripcion');
            $table->string('fecha_inicial');
            $table->string('observaciones');
            $table->string('subir_pdf')->default('-');
            $table->string('estado')->default('Activo');
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
        Schema::dropIfExists('solicitud');
    }
};
