<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'numero', 'empresa', 'etiqueta', 'categoria', 'fecha', 'titulo', 'subtitulo', 'cuerpo', 'adjunto1', 'adjunto2', 'adjunto3', 'imagen'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
