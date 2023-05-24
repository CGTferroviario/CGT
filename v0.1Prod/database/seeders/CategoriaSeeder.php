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
            ['nombre' => 'INFRAESTRUCTURA', 'empresa_id' => 1 ],
            ['nombre' => 'CIRCULACIÓN', 'empresa_id' => 1 ],
            ['nombre' => 'OFICINAS', 'empresa_id' => 1 ],
            ['nombre' => 'COMERCIAL', 'empresa_id' => 2 ],
            ['nombre' => 'INTERVENCIÓN', 'empresa_id' => 2 ],
            ['nombre' => 'CONDUCCIÓN', 'empresa_id' => 2 ],
            ['nombre' => 'TALLERES', 'empresa_id' => 2 ],
        ]);
    }
}
