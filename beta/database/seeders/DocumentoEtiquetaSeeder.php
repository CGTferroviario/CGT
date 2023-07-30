<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetas = Etiqueta::all();
        Documento::all()->each(function ($documento) use ($etiquetas) { 
            $documento->etiqueta()->attach(
                $etiquetas->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
