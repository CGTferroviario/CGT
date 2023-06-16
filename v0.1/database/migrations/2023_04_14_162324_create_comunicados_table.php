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
        Schema::create('comunicados', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedTinyInteger('numero');
            $table->string('empresa');
            $table->string('etiqueta');
            $table->string('categoria');
            $table->date('fecha');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('cuerpo');
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
        Schema::dropIfExists('comunicados');
    }
};
