<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        // $this->call(ComunicadosSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(CcaasSeeder::class);
        $comunicado = Comunicado::factory(25)->create([
            
        ]);
        // $this->call(MunicipiosSeeder::class);
        
    }
}
