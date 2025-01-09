<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Afiliado extends Model
{
    protected $fillable = [
        'dni',
        'apellido1',
        'apellido2',
        'nombre',
        'codigo_banco',
        'fecha_devolucion',
        'numero',
        'devuelto_recibo',
        'email',
        'direccion',
        'codigo_postal_id',
        'observaciones',
        'recibe_rojonegro',
        'fecha_afiliacion',
        'telefono_fijo',
        'telefono_movil',
        'correo_postal1',
        'observaciones1',
        'recibe_rojonegro1',
        'fecha_afiliacion1',
        'iban',
        'tipo_pago',
        'fecha_baja',
        'status',
        'sector_id',
        'empresa_id',
        'tipo_cotizacion_id'
    ];

    protected $casts = [
        'devuelto_recibo' => 'boolean',
        'recibe_rojonegro' => 'boolean',
        'recibe_rojonegro1' => 'boolean',
        'fecha_devolucion' => 'date',
        'fecha_afiliacion' => 'date',
        'fecha_afiliacion1' => 'date',
        'fecha_baja' => 'date',
    ];

    public function codigoPostal(): BelongsTo
    {
        return $this->belongsTo(CodigoPostal::class);
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }

    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }

    public function tipoCotizacion(): BelongsTo
    {
        return $this->belongsTo(TipoCotizacion::class);
    }

public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class);
    }

    // Accessor para nombre completo
    public function getNombreCompletoAttribute(): string
    {
        return trim("{$this->apellido1} {$this->apellido2} {$this->nombre}");
    }

    // Scope para filtrar por estado
    public function scopeActivos($query)
    {
        return $query->where('status', 'alta');
    }

    public function scopeInactivos($query)
    {
        return $query->where('status', 'baja');
    }

    // Scope para búsqueda general
    public function scopeBuscar($query, $termino)
    {
        return $query->where(function($q) use ($termino) {
            $q->where('dni', 'like', "%{$termino}%")
              ->orWhere('nombre', 'like', "%{$termino}%")
              ->orWhere('apellido1', 'like', "%{$termino}%")
              ->orWhere('apellido2', 'like', "%{$termino}%")
              ->orWhere('email', 'like', "%{$termino}%");
        });
    }
}
