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
            ['id' => '1', 'ccaa_id' => 8, 'nombre' => 'Albacete', ],
            ['id' => '2', 'ccaa_id' => 8, 'nombre' => 'Ciudad Real', ],
            ['id' => '3', 'ccaa_id' => 8, 'nombre' => 'Cuenca', ],
            ['id' => '4', 'ccaa_id' => 8, 'nombre' => 'Guadalajara', ],
            ['id' => '5', 'ccaa_id' => 8, 'nombre' => 'Toledo', ],
            ['id' => '6', 'ccaa_id' => 2, 'nombre' => 'Huesca', ],
            ['id' => '7', 'ccaa_id' => 2, 'nombre' => 'Teruel', ],
            ['id' => '8', 'ccaa_id' => 2, 'nombre' => 'Zaragoza', ],
            ['id' => '9', 'ccaa_id' => 18, 'nombre' => 'Ceuta', ],
            ['id' => '10', 'ccaa_id' => 13, 'nombre' => 'Madrid', ],
            ['id' => '11', 'ccaa_id' => 14, 'nombre' => 'Murcia', ],
            ['id' => '12', 'ccaa_id' => 19, 'nombre' => 'Melilla', ],
            ['id' => '13', 'ccaa_id' => 15, 'nombre' => 'Navarra', ],
            ['id' => '14', 'ccaa_id' => 1, 'nombre' => 'Almería', ],
            ['id' => '15', 'ccaa_id' => 1, 'nombre' => 'Cádiz', ],
            ['id' => '16', 'ccaa_id' => 1, 'nombre' => 'Córdoba', ],
            ['id' => '17', 'ccaa_id' => 1, 'nombre' => 'Granada', ],
            ['id' => '18', 'ccaa_id' => 1, 'nombre' => 'Huelva', ],
            ['id' => '19', 'ccaa_id' => 1, 'nombre' => 'Jaén', ],
            ['id' => '20', 'ccaa_id' => 1, 'nombre' => 'Málaga', ],
            ['id' => '21', 'ccaa_id' => 1, 'nombre' => 'Sevilla', ],
            ['id' => '22', 'ccaa_id' => 3, 'nombre' => 'Asturias', ],
            ['id' => '23', 'ccaa_id' => 6, 'nombre' => 'Cantabria', ],
            ['id' => '24', 'ccaa_id' => 7, 'nombre' => 'Ávila', ],
            ['id' => '25', 'ccaa_id' => 7, 'nombre' => 'Burgos', ],
            ['id' => '26', 'ccaa_id' => 7, 'nombre' => 'León', ],
            ['id' => '27', 'ccaa_id' => 7, 'nombre' => 'Palencia', ],
            ['id' => '28', 'ccaa_id' => 7, 'nombre' => 'Salamanca', ],
            ['id' => '29', 'ccaa_id' => 7, 'nombre' => 'Segovia', ],
            ['id' => '30', 'ccaa_id' => 7, 'nombre' => 'Soria', ],
            ['id' => '31', 'ccaa_id' => 7, 'nombre' => 'Valladolid', ],
            ['id' => '32', 'ccaa_id' => 7, 'nombre' => 'Zamora', ],
            ['id' => '33',  'ccaa_id' => 9, 'nombre' => 'Barcelona', ],
            ['id' => '34',  'ccaa_id' => 9, 'nombre' => 'Gerona', ],
            ['id' => '35',  'ccaa_id' => 9, 'nombre' => 'Lérida', ],
            ['id' => '36',  'ccaa_id' => 9, 'nombre' => 'Tarragona', ],
            ['id' => '37',  'ccaa_id' => 11, 'nombre' => 'Badajoz', ],
            ['id' => '38',  'ccaa_id' => 11, 'nombre' => 'Cáceres', ],
            ['id' => '39',  'ccaa_id' => 12, 'nombre' => 'Coruña, La', ],
            ['id' => '40',  'ccaa_id' => 12, 'nombre' => 'Lugo', ],
            ['id' => '41',  'ccaa_id' => 12, 'nombre' => 'Orense', ],
            ['id' => '42',  'ccaa_id' => 12, 'nombre' => 'Pontevedra', ],
            ['id' => '43',  'ccaa_id' => 17, 'nombre' => 'Rioja, La', ],
            ['id' => '44',  'ccaa_id' => 4, 'nombre' => 'Baleares, Islas', ],
            ['id' => '45',  'ccaa_id' => 16, 'nombre' => 'Álava', ],
            ['id' => '46',  'ccaa_id' => 16, 'nombre' => 'Guipúzcoa', ],
            ['id' => '47',  'ccaa_id' => 16, 'nombre' => 'Vizcaya', ],
            ['id' => '48',  'ccaa_id' => 5, 'nombre' => 'Palmas, Las', ],
            ['id' => '49',  'ccaa_id' => 5, 'nombre' => 'Tenerife, Santa Cruz De', ],
            ['id' => '50',  'ccaa_id' => 10, 'nombre' => 'Alicante', ],
            ['id' => '51',  'ccaa_id' => 10, 'nombre' => 'Castellón', ],
            ['id' => '52',  'ccaa_id' => 10, 'nombre' => 'Valencia', ]
        ]);
    }
}
