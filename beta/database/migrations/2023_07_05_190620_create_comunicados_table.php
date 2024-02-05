<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->unsignedMediumInteger('visualizaciones')->default(0);
            $table->unsignedMediumInteger('descargas')->default(0);
            $table->boolean('publicado');
            $table->unsignedBigInteger('user_id');
            $table->string('numero');
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->date('fecha');
            $table->string('titulo');
            $table->string('slug');
            $table->string('subtitulo');
            $table->text('cuerpo');
            $table->string('pdf')->nullable();
            $table->string('imagen')->nullable();
            $table->string('adjunto')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
