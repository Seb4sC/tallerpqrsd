<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsd extends Model
{
    protected $fillable = [
        'idCliente',
        'correoElectronico',
        'esAnonima',
        'tipoPqrsd',
        'tipoPersona',
        'descripcion',
        'urlPdf',
        'estado',
    ];
}
