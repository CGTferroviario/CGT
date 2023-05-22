<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('categorias')->truncate(); //for cleaning earlier data to avoid duplicate entries
        // DB::table('categorias')->insert([
        //     'nombre' => 'INFRAESTRUCTURA', 'id_empresa' => 1 ,
        //     'nombre' => 'CIRCULACIÓN', 'id_empresa' => 1 ,
        //     'nombre' => 'OFICINAS', 'id_empresa' => 1 ,
        //     'nombre' => 'COMERCIAL', 'id_empresa' => 2 ,
        //     'nombre' => 'INTERVENCIÓN', 'id_empresa' => 2 ,
        //     'nombre' => 'CONDUCCIÓN', 'id_empresa' => 2 ,
        //     'nombre' => 'TALLERES', 'id_empresa' => 2 ,
        // ]);
    }
}
