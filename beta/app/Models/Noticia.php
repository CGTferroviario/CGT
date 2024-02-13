<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'empresa_id', 'categoria_id', 'fecha', 'titulo', 'slug', 'subtitulo', 'cuerpo', 'adjunto', 'imagen',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class, 'noticia_etiqueta');
    }
}
