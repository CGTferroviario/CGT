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
        Schema::create('comunicado_etiqueta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunicado_id');
            $table->foreign('comunicado_id')->references('id')->on('comunicados')->onDelete('cascade');
            $table->unsignedBigInteger('etiqueta_id');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->ondelete('cascade');  
            $table->timestamps();
            $table->unique(['comunicado_id', 'etiqueta_id']);

        });

    }

    public function down(): void
    {
        Schema::dropIfExists('comunicado_etiqueta');
    }
};
