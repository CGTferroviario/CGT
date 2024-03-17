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
        DB::table('empresas')->truncate(); //for cleaning earlier data to avoid duplicate entries

        $empresas = [
            ['nombre' => 'ADIF', 'descripcion' => 'El Administrador de Infraestructuras Ferroviarias' , 'logo' => 'www.adif.es' , 'vales' => true, 'comunicados' => true, 'activa' => true], 
            ['nombre' => 'RENFE', 'descripcion' => 'Gestión de trenes y Viajeros' , 'logo' => 'www.renfe.es' , 'vales' => true, 'comunicados' => true, 'activa' => true], 
            ['nombre' => 'CGT', 'descripcion' => 'La Confederación General del Trabajo' , 'logo' => 'www.cgtferroviario.es' , 'vales' => false, 'comunicados' => true, 'activa' => false],
            ['nombre' => 'CONJUNTO', 'descripcion' => 'Para los comunicados conjuntos' , 'logo' => 'conjunto' , 'vales' => false, 'comunicados' => true, 'activa' => false], 
            ['nombre' => 'ADIF-RENFE', 'descripcion' => 'Afectan a ambas empresas' , 'logo' => 'adif-renfe' , 'vales' => false, 'comunicados' => true, 'activa' => false], 
            ['nombre' => 'SECTOR', 'descripcion' => 'Para lo que afecta al Sector Federal Ferroviario' , 'logo' => 'sector' , 'vales' => false, 'comunicados' => true, 'activa' => false], 
            ['nombre' => 'GENERALES', 'descripcion' => 'Para asuntos generales' , 'logo' => 'generales' , 'vales' => false, 'comunicados' => true, 'activa' => false], 
            ['nombre' => 'SERVICIOS EXTERNOS', 'descripcion' => 'Servicios Externos' , 'logo' => 'servicios externos' , 'vales' => false, 'comunicados' => true, 'activa' => false], 
            ['nombre' => 'S.AUX-AT.CLI', 'descripcion' => 'Servicios Auxiliares // Atención al Cliente' , 'logo' => 'servicios auxiliares' , 'vales' => false, 'comunicados' => true, 'activa' => false],
            ['nombre' => 'SERVEO', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.serveo.es' , 'vales' => false, 'comunicados' => true, 'activa' => true],
            ['nombre' => 'LOGIRAIL', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.logirail.es' , 'vales' => false, 'comunicados' => true, 'activa' => true],
            ['nombre' => 'SABA', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.saba.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'FERROVIAL', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.ferroser.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
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
            ['nombre' => 'IRYO', 'descripcion' => 'La operadora de trenes Italiana' , 'logo' => 'www.iryo.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'ACTREN', 'descripcion' => 'Servicios Auxiliares' , 'logo' => 'www.actren.es' , 'vales' => false, 'comunicados' => false, 'activa' => true],
            ['nombre' => 'OUIGO', 'descripcion' => 'La operadora de trenes Francesa' , 'logo' => 'www.ouigo.es' , 'vales' => false, 'comunicados' => true, 'activa' => true],
        ];

        foreach ($empresas as $empresa) {
            DB::table('empresas')->insert([
                'nombre' => $empresa['nombre'],
                'slug' => \Illuminate\Support\Str::slug($empresa['nombre']),
                'descripcion' => $empresa['descripcion'],
                'logo' => $empresa['logo'],
                'vales' => $empresa['vales'],
                'comunicados' => $empresa['comunicados'],
                'activa' => $empresa['activa'],
            ]);
        }
    }
}