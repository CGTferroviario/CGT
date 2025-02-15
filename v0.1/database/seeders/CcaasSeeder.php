<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CcaasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void_ccaa
     */
    public function run()
    {
        DB::table('ccaas')->delete();

        DB::table('ccaas')->insert([
            ['id_ccaa' => '1', 'nombre_ccaa' => "Andalucía", ],
            ['id_ccaa' => '2', 'nombre_ccaa' => "Aragón", ],
            ['id_ccaa' => '3', 'nombre_ccaa' => "Principado de Asturias", ],
            ['id_ccaa' => '4', 'nombre_ccaa' => "Islas Baleares", ],
            ['id_ccaa' => '5', 'nombre_ccaa' => "Canarias", ],
            ['id_ccaa' => '6', 'nombre_ccaa' => "Cantabria", ],
            ['id_ccaa' => '7', 'nombre_ccaa' => "Castilla y León", ],
            ['id_ccaa' => '8', 'nombre_ccaa' => "Castilla - La Mancha", ],
            ['id_ccaa' => '9', 'nombre_ccaa' => "Cataluña", ],
            ['id_ccaa' => '10', 'nombre_ccaa' => "Comunidad Valenciana", ],
            ['id_ccaa' => '11', 'nombre_ccaa' => "Extremadura", ],
            ['id_ccaa' => '12', 'nombre_ccaa' => "Galicia", ],
            ['id_ccaa' => '13', 'nombre_ccaa' => "Comunidad de Madrid", ],
            ['id_ccaa' => '14', 'nombre_ccaa' => "Región de Murcia", ],
            ['id_ccaa' => '15', 'nombre_ccaa' => "Comunidad Foral de Navarra", ],
            ['id_ccaa' => '16', 'nombre_ccaa' => "País Vasco", ],
            ['id_ccaa' => '17', 'nombre_ccaa' => "La Rioja", ],
            ['id_ccaa' => '18', 'nombre_ccaa' => "Ceuta", ],
            ['id_ccaa' => '19', 'nombre_ccaa' => "Melilla", ]
        ]);
    }
}
