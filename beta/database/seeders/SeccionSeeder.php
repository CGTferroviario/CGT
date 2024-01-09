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
                $equipo = Seccion::create([
                    "nombre" => mb_convert_encoding($data['0'], 'UTF-8', 'ISO-8859-1'),
                    "email" => mb_convert_encoding($data['1'], 'UTF-8', 'ISO-8859-1'),
                    "email2" => mb_convert_encoding($data['2'], 'UTF-8', 'ISO-8859-1'),                  
                    "direccion" => mb_convert_encoding($data['3'], 'UTF-8', 'ISO-8859-1'),
                    "descripcion" => mb_convert_encoding($data['4'], 'UTF-8', 'ISO-8859-1'),
                    "telefono" => mb_convert_encoding($data['5'], 'UTF-8', 'ISO-8859-1'),
                    "responsable" => mb_convert_encoding($data['6'], 'UTF-8', 'ISO-8859-1'),
                    "ccaa_id" => mb_convert_encoding($data['7'], 'UTF-8', 'ISO-8859-1'),
                    "provincia_id" => mb_convert_encoding($data['8'], 'UTF-8', 'ISO-8859-1'),
                    "municipio_id" => mb_convert_encoding($data['9'], 'UTF-8', 'ISO-8859-1'),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}