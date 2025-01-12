<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Team;

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
        // User::firstOrcreate([
        //     'name' => 'pablo',
        //     'email' => 'pablo@pablo.com',
        //     'password' => Hash::make('pablocgt'),
        // ])->withPersonalTeam();
        // User::firstOrcreate([
        //     'name' => 'nacho',
        //     'email' => 'nacho@nacho.com',
        //     'password' => Hash::make('nachocgt'),
        // ])->withPersonalTeam();
        $team = Team::create([
            'user_id' => 1,
            'name' => 'Sección Madrid',
            'personal_team' => false,
        ]);
        $user = User::create([
            'name' => 'Pablo',
            'email' => 'pablo@pablo.com',
            'password' => Hash::make('pablocgt'),
            'current_team_id' => $team->id,
        ]);
        $team = Team::create([
            'user_id' => 2,
            'name' => 'Sección Valencia',
            'personal_team' => false,
        ]);
        $user = User::create([
            'name' => 'Nacho',
            'email' => 'nacho@nacho.com',
            'password' => Hash::make('nachocgt'),
            'current_team_id' => $team->id,
        ]);
    }
}
