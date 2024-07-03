<?php

namespace Database\Seeders;

use App\Imports\NoticiasImport;
use App\Models\Noticia;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Noticia::truncate(); //limpiamos la tabla para prevenir entradas duplicadas

        $csvFile = fopen(base_path("database/data/noticias.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {



                // Convertimos la fecha del formato español al formato americano que es lo que acepta la BBDD
                $fecha = DateTime::createFromFormat('Y-m-d', $data['6']);
                if ($fecha !== false) {
                    $data['6'] = $fecha->format('Y-m-d');
                } else {
                    // Handle error
                }

                // Revisamos todos los campos y rellenamos en caso de vacío
                for ($i = 0; $i < count($data); $i++) {
                    if (isset($data[$i]) && empty($data[$i])) { // Verificamos si el índice existe antes de verificar si está vacío
                        $data[$i] = NULL;
                    }
                }

                $createdAtString = $data[13]; // Asumiendo que esta es la posición correcta
                
                $updatedAtString = $data[14]; // Asumiendo que esta es la posición correcta
                
                $createdAt = DateTime::createFromFormat('d/m/Y H:i', $createdAtString);
                $updatedAt = DateTime::createFromFormat('d/m/Y H:i', $updatedAtString);
                
                

                $cuerpo = \Illuminate\Support\Str::of($data['10'])->replace("\n", "<br>");

                $Noticia = Noticia::create([
                    "id" => $data['0'],
                    "visualizaciones" => $data['1'],
                    "publicado" => $data['2'],                  
                    "user_id" => $data['3'],
                    "empresa_id" => $data['4'],
                    "categoria_id" => $data['5'],
                    "fecha" => $fecha,
                    "titulo" => $data['7'],
                    "slug" => substr(\Illuminate\Support\Str::slug($data['7']), 0, 30),
                    "subtitulo" => $data['9'],
                    "cuerpo" => $cuerpo,
                    "adjunto" => $data['11'],
                    "imagen" => $data['12'],
                    "created_at" => $createdAt,
                    "updated_at" => $updatedAt,
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
