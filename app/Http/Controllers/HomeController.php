<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contacto;
use App\Models\Portafolio;
use App\Models\Quiensoy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $quiensoy =  Quiensoy::all();
        $mensajes =  Contacto::all();
        $portafolio = Portafolio::all();

        // dd($mensajes);
        
        return view('home')->with('mensajes',$mensajes)
                           ->with('portafolio',$portafolio)
                           ->with('quiensoy',$quiensoy);
    }
}
