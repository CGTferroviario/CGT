<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunicadoEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetas = Etiqueta::all();
        Comunicado::all()->each(function ($comunicado) use ($etiquetas) { 
            $comunicado->etiqueta()->attach(
                $etiquetas->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
