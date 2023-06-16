<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ComunicadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comunicados')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('comunicados')->insert([
            'numero' => '10',
            'empresa' => 'renfe',
            'etiqueta' => 'igualdad',
            'categoria' => 'infraestructura',
            'fecha' => '2023-05-15',
            'titulo' => 'pablocgt',
            'subtitulo' => 'pablocgt',
            'cuerpo' => 'pablocgt',
            'adjunto1' => 'pablocgt',
            'adjunto2' => 'pablocgt',
            'adjunto3' => 'pablocgt',
            'imagen' => 'pablocgt',
            'created_at' => '2023-05-15',
            'updated_at' => '2023-05-15',
        ]);
    }
}