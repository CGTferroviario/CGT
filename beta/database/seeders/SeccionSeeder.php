<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('seccions')->truncate(); //for cleaning earlier data to avoid duplicate entries
        Seccion::firstOrcreate([
            'nombre' => 'Madrid',
            'email' => 'madrid@madrid.com',
            'email2' => 'madrid2@madrid.com',
            'descripcion' => 'La sección de Madrid',
            'telefono' => '666666666',
            'password' => Hash::make('madridcgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Barcelona',
            'email' => 'barcelona@barcelona.com',
            'email2' => 'barcelona2@barcelona.com',
            'descripcion' => 'La sección de Barcelona',
            'telefono' => '666666667',
            'password' => Hash::make('barcelonacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Sevilla',
            'email' => 'sevilla@sevilla.com',
            'email2' => 'sevilla2@sevilla.com',
            'descripcion' => 'La sección de Sevilla',
            'telefono' => '666666668',
            'password' => Hash::make('sevillacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Valencia',
            'email' => 'valencia@valencia.com',
            'email2' => 'valencia2@valencia.com',
            'descripcion' => 'La sección de Valencia',
            'telefono' => '666666669',
            'password' => Hash::make('valenciacgt'),
        ]);
    }
}
