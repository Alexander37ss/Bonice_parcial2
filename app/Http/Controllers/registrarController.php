<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class registrarController extends Controller
{
    function registrar(){
        return view('registrar');
    }
    function consultar(){
        return view('consultar');
    }
}
