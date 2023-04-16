<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'categorias_comunicado', 'fecha_com', 'fecha_subida', 'id_empresa', 'titulo', 'subtitulo', 'descripcion', 'adjunto1', 'adjunto2', 'adjunto3', 'imagen'
    ];

}
