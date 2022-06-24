<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Roles y Permisos 
        $this->call(RoleSeed::class);
        //Usuarios Base 
        $this->call(UserSeed::class);
    }
}
