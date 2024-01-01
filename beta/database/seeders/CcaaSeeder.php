<?php

namespace Database\Seeders;

use App\Models\Ccaa;
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
        Ccaa::truncate();

        $csvFile = fopen(base_path("database/data/ccaas.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            // dd($data[1]);
            if (!$firstline) {
                $ccaa = Ccaa::create([
                    "id" => $data['0'],
                    "nombre" => $data['1'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
