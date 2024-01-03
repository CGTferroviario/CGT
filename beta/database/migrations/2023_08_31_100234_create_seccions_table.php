<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('seccions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email2')->nullable();
            $table->string('direccion')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('responsable')->nullable();
            $table->unsignedBigInteger('ccaa_id')->nullable();
            $table->unsignedBigInteger('provincia_id')->nullable();
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('ccaa_id')->references('id')->on('ccaas')->onDelete('cascade');
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seccions');
    }
};
