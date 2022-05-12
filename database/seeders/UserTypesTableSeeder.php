<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(['name' => 'SuperAdmin','descripcion' => 'Tiene todos los permisos']);
        DB::table('user_types')->insert(['name' => 'Admin','descripcion' => 'tiene algunos permisos de administracion']);
        DB::table('user_types')->insert(['name' => 'Emprendedor','descripcion' => 'no tiene permisos, tiene acceso a precios especiales']);
        DB::table('user_types')->insert(['name' => 'Cliente','descripcion' => 'no tiene permisos']);
    }
}
