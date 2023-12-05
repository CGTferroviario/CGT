<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipo::truncate();

        $csvFile = fopen(base_path("database/data/equipo.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 555, ";")) !== false) {
            // dd($data[1]);
            if (!$firstline) {
                $equipo = Equipo::create([
                    "tipo" => $data['0'],        
                    "cargo" => $data['1'],
                    "usuario" => $data['2'],
                    "email" => $data['3'],
                    "orden" => $data['4'],
                ]);    
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
