<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    use HasFactory;

    protected $table = 'sectores';
    
    public function empresas(): HasMany
    {
        return $this->hasMany(Empresa::class);
    }

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }
}
