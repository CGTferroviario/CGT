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
        Role::firstOrcreate(['name' => 'admin' ]);
        Role::firstOrcreate(['name' => 'editor' ]);
        Role::firstOrcreate(['name' => 'usuario' ]);
    }
}
