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
            ['id_provincia' => '1', 'id_ccaa' => 8, 'nombre_provincia' => 'Albacete', ],
            ['id_provincia' => '2', 'id_ccaa' => 8, 'nombre_provincia' => 'Ciudad Real', ],
            ['id_provincia' => '3', 'id_ccaa' => 8, 'nombre_provincia' => 'Cuenca', ],
            ['id_provincia' => '4', 'id_ccaa' => 8, 'nombre_provincia' => 'Guadalajara', ],
            ['id_provincia' => '5', 'id_ccaa' => 8, 'nombre_provincia' => 'Toledo', ],
            ['id_provincia' => '6', 'id_ccaa' => 2, 'nombre_provincia' => 'Huesca', ],
            ['id_provincia' => '7', 'id_ccaa' => 2, 'nombre_provincia' => 'Teruel', ],
            ['id_provincia' => '8', 'id_ccaa' => 2, 'nombre_provincia' => 'Zaragoza', ],
            ['id_provincia' => '9', 'id_ccaa' => 18, 'nombre_provincia' => 'Ceuta', ],
            ['id_provincia' => '10', 'id_ccaa' => 13, 'nombre_provincia' => 'Madrid', ],
            ['id_provincia' => '11', 'id_ccaa' => 14, 'nombre_provincia' => 'Murcia', ],
            ['id_provincia' => '12', 'id_ccaa' => 19, 'nombre_provincia' => 'Melilla', ],
            ['id_provincia' => '13', 'id_ccaa' => 15, 'nombre_provincia' => 'Navarra', ],
            ['id_provincia' => '14', 'id_ccaa' => 1, 'nombre_provincia' => 'Almería', ],
            ['id_provincia' => '15', 'id_ccaa' => 1, 'nombre_provincia' => 'Cádiz', ],
            ['id_provincia' => '16', 'id_ccaa' => 1, 'nombre_provincia' => 'Córdoba', ],
            ['id_provincia' => '17', 'id_ccaa' => 1, 'nombre_provincia' => 'Granada', ],
            ['id_provincia' => '18', 'id_ccaa' => 1, 'nombre_provincia' => 'Huelva', ],
            ['id_provincia' => '19', 'id_ccaa' => 1, 'nombre_provincia' => 'Jaén', ],
            ['id_provincia' => '20', 'id_ccaa' => 1, 'nombre_provincia' => 'Málaga', ],
            ['id_provincia' => '21', 'id_ccaa' => 1, 'nombre_provincia' => 'Sevilla', ],
            ['id_provincia' => '22', 'id_ccaa' => 3, 'nombre_provincia' => 'Asturias', ],
            ['id_provincia' => '23', 'id_ccaa' => 6, 'nombre_provincia' => 'Cantabria', ],
            ['id_provincia' => '24', 'id_ccaa' => 7, 'nombre_provincia' => 'Ávila', ],
            ['id_provincia' => '25', 'id_ccaa' => 7, 'nombre_provincia' => 'Burgos', ],
            ['id_provincia' => '26', 'id_ccaa' => 7, 'nombre_provincia' => 'León', ],
            ['id_provincia' => '27', 'id_ccaa' => 7, 'nombre_provincia' => 'Palencia', ],
            ['id_provincia' => '28', 'id_ccaa' => 7, 'nombre_provincia' => 'Salamanca', ],
            ['id_provincia' => '29', 'id_ccaa' => 7, 'nombre_provincia' => 'Segovia', ],
            ['id_provincia' => '30', 'id_ccaa' => 7, 'nombre_provincia' => 'Soria', ],
            ['id_provincia' => '31', 'id_ccaa' => 7, 'nombre_provincia' => 'Valladolid', ],
            ['id_provincia' => '32', 'id_ccaa' => 7, 'nombre_provincia' => 'Zamora', ],
            ['id_provincia' => '33',  'id_ccaa' => 9, 'nombre_provincia' => 'Barcelona', ],
            ['id_provincia' => '34',  'id_ccaa' => 9, 'nombre_provincia' => 'Gerona', ],
            ['id_provincia' => '35',  'id_ccaa' => 9, 'nombre_provincia' => 'Lérida', ],
            ['id_provincia' => '36',  'id_ccaa' => 9, 'nombre_provincia' => 'Tarragona', ],
            ['id_provincia' => '37',  'id_ccaa' => 11, 'nombre_provincia' => 'Badajoz', ],
            ['id_provincia' => '38',  'id_ccaa' => 11, 'nombre_provincia' => 'Cáceres', ],
            ['id_provincia' => '39',  'id_ccaa' => 12, 'nombre_provincia' => 'Coruña, La', ],
            ['id_provincia' => '40',  'id_ccaa' => 12, 'nombre_provincia' => 'Lugo', ],
            ['id_provincia' => '41',  'id_ccaa' => 12, 'nombre_provincia' => 'Orense', ],
            ['id_provincia' => '42',  'id_ccaa' => 12, 'nombre_provincia' => 'Pontevedra', ],
            ['id_provincia' => '43',  'id_ccaa' => 17, 'nombre_provincia' => 'Rioja, La', ],
            ['id_provincia' => '44',  'id_ccaa' => 4, 'nombre_provincia' => 'Baleares, Islas', ],
            ['id_provincia' => '45',  'id_ccaa' => 16, 'nombre_provincia' => 'Álava', ],
            ['id_provincia' => '46',  'id_ccaa' => 16, 'nombre_provincia' => 'Guipúzcoa', ],
            ['id_provincia' => '47',  'id_ccaa' => 16, 'nombre_provincia' => 'Vizcaya', ],
            ['id_provincia' => '48',  'id_ccaa' => 5, 'nombre_provincia' => 'Palmas, Las', ],
            ['id_provincia' => '49',  'id_ccaa' => 5, 'nombre_provincia' => 'Tenerife, Santa Cruz De', ],
            ['id_provincia' => '50',  'id_ccaa' => 10, 'nombre_provincia' => 'Alicante', ],
            ['id_provincia' => '51',  'id_ccaa' => 10, 'nombre_provincia' => 'Castellón', ],
            ['id_provincia' => '52',  'id_ccaa' => 10, 'nombre_provincia' => 'Valencia', ]
        ]);
    }
}
