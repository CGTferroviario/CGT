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
     * @return void
     */
    public function run()
    {
        DB::table('ccaas')->delete();

        DB::table('ccaas')->insert([
            ['id' => '1', 'nombre' => "Andalucía", ],
            ['id' => '2', 'nombre' => "Aragón", ],
            ['id' => '3', 'nombre' => "Principado de Asturias", ],
            ['id' => '4', 'nombre' => "Islas Baleares", ],
            ['id' => '5', 'nombre' => "Canarias", ],
            ['id' => '6', 'nombre' => "Cantabria", ],
            ['id' => '7', 'nombre' => "Castilla y León", ],
            ['id' => '8', 'nombre' => "Castilla - La Mancha", ],
            ['id' => '9', 'nombre' => "Cataluña", ],
            ['id' => '10', 'nombre' => "Comunidad Valenciana", ],
            ['id' => '11', 'nombre' => "Extremadura", ],
            ['id' => '12', 'nombre' => "Galicia", ],
            ['id' => '13', 'nombre' => "Comunidad de Madrid", ],
            ['id' => '14', 'nombre' => "Región de Murcia", ],
            ['id' => '15', 'nombre' => "Comunidad Foral de Navarra", ],
            ['id' => '16', 'nombre' => "País Vasco", ],
            ['id' => '17', 'nombre' => "La Rioja", ],
            ['id' => '18', 'nombre' => "Ceuta", ],
            ['id' => '19', 'nombre' => "Melilla", ]
        ]);
    }
}
