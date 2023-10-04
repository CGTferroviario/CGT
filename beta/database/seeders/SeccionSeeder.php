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
            'nombre' => 'A Coruña',
            'email' => 'acoruna@cgtferroviario.es',
            'email2' => 'renfecor@cgtgalicia.org',
            'descripcion' => 'La sección de A Coruña',
            'telefono' => '666666666',
            'password' => Hash::make('acoruñacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Álava',
            'email' => 'alava@cgtferroviario.es',
            'email2' => '',
            'descripcion' => 'La sección de Álava',
            'telefono' => '666666667',
            'password' => Hash::make('alavacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Albacete',
            'email' => 'albacete@cgtferroviario.es',
            'email2' => 'cgtenrique@gmail.com',
            'descripcion' => 'La sección de Albacete',
            'telefono' => '666666668',
            'password' => Hash::make('albacetecgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Alicante',
            'email' => 'alicante@cgtferroviario.es',
            'email2' => 'cgtferroviario@gmail.com',
            'descripcion' => 'La sección de Alicante',
            'telefono' => '666666669',
            'password' => Hash::make('alicantecgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'Almería',
            'email' => 'almeria@cgtferroviario.es',
            'email2' => 'sffcgtalmería@gmail.com',
            'descripcion' => 'La sección de Almería',
            'telefono' => '666666669',
            'password' => Hash::make('almeriacgt'),
        ]);
    }
}
