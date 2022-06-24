<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'admin',
            'apePat' => 'admin',
            'apeMat' => 'admin',
            'username' => 'admin',
            'foto' => 'foto',
            'correo' => 'admin@gmail.com',
            'status' => 'true',
            'genero' => 'M',
            'fechaNa' => '1982-06-23',
            'email_verified_at' => now(),
            'password' => 'admin',
            'remember_token' => Str::random(10),


        ])->assignRole('admin');

        User::create([
            'nombre' => 'stipper',
            'apePat' => 'stiper',
            'apeMat' => 'stripper',
            'username' => 'stiper',
            'foto' => 'striper',
            'correo' => 'striper@gmail.com',
            'status' => 'true',
            'genero' => 'M',
            'fechaNa' => '1982-06-23',
            'email_verified_at' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10),


        ])->assignRole('stripper');

        User::create([
            'nombre' => 'usuario',
            'apePat' => 'usuario',
            'apeMat' => 'usuario',
            'username' => 'usuario',
            'foto' => 'usuario',
            'correo' => 'usuario@gmail.com',
            'status' => 'true',
            'genero' => 'M',
            'fechaNa' => '1982-06-23',
            'email_verified_at' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10),


        ])->assignRole('usuario');
    }
}
