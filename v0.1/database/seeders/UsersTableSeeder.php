<?php

namespace Database\Seeders;

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
            'nombre' => 'javi',
            'email' => 'javi@javi.com',
            'tipo_perfil' => 'editor',
            'password' => Hash::make('javicgt'),
        ]);
        DB::table('users')->insert([
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'tipo_perfil' => 'usuario',
            'password' => Hash::make('usuariocgt'), 
        ]);
    }
}
