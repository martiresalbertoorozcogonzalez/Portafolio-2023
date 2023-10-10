<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Habilidad;
use App\Models\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;



class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio = Portafolio::all();
        return view('admin.portafolio.index')->with('portafolio',$portafolio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $habilidads = Habilidad::all();
        
        return view('admin.portafolio.create',compact('categorias','habilidads'));
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
            'categoria_id' => 'required|exists:App\Models\Categoria,id',
            'habilidad_id' => 'required|exists:App\Models\Habilidad,id',
            'descripcion' => 'required',
            'imagen_portafolio' => 'required|image',
         ]);

          //Guardar la imagen
          $ruta_imagen = $request['imagen_portafolio']->store('portafolio','public');

          // Rezise a la imagen
          $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(1203,503);
          $img->save();
         
         //Guardar en la BD
         DB::table('portafolios')->insert([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'imagen_portafolio' => $ruta_imagen,
            'categoria_id' => $data['categoria_id'],
            'habilidad_id' => $data['habilidad_id'],
         ]);

        return redirect()->route('portafolio')->with('estado','La informacion se envio correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {

          //Consultar categorias
        $categorias = Categoria::all();
        $habilidads = Habilidad::all();
        return view('admin.portafolio.edit',compact('portafolio','categorias','habilidads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {
          
            //Validacion
            $data = $request->validate([
                'nombre' => 'required',
                'categoria_id' => 'required|exists:App\Models\Categoria,id',
                'habilidad_id' => 'required|exists:App\Models\Habilidad,id',
                'descripcion' => 'required',
                'imagen_portafolio' => 'required|image',
           
             ]);

            //  dd($portafolio->all());

             $portafolio->nombre = $data['nombre'];
             $portafolio->descripcion = $data['descripcion'];
             $portafolio->categoria_id = $data['categoria_id'];
             $portafolio->habilidad_id = $data['habilidad_id'];

             //Si el usuario sube una imagen

             if (request('imagen_portafolio')) {
                 //Guardar la imagen
                $ruta_imagen = $request['imagen_portafolio']->store('portafolio','public');

                // Rezise a la imagen
                $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(800,600);
                $img->save();

                $portafolio->imagen_portafolio = $ruta_imagen;

             }

             $portafolio->save();

             //Mensaje al usuario

             return redirect()->route('portafolio')->with('estado','La informacion se envio correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
         //Eliminar la publicacion
         $portafolio->delete();

         return redirect()->route('portafolio')->with('estado','La informacion se a borrado correctamente');
    }
}
