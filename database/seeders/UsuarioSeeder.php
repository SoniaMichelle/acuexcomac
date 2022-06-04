<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* CREACION DE USUARIO ADMINISTRADOR */
        $useradmin= new User();
            $useradmin->email = 'admin@gmail.com';
            $useradmin->password = Hash::make('admin123');

            $useradmin->save();
    }
}
