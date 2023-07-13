<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    public function comunicados()
    {
        return $this->hasMany(Comunicado::class, 'etiqueta_id'); 
    }
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
}
