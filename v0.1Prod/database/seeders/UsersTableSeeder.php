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
        DB::table('users')->insert([
            'nombre' => 'pablo',
            'email' => 'pablo@pablo.com',
            'tipo_perfil' => 'admin',
            'password' => Hash::make('pablocgt'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'nacho',
            'email' => 'nacho@nacho.com',
            'tipo_perfil' => 'finanzas',
            'password' => Hash::make('nachocgt'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'olga',
            'email' => 'olga@olga.com',
            'tipo_perfil' => 'editor',
            'password' => Hash::make('olgacgt'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'tipo_perfil' => 'usuario',
            'password' => Hash::make('usuariocgt'), 
        ]);
        User::firstOrcreate([
            'nombre' => 'editor',
            'email' => 'editor@editor.com',
            'tipo_perfil' => 'editor',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('editor');
    }
}
