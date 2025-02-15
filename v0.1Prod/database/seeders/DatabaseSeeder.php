<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comunicado;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Eloquent::unguard();

		//disable foreign key check for this connection before running seeders
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		
        $this->call(RoleSeeder::class);
		$this->call(UsersTableSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(CategoriaSeeder::class);
        
        $this->call(AdminSeeder::class);
        $this->call(PermisoSeeder::class);

        $comunicado = Comunicado::factory(25)->create([
            
        ]);

		// supposed to only apply to a single connection and reset it's self
		// but I like to explicitly undo what I've done for clarity
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        
        
        
        

    }
}
