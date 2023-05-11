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
        // DB::table('comunicados')->truncate(); //for cleaning earlier data to avoid duplicate entries
        // DB::table('comunicados')->insert([
        //     'categorias_comunicado' => 'pablo',
        //     'fecha_com' => 'pablo@pablo.com',
        //     'fecha_subida' => 'admin',
        //     'titulo' => $this->faker->sentence(),
        //     'subtitulo' => 'pablocgt',
        //     'descripcion' => 'pablocgt',
        //     'adjunto1' => 'pablocgt',
        //     'adjunto2' => 'pablocgt',
        //     'adjunto3' => 'pablocgt',
        //     'imagen' => 'pablocgt',
        //     'created_at' => 'pablocgt',
        //     'updated_at' => 'pablocgt',
        // ]);
    }
}		