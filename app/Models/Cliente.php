<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'tipoDocumento',
        'numeroIdentificacion',
        'fechaNacimiento',
        'genero',
        'direccion',
    ];
}
