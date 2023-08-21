<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Documento extends Model
{
    use HasFactory;

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

    public function etiqueta()
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
                ->withWhereHas('etiqueta', 
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
                ->withWhereHas('etiqueta', 
                    function($query) use($etiqueta)
                        {$query->where('nombre','=',$etiqueta);
        });
    }
}


