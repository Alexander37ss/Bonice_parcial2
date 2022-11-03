<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    function consultar(){


        $productos = Producto::paginate(3);

        return view('producto.productos', compact('productos'));
    }
}