<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comunicados', function (Blueprint $table) {
            $table->id();
            $table->boolean('publicado');
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('numero');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedTinyInteger('etiqueta')->nullable();
            $table->unsignedTinyInteger('categoria');
            $table->date('fecha');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('cuerpo');
            $table->string('adjunto1');
            $table->string('adjunto2');
            $table->string('adjunto3');
            $table->string('imagen');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            // $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');
            // $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicados');
    }
};
