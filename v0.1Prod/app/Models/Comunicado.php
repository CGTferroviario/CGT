<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 'titulo', 'subtitulo', 'cuerpo'
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

// $table->boolean('publicado');
//             $table->unsignedBigInteger('user_id');
//             $table->unsignedTinyInteger('numero');
//             $table->string('empresa');
//             $table->string('etiqueta');
//             $table->string('categoria');
//             $table->date('fecha');
//             $table->string('titulo');
//             $table->string('subtitulo');
//             $table->text('cuerpo');
//             $table->string('adjunto1');
//             $table->string('adjunto2');
//             $table->string('adjunto3');
//             $table->string('imagen');
//             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//             $table->timestamps();
