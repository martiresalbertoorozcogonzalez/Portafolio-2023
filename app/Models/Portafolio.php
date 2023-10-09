<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Habilidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portafolio extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'nombre',
        'imagen_portafolio',
        'descripcion',
        'categoria_id',
        'habilidad_id',
    
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function habilidad()
    {
        return $this->belongsTo(Habilidad::class);
    }


}
