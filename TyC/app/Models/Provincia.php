<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    public function municipios(): HasMany
    {
        return $this->hasMany(Municipio::class);
    }

    public function ccaa(): BelongsTo
    {
        return $this->belongsTo(Ccaa::class);
    }

    public function codigosPostales(): HasMany
    {
        return $this->hasMany(CodigoPostal::class);
    }

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }
}
