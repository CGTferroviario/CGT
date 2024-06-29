<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(database_path('data/empresas.csv'), 'r');
        $headers = true;

        while (($row = fgetcsv($csvFile, 10000, ";"))!== false) {
            if (!$headers) {
                $id = $row[0]?? '';
                $nombre = $row[1]?? '';
                $sectorId = $row[2]?? ''; // Asegúrate de que el sector_id es un valor válido o vacío si no está presente
                $observaciones = $row[3]?? '';
        
                Empresa::create([
                    'id' => $id,
                    'nombre' => $nombre,
                    "slug" => substr(\Illuminate\Support\Str::slug($nombre), 0, 30),
                    'sector_id' => $sectorId,
                    'observaciones' => $observaciones,
                ]);
            }
            $headers = false;
        }

        fclose($csvFile);
    }
}
