<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etiquetas')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('etiquetas')->insert([
            [ 'nombre' => 'AFILIACIÓN' , 'activa' => 1  ],
            [ 'nombre' => 'AYUDAS Y BENEFICIOS SOCIALES' , 'activa' => 1  ],
            [ 'nombre' => 'IGUALDAD' , 'activa' => 1  ],
            [ 'nombre' => 'LEGISLACIÓN · NORMATIVA LABORAL' , 'activa' => 1  ],
            [ 'nombre' => 'LICENCIAS' , 'activa' => 1  ],
            [ 'nombre' => 'MAPA ESTACIONES' , 'activa' => 1  ],
            [ 'nombre' => 'MEDIDAS DE CONCILIACIÓN' , 'activa' => 1  ],
            [ 'nombre' => 'MODELOS DE SOLICITUD DE EMPRESA' , 'activa' => 1  ],
            [ 'nombre' => 'PROTOCOLOS FRENTE A LOS ACOSOS' , 'activa' => 1  ],
            [ 'nombre' => 'SALUD LABORAL' , 'activa' => 1  ],
            [ 'nombre' => 'TELETRABAJO' , 'activa' => 1  ],
            [ 'nombre' => 'TABLAS SALARIALES' , 'activa' => 1  ],
            [ 'nombre' => 'CONVENIOS COLECTIVOS' , 'activa' => 1  ],
            [ 'nombre' => 'LEGISLACIÓN LABORAL' , 'activa' => 1  ],
            [ 'nombre' => 'LEGISLACIÓN FERROVIARIA' , 'activa' => 1  ],
            [ 'nombre' => 'FORMULARIOS // MODELOS' , 'activa' => 1  ],
            [ 'nombre' => 'LOGROS JURÍDICOS CGT' , 'activa' => 1  ],
            [ 'nombre' => 'SEGURIDAD EN LA CIRCULACIÓN' , 'activa' => 1  ],
            [ 'nombre' => 'ARCHIVO HISTÓRICO' , 'activa' => 1  ],
            [ 'nombre' => 'DEFENSA DEL FERROCARRIL' , 'activa' => 1  ],
            [ 'nombre' => 'COLEGIO DE HUÉRFANOS' , 'activa' => 1  ],
            [ 'nombre' => 'VIA LIBERTARIA' , 'activa' => 1  ],
            [ 'nombre' => 'VIDEOS' , 'activa' => 1  ],
            [ 'nombre' => 'AUDIOS' , 'activa' => 1  ],
            [ 'nombre' => 'CARTELES' , 'activa' => 1  ],
            [ 'nombre' => 'FOTOGRAFIAS' , 'activa' => 1  ],
            [ 'nombre' => 'LOGOTIPOS' , 'activa' => 1  ],
        ]);
    }
}