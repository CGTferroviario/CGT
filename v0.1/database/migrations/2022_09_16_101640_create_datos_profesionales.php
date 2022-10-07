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
        Schema::create('datos_profesionales', function (Blueprint $table) {
            $table->id('id_datos_profesionales');
            $table->unsignedSmallInteger('id_usuario');
            $table->string('matricula');
            $table->string('id_empresa');
            $table->unsignedTinyInteger('cod_categoria');
            $table->unsignedTinyInteger('cod_residencia');
            $table->date('fecha_alta');
            $table->date('fecha_baja');
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
        Schema::dropIfExists('datos_profesionales');
    }
};
