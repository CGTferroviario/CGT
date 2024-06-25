<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Municipio::truncate();

        $csvFile = fopen(base_path("database/data/municipios.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            // dd($data[1]);
            if (!$firstline) {
                $municipio = Municipio::create([
                    "id" => $data['0'],
                    "provincia_id" => $data['1'],
                    "municipio_cod" => $data['2'],
                    "nombre" => $data['3'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
