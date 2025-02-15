<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        User::firstOrcreate([
            'nombre' => 'pablo',
            'email' => 'pablo@pablo.com',
            'tipo_perfil' => 'admin',
            'password' => Hash::make('pablocgt'),
        ])->assignRole('admin');
        User::firstOrcreate([
            'nombre' => 'nacho',
            'email' => 'nacho@nacho.com',
            'tipo_perfil' => 'finanzas',
            'password' => Hash::make('nachocgt'),
        ])->assignRole('admin');
        User::firstOrcreate([
            'nombre' => 'olga',
            'email' => 'olga@olga.com',
            'tipo_perfil' => 'editor',
            'password' => Hash::make('olgacgt'),
        ])->assignRole('editor');
        User::firstOrcreate([
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'tipo_perfil' => 'usuario',
            'password' => Hash::make('usuariocgt'), 
        ])->assignRole('usuario');
        User::firstOrcreate([
            'nombre' => 'editor',
            'email' => 'editor@editor.com',
            'tipo_perfil' => 'editor',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('editor');
    }
}
