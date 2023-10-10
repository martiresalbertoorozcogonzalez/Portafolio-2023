<?php

namespace App\Http\Controllers;

use App\Models\Certificacion;
use App\Models\Quiensoy;
use App\Models\Habilidad;
use App\Models\Portafolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        // Datdos desde Quiensoy
        $quiensoy = Quiensoy::all();
        
        // Datos desde Habilidad 
        $habilidades = Habilidad::all();

        // Datos desde Certificaciones
        $certificaciones = Certificacion::all();

        // Datos desde Portafolio
        $portafolio = Portafolio::all();

        return view('welcome.index')->with('quiensoy',$quiensoy)
                                    ->with('habilidades',$habilidades)
                                    ->with('certificaciones',$certificaciones)
                                    ->with('portafolio',$portafolio);
                                    
    }
}
