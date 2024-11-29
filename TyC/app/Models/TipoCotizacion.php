<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoCotizacion extends Model
{
    protected $table = 'tipos_cotizacion';
    
    protected $fillable = ['nombre', 'descripcion', 'monto'];

    protected $casts = [
        'monto' => 'decimal:2',
    ];

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }
}
