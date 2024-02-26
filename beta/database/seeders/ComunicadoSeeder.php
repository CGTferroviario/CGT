<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunicadoSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Comunicado::truncate();

        $csvFile = fopen(base_path("database/data/comunicados.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                // Convertimos la fecha del formato español al formato americano que es lo que acepta la BBDD
                $fecha = DateTime::createFromFormat('d/m/Y', $data['8']);
                if ($fecha !== false) {
                    $row['8'] = $fecha->format('Y-m-d');
                } else {
                    // Handle error
                }
                // Revisamos todos los campos y rellenamos en caso de vacío
                for ($i = 0; $i < count($data); $i++) {
                    if (empty($data[$i])) {
                        $data[$i] = "---";
                    }
                }

                $cuerpo = \Illuminate\Support\Str::of($data['12'])->replace("\n", "<br>");

                $Comunicado = Comunicado::create([
                    "id" => $data['0'],
                    "visualizaciones" => $data['1'],
                    "descargas" => $data['2'],
                    "publicado" => $data['3'],
                    "user_id" => $data['4'],
                    "numero" => $data['5'],
                    "empresa_id" => $data['6'],
                    "categoria_id" => $data['7'],
                    "fecha" => $fecha,
                    "titulo" => $data['9'],
                    "slug" => substr(\Illuminate\Support\Str::slug($data['9']), 0, 30),
                    "subtitulo" => $data['11'],
                    "cuerpo" => $cuerpo,    
                    "pdf" => $data['13'],
                    // "adjunto" => $data['12'],
                    // "imagen" => $data['13'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}

