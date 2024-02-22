<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Seccion::truncate();

        $csvFile = fopen(base_path("database/data/secciones.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {
                $seccion = Seccion::create([
                    "nombre" => $data['0'],
                    "email" => $data['1'],
                    "email2" => $data['2'],
                    "direccion" => $data['3'],
                    "descripcion" => $data['4'],
                    "telefono" => $data['5'],
                    "responsable" => $data['6'],
                    "ccaa_id" => $data['7'],
                    "provincia_id" => $data['8'],
                    "municipio_id" => $data['9'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}