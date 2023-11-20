<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->delete();

        DB::table('provincias')->insert([
            ['provincia_id' => '1', 'ccaa_id' => 8, 'nombre' => 'Albacete', ],
            ['provincia_id' => '2', 'ccaa_id' => 8, 'nombre' => 'Ciudad Real', ],
            ['provincia_id' => '3', 'ccaa_id' => 8, 'nombre' => 'Cuenca', ],
            ['provincia_id' => '4', 'ccaa_id' => 8, 'nombre' => 'Guadalajara', ],
            ['provincia_id' => '5', 'ccaa_id' => 8, 'nombre' => 'Toledo', ],
            ['provincia_id' => '6', 'ccaa_id' => 2, 'nombre' => 'Huesca', ],
            ['provincia_id' => '7', 'ccaa_id' => 2, 'nombre' => 'Teruel', ],
            ['provincia_id' => '8', 'ccaa_id' => 2, 'nombre' => 'Zaragoza', ],
            ['provincia_id' => '9', 'ccaa_id' => 18, 'nombre' => 'Ceuta', ],
            ['provincia_id' => '10', 'ccaa_id' => 13, 'nombre' => 'Madrid', ],
            ['provincia_id' => '11', 'ccaa_id' => 14, 'nombre' => 'Murcia', ],
            ['provincia_id' => '12', 'ccaa_id' => 19, 'nombre' => 'Melilla', ],
            ['provincia_id' => '13', 'ccaa_id' => 15, 'nombre' => 'Navarra', ],
            ['provincia_id' => '14', 'ccaa_id' => 1, 'nombre' => 'Almería', ],
            ['provincia_id' => '15', 'ccaa_id' => 1, 'nombre' => 'Cádiz', ],
            ['provincia_id' => '16', 'ccaa_id' => 1, 'nombre' => 'Córdoba', ],
            ['provincia_id' => '17', 'ccaa_id' => 1, 'nombre' => 'Granada', ],
            ['provincia_id' => '18', 'ccaa_id' => 1, 'nombre' => 'Huelva', ],
            ['provincia_id' => '19', 'ccaa_id' => 1, 'nombre' => 'Jaén', ],
            ['provincia_id' => '20', 'ccaa_id' => 1, 'nombre' => 'Málaga', ],
            ['provincia_id' => '21', 'ccaa_id' => 1, 'nombre' => 'Sevilla', ],
            ['provincia_id' => '22', 'ccaa_id' => 3, 'nombre' => 'Asturias', ],
            ['provincia_id' => '23', 'ccaa_id' => 6, 'nombre' => 'Cantabria', ],
            ['provincia_id' => '24', 'ccaa_id' => 7, 'nombre' => 'Ávila', ],
            ['provincia_id' => '25', 'ccaa_id' => 7, 'nombre' => 'Burgos', ],
            ['provincia_id' => '26', 'ccaa_id' => 7, 'nombre' => 'León', ],
            ['provincia_id' => '27', 'ccaa_id' => 7, 'nombre' => 'Palencia', ],
            ['provincia_id' => '28', 'ccaa_id' => 7, 'nombre' => 'Salamanca', ],
            ['provincia_id' => '29', 'ccaa_id' => 7, 'nombre' => 'Segovia', ],
            ['provincia_id' => '30', 'ccaa_id' => 7, 'nombre' => 'Soria', ],
            ['provincia_id' => '31', 'ccaa_id' => 7, 'nombre' => 'Valladolid', ],
            ['provincia_id' => '32', 'ccaa_id' => 7, 'nombre' => 'Zamora', ],
            ['provincia_id' => '33',  'ccaa_id' => 9, 'nombre' => 'Barcelona', ],
            ['provincia_id' => '34',  'ccaa_id' => 9, 'nombre' => 'Gerona', ],
            ['provincia_id' => '35',  'ccaa_id' => 9, 'nombre' => 'Lérida', ],
            ['provincia_id' => '36',  'ccaa_id' => 9, 'nombre' => 'Tarragona', ],
            ['provincia_id' => '37',  'ccaa_id' => 11, 'nombre' => 'Badajoz', ],
            ['provincia_id' => '38',  'ccaa_id' => 11, 'nombre' => 'Cáceres', ],
            ['provincia_id' => '39',  'ccaa_id' => 12, 'nombre' => 'Coruña, La', ],
            ['provincia_id' => '40',  'ccaa_id' => 12, 'nombre' => 'Lugo', ],
            ['provincia_id' => '41',  'ccaa_id' => 12, 'nombre' => 'Orense', ],
            ['provincia_id' => '42',  'ccaa_id' => 12, 'nombre' => 'Pontevedra', ],
            ['provincia_id' => '43',  'ccaa_id' => 17, 'nombre' => 'Rioja, La', ],
            ['provincia_id' => '44',  'ccaa_id' => 4, 'nombre' => 'Baleares, Islas', ],
            ['provincia_id' => '45',  'ccaa_id' => 16, 'nombre' => 'Álava', ],
            ['provincia_id' => '46',  'ccaa_id' => 16, 'nombre' => 'Guipúzcoa', ],
            ['provincia_id' => '47',  'ccaa_id' => 16, 'nombre' => 'Vizcaya', ],
            ['provincia_id' => '48',  'ccaa_id' => 5, 'nombre' => 'Palmas, Las', ],
            ['provincia_id' => '49',  'ccaa_id' => 5, 'nombre' => 'Tenerife, Santa Cruz De', ],
            ['provincia_id' => '50',  'ccaa_id' => 10, 'nombre' => 'Alicante', ],
            ['provincia_id' => '51',  'ccaa_id' => 10, 'nombre' => 'Castellón', ],
            ['provincia_id' => '52',  'ccaa_id' => 10, 'nombre' => 'Valencia', ]
        ]);
    }
}
