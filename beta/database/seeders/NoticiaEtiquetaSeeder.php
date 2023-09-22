<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetas = Etiqueta::all();
        Noticia::all()->each(function ($noticia) use ($etiquetas) { 
            $noticia->etiqueta()->attach(
                $etiquetas->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
