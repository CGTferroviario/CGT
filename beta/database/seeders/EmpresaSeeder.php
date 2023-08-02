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
            ['nombre' => 'ADIF', 'descripcion' => 'El Administrador de Infraestructuras Ferroviarias' , 'logo' => 'www.adif.es' , 'gestion_vales' => 1, 'comunicados' => 1, 'activa' => 1], 
            ['nombre' => 'RENFE', 'descripcion' => 'Gestión de trenes y Viajeros' , 'logo' => 'www.renfe.es' , 'gestion_vales' => 1, 'comunicados' => 1, 'activa' => 1], 
            ['nombre' => 'SERVEO', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.serveo.es' , 'gestion_vales' => 0, 'comunicados' => 1, 'activa' => 1],
            ['nombre' => 'LOGIRAIL', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.logirail.es' , 'gestion_vales' => 0, 'comunicados' => 1, 'activa' => 1],
            ['nombre' => 'SABA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.saba.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'FERROSER', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.ferroser.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'FGV', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.fgv.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ILUNION', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.ilunion.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ATHISA MEDIO AMBIENTE', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.athisa.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'INTERSERVE', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.interserve.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ACCIONA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.acciona.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'BTREN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.btren.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'EUROMACLEAN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.euromaclean.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'VECTALIA RAIL S.A.', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.vectalia.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'CLECE LIMPIEZA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.clecelimpieza.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'CLECE ACERCA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.cleceacerca.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'IRYO', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.iryo.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1],
            ['nombre' => 'ACTREN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.actren.es' , 'gestion_vales' => 0, 'comunicados' => 0, 'activa' => 1]
        ]);
    }
}
