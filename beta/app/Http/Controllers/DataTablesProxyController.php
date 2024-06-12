<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTablesProxyController extends Controller
{
    public function getEsEsJson()
    {
        $url = 'http://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json';
        $response = file_get_contents($url);
        return response($response, 200)->header('Content-Type', 'application/json');
    }
}
