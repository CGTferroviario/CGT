<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CcaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voccaa_id
     */
    public function run()
    {
        DB::table('ccaas')->delete();

        DB::table('ccaas')->insert([
            ['ccaa_id' => '1', 'nombre' => "Andalucía", ],
            ['ccaa_id' => '2', 'nombre' => "Aragón", ],
            ['ccaa_id' => '3', 'nombre' => "Principado de Asturias", ],
            ['ccaa_id' => '4', 'nombre' => "Islas Baleares", ],
            ['ccaa_id' => '5', 'nombre' => "Canarias", ],
            ['ccaa_id' => '6', 'nombre' => "Cantabria", ],
            ['ccaa_id' => '7', 'nombre' => "Castilla y León", ],
            ['ccaa_id' => '8', 'nombre' => "Castilla - La Mancha", ],
            ['ccaa_id' => '9', 'nombre' => "Cataluña", ],
            ['ccaa_id' => '10', 'nombre' => "Comunidad Valenciana", ],
            ['ccaa_id' => '11', 'nombre' => "Extremadura", ],
            ['ccaa_id' => '12', 'nombre' => "Galicia", ],
            ['ccaa_id' => '13', 'nombre' => "Comunidad de Madrid", ],
            ['ccaa_id' => '14', 'nombre' => "Región de Murcia", ],
            ['ccaa_id' => '15', 'nombre' => "Comunidad Foral de Navarra", ],
            ['ccaa_id' => '16', 'nombre' => "País Vasco", ],
            ['ccaa_id' => '17', 'nombre' => "La Rioja", ],
            ['ccaa_id' => '18', 'nombre' => "Ceuta", ],
            ['ccaa_id' => '19', 'nombre' => "Melilla", ]
        ]);
    }
}
