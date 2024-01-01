<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'email', 'email2', 'direccion', 'descripcion', 'telefono', 'responsable'
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function ccaa()
    {
        return $this->belongsTo(Ccaa::class);
    }
}
