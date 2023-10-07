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
            'slug' => Str::slug('HTML'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'CSS',
            'slug' => Str::slug('CSS'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'JS',
            'slug' => Str::slug('JS'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'TAILWINDCSS',
            'slug' => Str::slug('TAILWINDCSS'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'VUEJS',
            'slug' => Str::slug('VUEJS'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'BOOTSTRAP',
            'slug' => Str::slug('BOOTSTRAP'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'LARAVEL',
            'slug' => Str::slug('LARAVEL'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'slug' => Str::slug('HTML'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);

        DB::table('habilidads')->insert([
            'nombre' => 'HTML',
            'slug' => Str::slug('HTML'),
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, tempora?',
            'imagen_habilidad' => 'Imagen-pendiente.jpg'
        ]);
    }
}
