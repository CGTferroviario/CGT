<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProvinciasSeeder extends Seeder
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
            ['id_provincia' => '1', 'id_ccaa' => 8, 'nombre' => 'Albacete', ],
            ['id_provincia' => '2', 'id_ccaa' => 8, 'nombre' => 'Ciudad Real', ],
            ['id_provincia' => '3', 'id_ccaa' => 8, 'nombre' => 'Cuenca', ],
            ['id_provincia' => '4', 'id_ccaa' => 8, 'nombre' => 'Guadalajara', ],
            ['id_provincia' => '5', 'id_ccaa' => 8, 'nombre' => 'Toledo', ],
            ['id_provincia' => '6', 'id_ccaa' => 2, 'nombre' => 'Huesca', ],
            ['id_provincia' => '7', 'id_ccaa' => 2, 'nombre' => 'Teruel', ],
            ['id_provincia' => '8', 'id_ccaa' => 2, 'nombre' => 'Zaragoza', ],
            ['id_provincia' => '9', 'id_ccaa' => 18, 'nombre' => 'Ceuta', ],
            ['id_provincia' => '10', 'id_ccaa' => 13, 'nombre' => 'Madrid', ],
            ['id_provincia' => '11', 'id_ccaa' => 14, 'nombre' => 'Murcia', ],
            ['id_provincia' => '12', 'id_ccaa' => 19, 'nombre' => 'Melilla', ],
            ['id_provincia' => '13', 'id_ccaa' => 15, 'nombre' => 'Navarra', ],
            ['id_provincia' => '14', 'id_ccaa' => 1, 'nombre' => 'Almería', ],
            ['id_provincia' => '15', 'id_ccaa' => 1, 'nombre' => 'Cádiz', ],
            ['id_provincia' => '16', 'id_ccaa' => 1, 'nombre' => 'Córdoba', ],
            ['id_provincia' => '17', 'id_ccaa' => 1, 'nombre' => 'Granada', ],
            ['id_provincia' => '18', 'id_ccaa' => 1, 'nombre' => 'Huelva', ],
            ['id_provincia' => '19', 'id_ccaa' => 1, 'nombre' => 'Jaén', ],
            ['id_provincia' => '20', 'id_ccaa' => 1, 'nombre' => 'Málaga', ],
            ['id_provincia' => '21', 'id_ccaa' => 1, 'nombre' => 'Sevilla', ],
            ['id_provincia' => '22', 'id_ccaa' => 3, 'nombre' => 'Asturias', ],
            ['id_provincia' => '23', 'id_ccaa' => 6, 'nombre' => 'Cantabria', ],
            ['id_provincia' => '24', 'id_ccaa' => 7, 'nombre' => 'Ávila', ],
            ['id_provincia' => '25', 'id_ccaa' => 7, 'nombre' => 'Burgos', ],
            ['id_provincia' => '26', 'id_ccaa' => 7, 'nombre' => 'León', ],
            ['id_provincia' => '27', 'id_ccaa' => 7, 'nombre' => 'Palencia', ],
            ['id_provincia' => '28', 'id_ccaa' => 7, 'nombre' => 'Salamanca', ],
            ['id_provincia' => '29', 'id_ccaa' => 7, 'nombre' => 'Segovia', ],
            ['id_provincia' => '30', 'id_ccaa' => 7, 'nombre' => 'Soria', ],
            ['id_provincia' => '31', 'id_ccaa' => 7, 'nombre' => 'Valladolid', ],
            ['id_provincia' => '32', 'id_ccaa' => 7, 'nombre' => 'Zamora', ],
            ['id_provincia' => '33',  'id_ccaa' => 9, 'nombre' => 'Barcelona', ],
            ['id_provincia' => '34',  'id_ccaa' => 9, 'nombre' => 'Gerona', ],
            ['id_provincia' => '35',  'id_ccaa' => 9, 'nombre' => 'Lérida', ],
            ['id_provincia' => '36',  'id_ccaa' => 9, 'nombre' => 'Tarragona', ],
            ['id_provincia' => '37',  'id_ccaa' => 11, 'nombre' => 'Badajoz', ],
            ['id_provincia' => '38',  'id_ccaa' => 11, 'nombre' => 'Cáceres', ],
            ['id_provincia' => '39',  'id_ccaa' => 12, 'nombre' => 'Coruña, La', ],
            ['id_provincia' => '40',  'id_ccaa' => 12, 'nombre' => 'Lugo', ],
            ['id_provincia' => '41',  'id_ccaa' => 12, 'nombre' => 'Orense', ],
            ['id_provincia' => '42',  'id_ccaa' => 12, 'nombre' => 'Pontevedra', ],
            ['id_provincia' => '43',  'id_ccaa' => 17, 'nombre' => 'Rioja, La', ],
            ['id_provincia' => '44',  'id_ccaa' => 4, 'nombre' => 'Baleares, Islas', ],
            ['id_provincia' => '45',  'id_ccaa' => 16, 'nombre' => 'Álava', ],
            ['id_provincia' => '46',  'id_ccaa' => 16, 'nombre' => 'Guipúzcoa', ],
            ['id_provincia' => '47',  'id_ccaa' => 16, 'nombre' => 'Vizcaya', ],
            ['id_provincia' => '48',  'id_ccaa' => 5, 'nombre' => 'Palmas, Las', ],
            ['id_provincia' => '49',  'id_ccaa' => 5, 'nombre' => 'Tenerife, Santa Cruz De', ],
            ['id_provincia' => '50',  'id_ccaa' => 10, 'nombre' => 'Alicante', ],
            ['id_provincia' => '51',  'id_ccaa' => 10, 'nombre' => 'Castellón', ],
            ['id_provincia' => '52',  'id_ccaa' => 10, 'nombre' => 'Valencia', ]
        ]);
    }
}
