<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Certificacion;
use App\Models\Habilidad;
use Illuminate\Http\Request;

class PortafolioAdminController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $habilidades = Habilidad::all();
        $certificaciones = Certificacion::all();

        return view('admin.portafolio.admin')->with('categorias',$categorias)
                                             ->with('habilidades',$habilidades)
                                             ->with('certificaciones',$certificaciones);
    }
}
