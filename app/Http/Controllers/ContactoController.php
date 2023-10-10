<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
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

        $contacto->name = $mensaje['name'];
        $contacto->email = $mensaje['email'];
        $contacto->message = $mensaje['message'];

        // dd($contacto);

        $contacto->save();

        //Mensaje al usuario

        return redirect()->route('welcome')->with('estado','La informacion se envio correctamente');
         
    }


    public function destroy(Contacto $contacto)
    {
        //Eliminar la publicacion
        $contacto->delete();

        
        return redirect()->route('mensajes')->with('estado','La informacion se a borrado correctamente');   
    }
}
