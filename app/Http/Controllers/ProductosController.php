<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();
        //return $productos;
        return view('tiendaOnLine.index', compact('productos'));
    }

    public function show($idproducto){
        $producto = Producto::where('idproducto',$idproducto)->first();
        //return $producto;
        return view('tiendaOnLine.detalles', compact('producto'));
    }

}