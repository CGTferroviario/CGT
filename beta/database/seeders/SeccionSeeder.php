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
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        Seccion::firstOrcreate([
            'nombre' => 'pablo',
            'email' => 'pablo@pablo.com',
            'email2' => 'pablo2@pablo.com',
            'descripcion' => 'pablo@pablo.com',
            'telefono' => 'pablo@pablo.com',
            'password' => Hash::make('pablocgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'nacho',
            'email' => 'nacho@nacho.com',
            'password' => Hash::make('nachocgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'olga',
            'email' => 'olga@olga.com',
            'password' => Hash::make('olgacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'elena',
            'email' => 'elena@elena.com',
            'password' => Hash::make('elenacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'eva',
            'email' => 'eva@eva.com',
            'password' => Hash::make('evacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'luzi',
            'email' => 'luzi@luzi.com',
            'password' => Hash::make('luzicgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'noelia',
            'email' => 'noelia@noelia.com',
            'password' => Hash::make('noeliacgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'dani',
            'email' => 'dani@dani.com',
            'password' => Hash::make('danicgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'josue',
            'email' => 'josue@josue.com',
            'password' => Hash::make('josuecgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'ruben',
            'email' => 'ruben@ruben.com',
            'password' => Hash::make('rubencgt'),
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admincgt'), 
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'password' => Hash::make('usuariocgt'), 
        ]);
        Seccion::firstOrcreate([
            'nombre' => 'editor',
            'email' => 'editor@editor.com',
            'email_verified_at' => now(),
            'password' => Hash::make('editorcgt')
        ]);
    }
}
