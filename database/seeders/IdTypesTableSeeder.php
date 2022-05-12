<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('id_types')->insert(['name' => 'CC','descripcion' => 'Cedula de Ciudadania']);
        DB::table('id_types')->insert(['name' => 'TI','descripcion' => 'Tarjeta de Identidad']);
        DB::table('id_types')->insert(['name' => 'CE','descripcion' => 'Cedula de Extranjeria']);
        DB::table('id_types')->insert(['name' => 'PP','descripcion' => 'Pasaporte']);
    }
}
