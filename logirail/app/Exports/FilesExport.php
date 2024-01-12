<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FilesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $files = Storage::files('tu_carpeta');
        $fileNames = collect($files)->map(function ($file) {
            return [basename($file)];
        });
        return $fileNames;
    }

    public function headings(): array
    {
        return ['Nombre del Archivo'];
    }
}

