<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_categoria', 'id_empresa', 'cod_categoria', 'nombre_categoria', 'colegio_electoral', 'fecha_alta', 'fecha_baja'
    ];

    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }

}
