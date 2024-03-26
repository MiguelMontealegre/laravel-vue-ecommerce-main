<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LikesProductController extends Controller
{
    //MIddleware para Proteger de usurios que no se han registrado o iniciado sesion
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function update(Request $request, Product $vacante)
    {
        // Almacena los likes de un usuario a una receta
        return auth()->user()->userLike()->toggle($vacante);   //Este toggle sirve para: Si ya esta y lo presionan lo va a quitar , y si no esta y se presiona se va a agregar
    }
}
