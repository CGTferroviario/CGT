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
            'name' => 'pablo',
            'email' => 'pablo@pablo.com',
            'role' => 'admin',
            'password' => Hash::make('pablocgt'),
        ]);
        DB::table('users')->insert([
            'name' => 'nacho',
            'email' => 'nacho@nacho.com',
            'role' => 'finanzas',
            'password' => Hash::make('nachocgt'),
        ]);
        DB::table('users')->insert([
            'name' => 'javi',
            'email' => 'javi@javi.com',
            'role' => 'editor',
            'password' => Hash::make('javicgt'),
        ]);
    }
}
