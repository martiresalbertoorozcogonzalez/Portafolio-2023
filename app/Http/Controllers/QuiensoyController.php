<?php

namespace App\Http\Controllers;

use App\Models\Quiensoy;
use App\Models\Categoria;
use App\Models\Habilidad;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuiensoyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quiensoy.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quiensoy.create');
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
            'imagen_quiensoy' => 'required|image',
         ]);

         //Guardar la imagen
         $ruta_imagen = $request['imagen_quiensoy']->store('quiensoy','public');

         // Rezise a la imagen
         $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(350,350);
         $img->save();
 
         
         //Guardar en la BD
         DB::table('quiensoys')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen_quiensoy' => $ruta_imagen,
        ]);

        return redirect()->route('Quiensoy')->with('estado','La informacion se envio correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function show(Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiensoy $quiensoy)
    {
        //
    }
}
