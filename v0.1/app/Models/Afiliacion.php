<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
    use HasFactory;
    public $fillable = ['empresa', 'nombre', 'domicilio', 'localidad', 'provincia', 'cp','dni', 'telefono', 'correo', 'lugar', 'fecha', 'firma', 'matricula', 'cargo', 'dependencia', 'residencia', 'fotocopia_dni', 'cabecera_nomina', 'asunto', 'mensaje'];
}
