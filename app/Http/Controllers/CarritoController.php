<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
    public function __construct(){
        //preguntamos si existe el arreglo carrito, si no existe lo crearemos
        if (!\Session::has('carrito'))\Session::put('carrito', array());
    }
    public function show(){
        //return\Session::get('carrito');
        $carrito = \Session::get('carrito');
        return view ('tiendaOnLine.secciones.carrito', compact('carrito'));
    }

    //Agregar a carrito
    public function add(Producto $producto){
        //Recibir la variable de sesion carrito
        $carrito = \Session::get('carrito');
        //Agregamos un nuevo dato al arreglo, en este caso cantidad = 1, valor que tomará por primera vez
        $producto->cantidad = 1;
        //El id del producto será el indice del arreglo carrito
        $carrito[$producto->idproducto]=$producto;
        \Session::put('carrito', $carrito);
        //return \Session::get('carrito');
        return view ('tiendaOnLine.secciones.carrito', compact('carrito'));
    }

    //Eliminar producto de carrito
    public function delete(Producto $producto){
        $carrito = \Session::get('carrito');
        unset($carrito[$producto->idproducto]);
        \Session::put('carrito', $carrito);
        return redirect()->route('carrito');
    }

    //Actualizar carrito
    public function update(Producto $producto, $cantidad){
        $carrito = \Session::get('carrito');
        $carrito[$producto->idproducto]->cantidad = $cantidad;
        \Session::put('carrito', $carrito);
        return redirect()->route('carrito');
    }


    public function total(){
        $carrito = \Session::get('carrito');
        $total = 0;
        foreach($carrito as $item) {
            $total += $item->precio * $item->cantidad;
        }
        return $total;
    }

    public function ordenDetalles(){
        //Validamos si hay algo en el carrito
        if (count(\Session::get('carrito')) <- 0) 
            return redirect()->route('inicio');
           $carrito = \Session::get('carrito');
           $total = $this->total();

           return view('tiendaOnLine.orden-detalles', compact('carrito', 'total'));
        
    }

}
