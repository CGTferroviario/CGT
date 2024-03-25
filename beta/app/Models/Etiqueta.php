<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    public $fillable = ['nombre', 'activa', 'slug'];

    public function documentos()
    {
        return $this->belongsToMany(Documento::class, 'documento_etiqueta');
    }
    public function comunicados()
    {
        return $this->belongsToMany(Comunicado::class, 'comunicado_etiqueta');
    }
    public function noticias()
    {
        return $this->belongsToMany(Noticia::class, 'noticia_etiqueta');
    }
}
