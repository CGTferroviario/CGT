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
        Permission::firstOrcreate(['name' => 'crear-comunicado', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'editar-comunicado', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'eliminar-comunicado', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'crear-empresa', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'editar-empresa', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'eliminar-empresa', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'crear-etiqueta', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'editar-etiqueta', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'eliminar-etiqueta', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'crear-categoria', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'editar-categoria', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'eliminar-categoria', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'crear-noticia', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'editar-noticia', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
        Permission::firstOrcreate(['name' => 'eliminar-noticia', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ]);
    }
}
