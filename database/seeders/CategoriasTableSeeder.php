<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['descripcion' => 'Madera']);
        DB::table('categorias')->insert(['descripcion' => 'Cuero']);
        DB::table('categorias')->insert(['descripcion' => 'Acrilico']);
    }
}
