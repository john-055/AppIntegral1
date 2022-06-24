<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Admin => all
         * Striper => pantalla de stripper
         * usuario =>
         */
       $admin =  Role::create(['name'=> 'admin']);
       $stripper = Role::create(['name'=> 'stripper']);
       $usuario = Role::create(['name'=> 'usuario']);


       Permission::create(['name' => 'inicioAdmin'])->assignRole($admin);
    }
}
