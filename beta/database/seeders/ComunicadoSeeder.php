<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comunicado::truncate();

        $csvFile = fopen(base_path("database/data/comunicados.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {
                
                $fecha = DateTime::createFromFormat('m/d/Y', mb_convert_encoding($data['8'], 'UTF-8', 'ISO-8859-1'));
                if ($fecha !== false) {
                    $fecha = $fecha->format('Y-m-d');
                } else {
                    // Handle error
                }

                $comunicado = Comunicado::create([
                    "id" => mb_convert_encoding($data['0'], 'UTF-8', 'ISO-8859-1'),
                    "visualizaciones" => mb_convert_encoding($data['1'], 'UTF-8', 'ISO-8859-1'),
                    "descargas" => mb_convert_encoding($data['2'], 'UTF-8', 'ISO-8859-1'),                  
                    "publicado" => mb_convert_encoding($data['3'], 'UTF-8', 'ISO-8859-1'),
                    "user_id" => mb_convert_encoding($data['4'], 'UTF-8', 'ISO-8859-1'),
                    "numero" => mb_convert_encoding($data['5'], 'UTF-8', 'ISO-8859-1'),
                    "empresa_id" => mb_convert_encoding($data['6'], 'UTF-8', 'ISO-8859-1'),
                    "categoria_id" => mb_convert_encoding($data['7'], 'UTF-8', 'ISO-8859-1'),
                    "fecha" => $fecha,
                    "titulo" => mb_convert_encoding($data['9'], 'UTF-8', 'ISO-8859-1'),
                    "subtitulo" => mb_convert_encoding($data['10'], 'UTF-8', 'ISO-8859-1'),
                    "cuerpo" => mb_convert_encoding($data['11'], 'UTF-8', 'ISO-8859-1'),
                    "pdf" => mb_convert_encoding($data['12'], 'UTF-8', 'ISO-8859-1'),
                    "imagen" => mb_convert_encoding($data['13'], 'UTF-8', 'ISO-8859-1'),
                    "adjunto" => mb_convert_encoding($data['14'], 'UTF-8', 'ISO-8859-1'),
                    "created_at" => mb_convert_encoding($data['15'], 'UTF-8', 'ISO-8859-1'),
                    "updated_at" => mb_convert_encoding($data['16'], 'UTF-8', 'ISO-8859-1'),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
