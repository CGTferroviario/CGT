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
            $table->id();
            $table->string('id_usuario');
            $table->string('matricula');
            $table->string('id_empresa');
            $table->string('cod_categoria');
            $table->string('cod_residencia');
            $table->timestamp('fecha_alta');
            $table->timestamp('fecha_baja');
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
