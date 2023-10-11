<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificacion;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class CertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $certificacion = Certificacion::all();
        return view('admin.certificaciones.index')->with('certificacion',$certificacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificaciones.create');
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
            'imagen_certificacion' => 'required|image',
         ]);

          //Guardar la imagen
          $ruta_imagen = $request['imagen_certificacion']->store('certificacion','public');

          // Rezise a la imagen
          $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(350,350);
          $img->save();
         
         //Guardar en la BD
         DB::table('certificacions')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen_certificacion' => $ruta_imagen,
        ]);

        return redirect()->route('certificacion')->with('estado','El Certificado se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacion $certificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificacion $certificacion)
    {
        return view('admin.certificaciones.edit',compact('certificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacion $certificacion)
    {
         //Validacion
         $data = $request->validate([
            'nombre' => 'required',
            'imagen_certificacion' => 'image',
            'descripcion' => 'required',
         ]);

         $certificacion->nombre = $data['nombre'];
         $certificacion->descripcion = $data['descripcion'];

         //Si el usuario sube una imagen
         if (request('imagen_certificacion')) {
             //Guardar la imagen
            $ruta_imagen = $request['imagen_certificacion']->store('certificacion','public');

            // Rezise a la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
            $img->save();

            $certificacion->imagen_certificacion = $ruta_imagen;

         }

         $certificacion->save();

         //Mensaje al usuario
         return redirect()->route('certificacion')->with('estado','El Certificado se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacion $certificacion)
    {
           //Eliminar la publicacion
           $certificacion->delete();

           return redirect()->route('certificacion')->with('estado','El Certifiacdo se a borrado correctamente');
    }
}
