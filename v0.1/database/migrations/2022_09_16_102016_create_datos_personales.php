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
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id();
            $table->string('id_usuario');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('dni');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('id_municipio');
            $table->string('id_provincia');
            $table->timestamp('fecha_nacimiento');
            $table->string('sexo');
            $table->string('telefono');
            $table->string('id_seccion_sindical');
            $table->string('iban');
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
        Schema::dropIfExists('datos_personales');
    }
};
