<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CodigoPostal extends Model
{
    protected $table = 'codigos_postales';
    
    protected $fillable = ['codigo', 'localidad', 'provincia_id'];

    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class);
    }

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }
}
