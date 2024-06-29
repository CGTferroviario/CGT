<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(database_path('data/sectores.csv'), 'r');
        $headers = true;

        while (($row = fgetcsv($csvFile, 10000, ";"))!== false) {
            if (!$headers) {
                $id = $row[0]?? '';
                $nombre = $row[1]?? '';
                $observaciones = $row[2]?? '';
        
                Sector::create([
                    'id' => $id,
                    'nombre' => $nombre,
                    "slug" => substr(\Illuminate\Support\Str::slug($nombre), 0, 30),
                    'observaciones' => $observaciones,
                ]);
            }
            $headers = false;
        }

        fclose($csvFile);
    }
}
