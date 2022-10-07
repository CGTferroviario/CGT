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
        Schema::create('residencias', function (Blueprint $table) {
            $table->id('id_residencia');
            $table->unsignedTinyInteger('id_empresa');
            $table->unsignedTinyInteger('cod_residencia');
            $table->string('nombre_residencia');
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
        Schema::dropIfExists('residencias');
    }
};
