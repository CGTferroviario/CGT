<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            ['nombre' => 'ADIF', 'logo' => 'www.adif.es' , 'gestion_vales' => 1, 'comunicados' => 1, 'activa' => 1], 
            ['nombre' => 'RENFE', 'logo' => 'www.renfe.es' , 'gestion_vales' => 1, 'comunicados' => 1, 'activa' => 1], 
            ['nombre' => 'SERVEO', 'logo' => 'www.serveo.es' , 'gestion_vales' => 0, 'comunicados' => 1, 'activa' => 1],
            ['nombre' => 'LOGIRAIL', 'logo' => 'www.logirail.es' , 'gestion_vales' => 0, 'comunicados' => 1, 'activa' => 1],
            ['nombre' => 'SABA', 'logo' => 'www.saba.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'FERROSER', 'logo' => 'www.ferroser.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'FGV', 'logo' => 'www.fgv.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ILUNION', 'logo' => 'www.ilunion.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ATHISA MEDIO AMBIENTE', 'logo' => 'www.athisa.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'INTERSERVE', 'logo' => 'www.interserve.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ACCIONA', 'logo' => 'www.acciona.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'BTREN', 'logo' => 'www.btren.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'EUROMACLEAN', 'logo' => 'www.euromaclean.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'VECTALIA RAIL S.A.', 'logo' => 'www.vectalia.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'CLECE LIMPIEZA', 'logo' => 'www.clecelimpieza.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'CLECE ACERCA', 'logo' => 'www.cleceacerca.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'IRYO', 'logo' => 'www.iryo.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ACTREN', 'logo' => 'www.actren.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1]
        ]);
    }
}
