<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrcreate(['name' => 'crear-comunicado' ]);
        Permission::firstOrcreate(['name' => 'editar-comunicado' ]);
        Permission::firstOrcreate(['name' => 'eliminar-comunicado' ]);
        Permission::firstOrcreate(['name' => 'crear-empresa' ]);
        Permission::firstOrcreate(['name' => 'editar-empresa' ]);
        Permission::firstOrcreate(['name' => 'eliminar-empresa' ]);
        Permission::firstOrcreate(['name' => 'crear-etiqueta' ]);
        Permission::firstOrcreate(['name' => 'editar-etiqueta' ]);
        Permission::firstOrcreate(['name' => 'eliminar-etiqueta' ]);
        Permission::firstOrcreate(['name' => 'crear-categoria' ]);
        Permission::firstOrcreate(['name' => 'editar-categoria' ]);
        Permission::firstOrcreate(['name' => 'eliminar-categoria' ]);
        Permission::firstOrcreate(['name' => 'crear-noticia' ]);
        Permission::firstOrcreate(['name' => 'editar-noticia' ]);
        Permission::firstOrcreate(['name' => 'eliminar-noticia' ]);
    }
}
