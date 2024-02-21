<?php

namespace App\Imports;

use App\Models\Noticia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Carbon\Carbon;

class NoticiasImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $fecha = Carbon::createFromFormat('d/m/Y', $row['fecha']);
        if ($fecha !== false) {
            $row['fecha'] = $fecha->format('Y-m-d');
        }

        return new Noticia([
            'id' => $row['id'],
            'visualizaciones' => $row['visualizaciones'],
            'publicado' => $row['publicado'],
            'user_id' => $row['user_id'],
            'empresa_id' => $row['empresa_id'],
            'categoria_id' => $row['categoria_id'],
            'fecha' => $fecha,
            'titulo' => $row['titulo'],
            'slug' => \Illuminate\Support\Str::slug($row['titulo']),
            'subtitulo' => $row['subtitulo'],
            'cuerpo' => $row['cuerpo'],
            'adjunto' => $row['adjunto'],
            'imagen' => $row['imagen'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
            'input_encoding' => 'ISO-8859-1'
        ];
    }
}

