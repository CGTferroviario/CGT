<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CcaaSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(SectoresTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
    }
}
