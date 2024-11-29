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
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('nombre');
            $table->string('codigo_banco')->nullable();
            $table->date('fecha_devolucion')->nullable();
            $table->string('numero')->nullable();
            $table->boolean('devuelto_recibo')->default(false);
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->foreignId('codigo_postal_id')->nullable()->constrained('codigos_postales');
            $table->text('observaciones')->nullable();
            $table->boolean('recibe_rojonegro')->default(false);
            $table->date('fecha_afiliacion')->nullable();
            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_movil')->nullable();
            $table->string('correo_postal1')->nullable();
            $table->text('observaciones1')->nullable();
            $table->boolean('recibe_rojonegro1')->default(false);
            $table->date('fecha_afiliacion1')->nullable();
            $table->string('iban')->nullable();
            $table->enum('tipo_pago', ['banco', 'nomina']);
            $table->date('fecha_baja')->nullable();
            $table->enum('status', ['alta', 'baja'])->default('alta');
            $table->foreignId('sector_id')->nullable()->constrained('sectores');
            $table->foreignId('empresa_id')->nullable()->constrained('empresas');
            $table->foreignId('tipo_cotizacion_id')->nullable()->constrained('tipos_cotizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('afiliados');
    }
};
