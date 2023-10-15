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
            ['nombre' => 'ADIF', 'descripcion' => 'El Administrador de Infraestructuras Ferroviarias' , 'logo' => 'www.adif.es' , 'vales' => true, 'comunicados' => true, 'activa' => true], 
            ['nombre' => 'RENFE', 'descripcion' => 'Gestión de trenes y Viajeros' , 'logo' => 'www.renfe.es' , 'vales' => true, 'comunicados' => true, 'activa' => true], 
            ['nombre' => 'SERVEO', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.serveo.es' , 'vales' => false, 'comunicados' => true, 'activa' => true],
            ['nombre' => 'LOGIRAIL', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.logirail.es' , 'vales' => false, 'comunicados' => true, 'activa' => true],
            ['nombre' => 'SABA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.saba.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'FERROSER', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.ferroser.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'FGV', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.fgv.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'ILUNION', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.ilunion.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'ATHISA MEDIO AMBIENTE', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.athisa.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'INTERSERVE', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.interserve.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'ACCIONA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.acciona.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'BTREN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.btren.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'EUROMACLEAN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.euromaclean.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'VECTALIA RAIL S.A.', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.vectalia.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'CLECE LIMPIEZA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.clecelimpieza.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'CLECE ACERCA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.cleceacerca.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'IRYO', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.iryo.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'ACTREN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.actren.es' , 'vales' => false, 'comunicados' => false, 'activa' => true]
        ]);
    }
}
