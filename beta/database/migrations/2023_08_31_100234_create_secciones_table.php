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
        Schema::create('secciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email2')->unique();
            $table->string('descripcion');
            $table->string('telefono');
            $table->string('password');
            $table->timestamp('ult_login')->nullable();
            $table->timestamp('ult_logout')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secciones');
    }
};
