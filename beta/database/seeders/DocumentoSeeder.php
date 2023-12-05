<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = 'database/seeders/comunicados.csv';
        
        $file = fopen($filename, 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
            print_r("jajaj");
            print_r($line);
            exit;
        }
        exit;
        fclose($file);

    }
}
