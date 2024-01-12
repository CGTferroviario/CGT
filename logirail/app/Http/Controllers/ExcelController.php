<?php

namespace App\Http\Controllers;

use App\Exports\FilesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportFiles()
        {
            return Excel::download(new FilesExport, 'nombres-ficheros.xlsx');
        }
}