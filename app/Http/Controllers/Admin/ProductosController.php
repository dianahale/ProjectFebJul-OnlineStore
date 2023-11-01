<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.productos.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
            'nombre'=>'required|unique:productos|max:255',
            'codigo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
            'precio'=>'required',
            'idcategoria'=>'required',
        ]);

        Producto::create([
            'nombre'=>$request->get('nombre'),
            'codigo'=>$request->get('codigo'),
            'descripcion'=>$request->get('descripcion'),
            'imagen'=>$request->get('imagen'),
            'precio'=>$request->get('precio'),
            'idcategoria'=>$request->get('idcategoria')
        ]);

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto = Producto::find($id);
        //return $producto;
        return view('admin.productos.edit', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nombre'=>'required|max:255',
            'codigo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required',
            'precio'=>'required',
            'idcategoria'=>'required',
        ]);

        if ($request->hasFile('img')) {
            $image=$request->file('img');
            $name=time().','.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);
            $request['imagen']=$name;
        }
        $producto=Producto::find($id)->last();

        if (isset($request['imagen'])) {
            $producto->imagen=$request['imagen'];
        }
        $producto->nombre=$request->nombre;
        $producto->codigo=$request->codigo;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->idcategoria=$request->idcategoria;

        if ($producto->update()) {
             return redirect()->route('productos.index')->with('mensaje','Producto actualizado con exito');
         } 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();
        return redirect()->route('productos.index');
    }
}
