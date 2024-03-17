<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Empresa::truncate();  //limpiamos la tabla para prevenir entradas duplicadas

        $csvFile = fopen(base_path("database/data/empresas.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                $Empresa = Empresa::create([
                    "id" => $data['0'],
                    "nombre" => $data['1'],
                    "slug" => substr(\Illuminate\Support\Str::slug($data['1']), 0, 30),
                    "descripcion" => $data['3'],
                    "logo" => $data['4'],
                    "vales" => $data['5'],
                    "comunicados" => $data['6'],
                    "activa" => $data['7'],
                    "created_at" => $data['8'],
                    "updated_at" => $data['9'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}