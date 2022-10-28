<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarPedido;

class controladorVistas extends Controller
{
    public function validarFormulario(validarPedido $req){
        return redirect('formulario')->with('Confirmacion','Envio correcto');
    }
    public function viewFormulario(){
        return view('formulario');
    }

    public function viewTabla(){
        return view('tabla');
    }
}
