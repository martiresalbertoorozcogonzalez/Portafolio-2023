<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Habilidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $habilidad = Habilidad::all();
        return view('admin.habilidades.index')->with('habilidad',$habilidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.habilidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen_habilidad' => 'required|image',
         ]);

          //Guardar la imagen
          $ruta_imagen = $request['imagen_habilidad']->store('habilidad','public');

          // Rezise a la imagen
          $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(350,350);
          $img->save();
         
         //Guardar en la BD
         DB::table('habilidads')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen_habilidad' => $ruta_imagen,
        ]);

        return redirect()->route('habilidad')->with('estado','La Habilidad se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidad $habilidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidad $habilidad)
    {
        return view('admin.habilidades.edit',compact('habilidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidad $habilidad)
    {
         //Validacion
         $data = $request->validate([
            'nombre' => 'required',
            'imagen_habilidad' => 'image',
            'descripcion' => 'required',
         ]);

         $habilidad->nombre = $data['nombre'];
         $habilidad->descripcion = $data['descripcion'];

         //Si el usuario sube una imagen
         if (request('imagen_habilidad')) {
             //Guardar la imagen
            $ruta_imagen = $request['imagen_habilidad']->store('habilidad','public');

            // Rezise a la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
            $img->save();

            $habilidad->imagen_habilidad = $ruta_imagen;

         }

         $habilidad->save();

         //Mensaje al usuario
         return redirect()->route('habilidad')->with('estado','La Habilidad se Actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidad $habilidad)
    {
         //Eliminar la publicacion
         $habilidad->delete();

         return redirect()->route('habilidad')->with('estado','La Habilidad se a borro con exito');
    }
}
