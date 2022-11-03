<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    function registrar(){
        return view('usuario.registrar');
    }

    function guardar(Request $datos){
        $usuario = Usuario::create($datos->post());

        return redirect('/usuarios');
    }
}