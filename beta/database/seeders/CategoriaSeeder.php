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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categorias')->truncate(); //for cleaning earlier data to avoid duplicate entries

        $categorias = [
            ['nombre' => 'INFRAESTRUCTURA'],
            ['nombre' => 'CIRCULACIÓN'],
            ['nombre' => 'OFICINAS'],
            ['nombre' => 'ESTACIONES'],
            ['nombre' => 'COMERCIAL'],
            ['nombre' => 'INTERVENCIÓN'],
            ['nombre' => 'CONDUCCIÓN'],
            ['nombre' => 'TALLERES'],
            ['nombre' => 'JURIDICA'],
            ['nombre' => 'BIBLIOTECA'],
            ['nombre' => 'DOC.GENERAL'],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria['nombre'],
                'slug' => \Illuminate\Support\Str::slug($categoria['nombre']),
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
