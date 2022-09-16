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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->timestamp('fecha_doc');
            $table->timestamp('fecha_subida');
            $table->int('id_empresa');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('descripcion');
            $table->string('adjunto1');
            $table->string('adjunto2');
            $table->string('adjunto3');
            $table->string('imagen');
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
        Schema::dropIfExists('documentos');
    }
};
