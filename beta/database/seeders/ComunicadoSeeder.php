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

        $fields = ['id', 'visualizaciones', 'descargas', 'publicado', 'user_id', 'numero', 'empresa_id', 'categoria_id', 'fecha', 'titulo', 'subtitulo', 'cuerpo', 'pdf', 'imagen', 'adjunto', 'created_at', 'updated_at'];

        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            if ($data === array_slice($data, 0, 1)) {
                continue;
            }

            $row = [];
            foreach ($fields as $index => $field) {
                $row[$field] = mb_convert_encoding($data[$index], 'UTF-8', 'ISO-8859-1');
            }

            $fecha = DateTime::createFromFormat('m/d/Y', $row['fecha']);
            if ($fecha !== false) {
                $row['fecha'] = $fecha->format('Y-m-d');
            } else {
                // Handle error
            }

            // $creado = Carbon::createFromFormat('d/m/Y H:i', $data['15']);
            // $actualizado = Carbon::createFromFormat('d/m/Y H:i', $data['16']);

            

            $row['created_at'] = Carbon::createFromFormat('d/m/Y H:i', $data['15']);
            $row['updated_at'] = Carbon::createFromFormat('d/m/Y H:i', $data['16']);

            Comunicado::create($row);
        }

        fclose($csvFile);

    }
}
