<?php

namespace Database\Seeders;

use App\Imports\NoticiasImport;
use App\Models\Noticia;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use Illuminate\Support\Facades\Log;


class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Noticia::truncate(); //limpiamos la tabla para prevenir entradas duplicadas

        $csvFile = fopen(base_path("database/data/noticias_full.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                // Asegúrate de que haya suficientes elementos en el array
                $data = array_pad($data, 15, null);

                // Convertimos la fecha del formato español al formato americano que es lo que acepta la BBDD
                $fecha = null;
                if (!empty($data[6])) {
                    $fecha = DateTime::createFromFormat('d/m/Y', $data[6]);
                    if ($fecha === false) {
                        Log::warning("Fecha inválida en la fila: " . implode(', ', $data));
                        continue; // Salta este registro si la fecha no es válida
                    }
                    $fecha = $fecha->format('Y-m-d');
                }
                $cuerpo = isset($data[10]) ? \Illuminate\Support\Str::of($data[10])->replace("\n", "<br>") : null;

                try {
                    $Noticia = Noticia::create([
                        "id" => $data[0],
                        "visualizaciones" => $data[1],
                        "publicado" => $data[2],                  
                        "user_id" => $data[3],
                        "empresa_id" => $data[4],
                        "categoria_id" => $data[5],
                        "fecha" => $fecha,
                        "titulo" => $data[7],
                        "slug" => substr(\Illuminate\Support\Str::slug($data[7]), 0, 30),
                        "subtitulo" => $data[9],
                        "cuerpo" => $cuerpo,
                        "adjunto" => $data[11],
                        "imagen" => $data[12],
                        "created_at" => $data[13],
                        "updated_at" => $data[14],
                    ]);
                    Log::info("Noticia creada con ID: " . $Noticia->id);
                } catch (\Exception $e) {
                    Log::error("Error al crear noticia: " . $e->getMessage());
                    Log::error("Datos de la fila: " . implode(', ', $data));
                }

                // $fecha = DateTime::createFromFormat('d/m/Y', $data['6']);
                // if ($fecha !== false) {
                //     $data['6'] = $fecha->format('Y-m-d');
                // } else {
                //     // Handle error
                // }

                // Revisamos todos los campos y rellenamos en caso de vacío
                // for ($i = 0; $i < count($data); $i++) {
                //     if (isset($data[$i]) && empty($data[$i])) { // Verificamos si el índice existe antes de verificar si está vacío
                //         $data[$i] = NULL;
                //     }
                // }

                // $createdAtString = $data[13]; // Asumiendo que esta es la posición correcta
                
                // $updatedAtString = $data[14]; // Asumiendo que esta es la posición correcta
                
                // $createdAt = DateTime::createFromFormat('d/m/Y H:i', $createdAtString);
                // $updatedAt = DateTime::createFromFormat('d/m/Y H:i', $updatedAtString);
                
                

                // $cuerpo = \Illuminate\Support\Str::of($data['10'])->replace("\n", "<br>");

                // $Noticia = Noticia::create([
                //     "id" => $data['0'],
                //     "visualizaciones" => $data['1'],
                //     "publicado" => $data['2'],                  
                //     "user_id" => $data['3'],
                //     "empresa_id" => $data['4'],
                //     "categoria_id" => $data['5'],
                //     "fecha" => $fecha,
                //     "titulo" => $data['7'],
                //     "slug" => substr(\Illuminate\Support\Str::slug($data['7']), 0, 30),
                //     "subtitulo" => $data['9'],
                //     "cuerpo" => $cuerpo,
                //     "adjunto" => $data['11'],
                //     "imagen" => $data['12'],
                //     // "created_at" => $createdAt,
                //     // "updated_at" => $updatedAt,
                // ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
