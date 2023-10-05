<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\Etiqueta;
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
            $noticia->etiquetas()->attach(
                $etiquetas->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
