<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        User::firstOrcreate([
            'user_id' => 1,
            'name' => "Pablo's Team",
            'personal_team' => 1,
        ]);
        User::firstOrcreate([
            'user_id' => 2,
            'name' => "Nacho's Team",
            'personal_team' => 1,
        ]);
    }
}
