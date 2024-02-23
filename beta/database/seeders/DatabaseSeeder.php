<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comunicado;
use App\Models\Documento;
use App\Models\Noticia;
use App\Models\Etiqueta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //disable foreign key check for this connection before running seeders
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RoleSeeder::class);
        $this->call(PermisoSeeder::class);
		$this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(EtiquetaSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(CcaaSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(SeccionSeeder::class);

        // $comunicado = Comunicado::factory(100)->create([
            
        // ]);

        // $noticia = Noticia::factory(100)->create([
            
        // ]);

        $documento = Documento::factory(1000)->create([
            
        ]);

        $this->call(DocumentoEtiquetaSeeder::class);
        $this->call(ComunicadoEtiquetaSeeder::class);
        $this->call(NoticiaEtiquetaSeeder::class);
        // $this->call(ComunicadoSeeder::class);
        // $this->call(NoticiaSeeder::class);

        
		// supposed to only apply to a single connection and reset it's self
		// but I like to explicitly undo what I've done for clarity
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
