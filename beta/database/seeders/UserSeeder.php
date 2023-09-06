<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        User::firstOrcreate([
            'nombre' => 'pablo',
            'email' => 'pablo@pablo.com',
            'password' => Hash::make('pablocgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'nacho',
            'email' => 'nacho@nacho.com',
            'password' => Hash::make('nachocgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'olga',
            'email' => 'olga@olga.com',
            'password' => Hash::make('olgacgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'jesus',
            'email' => 'jesus@jesus.com',
            'password' => Hash::make('jesuscgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'elena',
            'email' => 'elena@elena.com',
            'password' => Hash::make('elenacgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'eva',
            'email' => 'eva@eva.com',
            'password' => Hash::make('evacgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'luzi',
            'email' => 'luzi@luzi.com',
            'password' => Hash::make('luzicgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'noelia',
            'email' => 'noelia@noelia.com',
            'password' => Hash::make('noeliacgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'dani',
            'email' => 'dani@dani.com',
            'password' => Hash::make('danicgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'josue',
            'email' => 'josue@josue.com',
            'password' => Hash::make('josuecgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'ruben',
            'email' => 'ruben@ruben.com',
            'password' => Hash::make('rubencgt'),
        ]);
        User::firstOrcreate([
            'nombre' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admincgt'), 
        ]);
        User::firstOrcreate([
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'password' => Hash::make('usuariocgt'), 
        ]);
        User::firstOrcreate([
            'nombre' => 'editor',
            'email' => 'editor@editor.com',
            'email_verified_at' => now(),
            'password' => Hash::make('editorcgt')
        ]);
    }
}
