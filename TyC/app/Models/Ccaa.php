<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ccaa extends Model
{
    use HasFactory;

    public function provincias()
    {
        return $this->hasMany(Provincia::class);
    }
}
