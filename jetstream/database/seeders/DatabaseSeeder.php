<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([PermissionSeeder::class]);

        User::factory(['email' => 'informatica@cgtferroviario.es'])
            ->withPersonalTeam()
            ->hasAttached(Team::factory()->count(3))
            ->create();

    }
}