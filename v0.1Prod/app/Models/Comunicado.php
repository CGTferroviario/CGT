<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'numero', 'empresa_id', 'categoria_id', 'etiqueta_id', 'fecha', 'titulo', 'subtitulo', 'cuerpo', 'adjunto1', 'adjunto2', 'adjunto3', 'imagen', 'publicado',   
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function etiqueta()
    {
        return $this->belongsTo(Etiqueta::class, 'etiqueta_id');
    }
}
