<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pqrsd;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function show(){
        return view('formulario');
    }

    public function create(Request $request){
        $pqrsd = [
            'idCliente' => 'nullable',
            'correoElectronico' => 'required',
            'esAnonima' => 'nullable',
            'tipoPqrsd' => 'nullable',
            'tipoPersona' => 'nullable',
            'descripcion' => 'nullable',
            'urlPdf' => 'nullable',
            'estado' => 'nullable',
        ];

        $cliente = [
            'primerNombre' => 'nullable',
            'segundoNombre' => 'nullable',
            'primerApellido' => 'nullable',
            'segundoApellido' => 'nullable',
            'tipoDocumento' => 'nullable',
            'numeroIdentificacion' => 'nullable',
            'fechaNacimiento' => 'nullable',
            'genero' => 'nullable',
            'direccion' => 'nullable',
        ];

        if($request->esAnonima === 'TRUE'){
            $validarPqrsd = $request->validate($pqrsd);

            $file = $request->file("urlPdf");
            $nombreArchivo = "pdf_".time().".".$file->guessExtension();
            $request->file('urlPdf')->storeAs('public/pdf', $nombreArchivo);
            $validarPqrsd['urlPdf'] = $nombreArchivo;
            $validarPqrsd['estado'] = "enviado";

            Pqrsd::create($validarPqrsd);
        } else {
            $validarPqrsd = $request->validate($pqrsd);
            $validarCliente = $request->validate($cliente);

            $file = $request->file("urlPdf");
            $nombreArchivo = "pdf_".time().".".$file->guessExtension();
            $request->file('urlPdf')->storeAs('public/pdf', $nombreArchivo);
            $validarPqrsd['urlPdf'] = $nombreArchivo;
            $validarPqrsd['estado'] = "enviado";

            $cliente = Cliente::create($validarCliente);

            $validarPqrsd['idCliente'] = $cliente->id;
            Pqrsd::create($validarPqrsd);
        }
    }
}
