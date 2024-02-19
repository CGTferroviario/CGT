<?php

namespace Database\Seeders;

use App\Models\Noticia;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Noticia::truncate();

        $csvFile = fopen(base_path("database/data/noticias.opt.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile,  555, ";")) !== false) {
            if (!$firstline) {
                // Check if required fields are not empty
                // if (empty($data['0']) || empty($data['1']) || empty($data['2']) || empty($data['3']) || empty($data['4']) || empty($data['5']) || empty($data['6']) || empty($data['7']) || empty($data['9']) || empty($data['10']) || empty($data['11']) || empty($data['12'])) {
                //     // Handle error, possibly by logging or throwing an exception
                //     continue;
                // }

                $fecha = DateTime::createFromFormat('m/d/Y', $data['6']);
                if ($fecha === false) {
                    // Handle date parsing error
                    continue;
                }

                $Noticia = Noticia::create([
                    "id" => mb_convert_encoding($data['0'], 'UTF-8', 'ISO-8859-1'),
                    "visualizaciones" => mb_convert_encoding($data['1'], 'UTF-8', 'ISO-8859-1'),
                    "publicado" => mb_convert_encoding($data['2'], 'UTF-8', 'ISO-8859-1'),
                    "user_id" => mb_convert_encoding($data['3'], 'UTF-8', 'ISO-8859-1'),
                    "empresa_id" => mb_convert_encoding($data['4'], 'UTF-8', 'ISO-8859-1'),
                    "categoria_id" => mb_convert_encoding($data['5'], 'UTF-8', 'ISO-8859-1'),
                    "fecha" => $fecha->format('Y-m-d'),
                    "titulo" => mb_convert_encoding($data['7'], 'UTF-8', 'ISO-8859-1'),
                    "slug" => substr(\Illuminate\Support\Str::slug($data['7']),  0, 20),
                    "subtitulo" => isset($data['9']) ? mb_convert_encoding($data['9'], 'UTF-8', 'ISO-8859-1') : null,
                    "cuerpo" => isset($data['10']) ? mb_convert_encoding($data['10'], 'UTF-8', 'ISO-8859-1') : null,
                    "adjunto" => isset($data['11']) ? mb_convert_encoding($data['11'], 'UTF-8', 'ISO-8859-1') : null,
                    "imagen" => isset($data['12']) ? mb_convert_encoding($data['12'], 'UTF-8', 'ISO-8859-1') : null,
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

        // Noticia::truncate();

        // $csvFile = fopen(base_path("database/data/noticias.opt.csv"), "r");

        // $firstline = true;
        // while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
        //     if (!$firstline) {

        //         $fecha = DateTime::createFromFormat('m/d/Y', $data['6']);
        //         if ($fecha !== false) {
        //             $row['6'] = $fecha->format('Y-m-d');
        //         } else {
        //             // Handle error
        //         }

        //         $Noticia = Noticia::create([
        //             "id" => mb_convert_encoding($data['0'], 'UTF-8', 'ISO-8859-1'),
        //             "visualizaciones" => mb_convert_encoding($data['1'], 'UTF-8', 'ISO-8859-1'),
        //             "publicado" => mb_convert_encoding($data['2'], 'UTF-8', 'ISO-8859-1'),                  
        //             "user_id" => mb_convert_encoding($data['3'], 'UTF-8', 'ISO-8859-1'),
        //             "empresa_id" => mb_convert_encoding($data['4'], 'UTF-8', 'ISO-8859-1'),
        //             "categoria_id" => mb_convert_encoding($data['5'], 'UTF-8', 'ISO-8859-1'),
        //             "fecha" => $fecha,
        //             "titulo" => mb_convert_encoding($data['7'], 'UTF-8', 'ISO-8859-1'),
        //             "slug" => \Illuminate\Support\Str::slug($data['7']),
        //             "subtitulo" => mb_convert_encoding($data['9'], 'UTF-8', 'ISO-8859-1'),
        //             "cuerpo" => mb_convert_encoding($data['10'], 'UTF-8', 'ISO-8859-1'),
        //             "adjunto" => mb_convert_encoding($data['11'], 'UTF-8', 'ISO-8859-1'),
        //             "imagen" => mb_convert_encoding($data['12'], 'UTF-8', 'ISO-8859-1'),
        //         ]);
        //     }
        //     $firstline = false;
        // }

        // fclose($csvFile);

    //     Noticia::truncate();

    //     $csvFile = fopen(base_path("database/data/noticias.opt.csv"), "r");

    //     $firstline = true;
    //     $noticias = [];

    //     while (($data = fgetcsv($csvFile,  555, ";")) !== false) {
    //         if (!$firstline) {
    //             $fecha = DateTime::createFromFormat('m/d/Y', $data['6']);
    //             if ($fecha === false) {
    //                 // Handle error, possibly by logging or throwing an exception
    //                 continue;
    //             }

    //             $noticias[] = [
    //                 "id" => $this->convertEncoding($data['0']),
    //                 "visualizaciones" => $this->convertEncoding($data['1']),
    //                 "publicado" => $this->convertEncoding($data['2']),
    //                 "user_id" => $this->convertEncoding($data['3']),
    //                 "empresa_id" => $this->convertEncoding($data['4']),
    //                 "categoria_id" => $this->convertEncoding($data['5']),
    //                 "fecha" => $fecha->format('Y-m-d'),
    //                 "titulo" => $this->convertEncoding($data['7']),
    //                 "slug" => \Illuminate\Support\Str::slug($data['7']),
    //                 "subtitulo" => $this->convertEncoding($data['9']),
    //                 "cuerpo" => $this->convertEncoding($data['10']),
    //                 "adjunto" => $this->convertEncoding($data['11']),
    //                 "imagen" => $this->convertEncoding($data['12']),
    //             ];
    //         }
    //         $firstline = false;
    //     }

    //     fclose($csvFile);

    //     DB::disableQueryLog(); // Disable query logging for performance
    //     Noticia::insert($noticias); // Insert all records in one query
    // }

    // // Helper function to convert encoding
    // private function convertEncoding($string) {
    //     return mb_convert_encoding($string, 'UTF-8', 'ISO-8859-1');
    }
}
