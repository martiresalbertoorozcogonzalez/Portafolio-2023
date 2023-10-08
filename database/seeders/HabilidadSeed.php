<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HabilidadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'CSS',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'JS',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'TAILWINDCSS',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'VUEJS',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'BOOTSTRAP',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'LARAVEL',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);
    }
}
