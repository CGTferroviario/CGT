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
            $table->string('email2');
            $table->string('direccion');
            $table->string('descripcion');
            $table->string('telefono');
            $table->string('password');
            $table->timestamp('ult_login')->nullable();
            $table->timestamp('ult_logout')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seccions');
    }
};
