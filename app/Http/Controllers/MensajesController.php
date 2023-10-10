<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function index() 
    {
       $mensajes = Contacto::all();
       
    //    dd($mensajes);
       
       return view('admin.mensajes.index')->with('mensajes',$mensajes);
    }
}
