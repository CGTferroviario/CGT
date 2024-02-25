<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use Carbon\Carbon;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Comunicado::truncate();

        $csvFile = fopen(base_path("database/data/comunicados.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                $fecha = DateTime::createFromFormat('d/m/Y', $data['8']);
                if ($fecha !== false) {
                    $row['8'] = $fecha->format('Y-m-d');
                } else {
                    // Handle error
                }

                for ($i = 0; $i < count($data); $i++) {
                    if (empty($data[$i])) {
                        $data[$i] = 0;
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

