<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $fillable = ['nombre', 'activa'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }
    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
}
