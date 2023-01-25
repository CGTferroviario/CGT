<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'nombre'=>'Usuario Admin',
               'email'=>'admin@admin.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'nombre'=>'Usuario Editor',
               'email'=>'editor@editor.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'nombre'=>'Usuario',
               'email'=>'usuario@usuario.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
