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
        Comunicado::truncate();

        $csvFile = fopen(base_path("database/data/comunicados.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                $fecha = DateTime::createFromFormat('m/d/Y', $data['6']);
                if ($fecha !== false) {
                    $row['6'] = $fecha->format('Y-m-d');
                } else {
                    // Handle error
                }

                for ($i = 0; $i < count($data); $i++) {
                    if (empty($data[$i])) {
                        $data[$i] = 0;
                    }
                }

                $Comunicado = Comunicado::create([
                    "id" => $data['0'],
                    "publicado" => $data['3'],
                    "user_id" => $data['4'],
                    "numero" => $data['5'],
                    "empresa_id" => $data['6'],
                    "categoria_id" => $data['7'],
                    "fecha" => $fecha,
                    "titulo" => $data['9'],
                    "slug" => substr(\Illuminate\Support\Str::slug($data['9']), 0, 30),
                    "subtitulo" => $data['10'],
                    "cuerpo" => $data['11'],
                    "visualizaciones" => $data['1'],
                    "descargas" => $data['2'],
                                      
                    
                    
                    
                    
                    
                    
                    
                    
                    "adjunto" => $data['12'],
                    "imagen" => $data['13'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

        // // Skip the first line
        // fgetcsv($csvFile);

        // $fields = ['id', 'visualizaciones', 'descargas', 'publicado', 'user_id', 'numero', 'empresa_id', 'categoria_id', 'fecha', 'titulo', 'subtitulo', 'cuerpo', 'pdf', 'imagen', 'adjunto', 'created_at', 'updated_at'];

        // while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
        //     $row = [];
        //     foreach ($fields as $index => $field) {
        //         if (isset($data[$index])) {
        //             // $row[$field] = addslashes(str_replace('\n', "\n", mb_convert_encoding($data[$index], 'UTF-8', 'Windows-1252')));
        //             $row[$field] = iconv('Windows-1252', 'UTF-8//IGNORE', $data[$index]);
        //         } else {
        //             $row[$field] = null;
        //         }
        //     }

        //     $fecha = DateTime::createFromFormat('m/d/Y', $row['fecha']);
        //     if ($fecha !== false) {
        //         $row['fecha'] = $fecha->format('Y-m-d');
        //     } else {
        //         // Handle error
        //     }
        //     $row['slug'] = substr(\Illuminate\Support\Str::slug($row['titulo']), 0, 20);
        //     $row['created_at'] = Carbon::now();
        //     $row['updated_at'] = Carbon::now();

        //     Comunicado::create($row);
        // }

        // fclose($csvFile);

    }
}

