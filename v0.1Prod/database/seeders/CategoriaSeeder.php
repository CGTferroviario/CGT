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
        DB::table('categorias')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('categorias')->insert([
            'id_empresa' => 7,
            'cod_categoria' => '012',
            'nombre' => 'admin',
            'colegio_electoral' => 'A',
            'fecha_alta' => '2023-05-15',
            'fecha_baja' => '2023-05-16',
        ]);
    }
}
