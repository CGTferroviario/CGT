<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen', 'descripcion', 'fecha', 'enlace'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'fecha' => 'date',
    ];
}
