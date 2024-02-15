<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if (!$firstline) {

                $Noticia = Noticia::create([
                    "id" => mb_convert_encoding($data['0'], 'UTF-8', 'ISO-8859-1'),
                    "visualizaciones" => mb_convert_encoding($data['1'], 'UTF-8', 'ISO-8859-1'),
                    "publicado" => mb_convert_encoding($data['2'], 'UTF-8', 'ISO-8859-1'),                  
                    "user_id" => mb_convert_encoding($data['3'], 'UTF-8', 'ISO-8859-1'),
                    "empresa_id" => mb_convert_encoding($data['4'], 'UTF-8', 'ISO-8859-1'),
                    "categoria_id" => mb_convert_encoding($data['5'], 'UTF-8', 'ISO-8859-1'),
                    "fecha" => mb_convert_encoding($data['6'], 'UTF-8', 'ISO-8859-1'),
                    "titulo" => mb_convert_encoding($data['7'], 'UTF-8', 'ISO-8859-1'),
                    "slug" => \Illuminate\Support\Str::slug($data['7']),
                    "subtitulo" => mb_convert_encoding($data['9'], 'UTF-8', 'ISO-8859-1'),
                    "cuerpo" => mb_convert_encoding($data['10'], 'UTF-8', 'ISO-8859-1'),
                    "adjunto" => mb_convert_encoding($data['11'], 'UTF-8', 'ISO-8859-1'),
                    "imagen" => mb_convert_encoding($data['12'], 'UTF-8', 'ISO-8859-1'),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
