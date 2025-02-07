<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descargas', 'user_id', 'numero', 'empresa_id', 'categoria_id', 'fecha', 'titulo', 'descripcion', 'pdf', 'imagen', 'vigente'  
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

    public function scopeporEmpresaCategoria(Builder $query,$empresa,$categoria): void
    {
        $query->WhereHas('empresa', 
                    function($query)  use($empresa)
                        {$query->where('nombre','=',$empresa);
                            })
                ->withWhereHas('categoria', 
                    function($query) use($categoria)
                        {$query->where('nombre','=',$categoria);
        });
    }
    public function scopeporEmpresaEtiqueta(Builder $query,$empresa,$etiqueta): void
    {
        $query->whereHas('empresa', 
                    function($query)  use($empresa)
                        {$query->where('nombre','=',$empresa);
                            })
                ->withWhereHas('etiquetas', 
                    function($query) use($etiqueta)
                        {$query->where('nombre','=',$etiqueta);
        });
    }
    public function scopeporCategoriaEtiqueta(Builder $query,$categoria,$etiqueta): void
    {
        $query->whereHas('categoria', 
                    function($query)  use($categoria)
                        {$query->where('nombre','=',$categoria);
                            })
                ->withWhereHas('etiquetas', 
                    function($query) use($etiqueta)
                        {$query->where('nombre','=',$etiqueta);
        });
    }
}


