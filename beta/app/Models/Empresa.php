<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public $fillable = ['nombre', 'descripcion', 'logo', 'gestion_vales', 'comunicados', 'activa'];

    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }
    public function categorias()
    {
        return $this->hasMany(Categoria::class); 
    }
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
}
