<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $dates = ['fecha'];

    protected $fillable = [
        'visualizaciones', 'user_id', 'numero', 'empresa_id', 'categoria_id', 'fecha', 'titulo', 'subtitulo', 'cuerpo', 'pdf', 'imagen', 'adjunto', 'publicado',   
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
        return $this->belongsToMany(Etiqueta::class);
    }
}
