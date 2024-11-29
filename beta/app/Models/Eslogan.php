<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eslogan extends Model
{
    use HasFactory;

    protected $fillable = ['frase', 'activo', 'fecha'];

    protected $casts = [
        'fecha' => 'date',
    ];
}
