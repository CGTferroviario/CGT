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
            'nombre' => 'usuario',
            'email' => 'usuario@usuario.com',
            'password' => Hash::make('usuariocgt'), 
        ]);
        User::firstOrcreate([
            'nombre' => 'editor',
            'email' => 'editor@editor.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}
