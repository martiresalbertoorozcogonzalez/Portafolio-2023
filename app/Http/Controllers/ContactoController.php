<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    // Metodo para guardar mensajes recibidos del formulario a la base de datos

    public function store(Contacto $contacto, Request $request)
    {
        //Validacion

         $mensaje = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
         ]);
        
        Mail::to('azultenisymas@gmail.com')->send(new MensajeRecibido($mensaje)); 

        // return 'Mensajes enviado';

        //  dd($request->all());;

        Contacto::create([
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message,
        ]);

        //Mensaje al usuario

        return redirect()->route('welcome')->with('estado','La informacion se envio correctamente');
         
    }


    // Metodo para eliminar notificacion

    public function destroy(Contacto $contacto)
    {

        //Eliminar la publicacion

        $contacto->delete();

        return redirect()->route('mensajes')->with('estado','La informacion se a borrado correctamente');   
    }
}
