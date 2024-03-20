<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentoEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $etiquetas = Etiqueta::all();
        Documento::all()->each(function ($documento) use ($etiquetas) { 
            $documento->etiquetas()->attach(
                $etiquetas->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
