<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Portafolio',
            'descripcion' => 'Portafolio',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Paginas informativas',
            'descripcion' => 'Paginas informativas',
        ]);
      
    }
}
