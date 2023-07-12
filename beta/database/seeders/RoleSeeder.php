<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrcreate(['name' => 'admin', 'descripcion' => 'El que corta el bakalao' ]);
        Role::firstOrcreate(['name' => 'superAdmin', 'descripcion' => 'El puto amo del lugar' ]);
        Role::firstOrcreate(['name' => 'editor', 'descripcion' => 'El que edita lo que haya que editar' ]);
        Role::firstOrcreate(['name' => 'delegado', 'descripcion' => 'El que delega lo delegable' ]);
        Role::firstOrcreate(['name' => 'coordinador', 'descripcion' => 'El coordinador siempre llama dos veces' ]);
        Role::firstOrcreate(['name' => 'seccion', 'descripcion' => 'Las secciones seccionables' ]);
        Role::firstOrcreate(['name' => 'usuario', 'descripcion' => 'El culpable de todo' ]);
    }
}
