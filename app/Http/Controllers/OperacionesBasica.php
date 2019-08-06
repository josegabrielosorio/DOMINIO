<?php

namespace oof\Http\Controllers;

use Illuminate\Http\Request;
use oof\Producto;

class OperacionesBasica extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();
        return view('index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->nombre=$request->txtNombre;
        $producto->precio=$request->txtPrecio;
        $producto->descripcion=$request->txtDescripcion;
        $producto->color=$request->txtColor;
        $producto->talla=$request->txtTalla;
        $producto->tipo=$request->txtTipo;
        $producto->material=$request->txtMaterial;
        $producto->empresa=$request->txtEmpresa;
        $producto->tienda=$request->txtTienda;
        
        if($request->hasFile('fileRuta')){
            $file=$request->file('fileRuta');
            $nombre=time().'-'.$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$nombre);
            $producto->file=$nombre;
        }
        $producto->save();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        return view('editar')->with('producto', $producto);
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
        $producto=Producto::find($id);
        $producto->nombre=$request->txtNombre;
        $producto->precio=$request->txtPrecio;
        $producto->descripcion=$request->txtDescripcion;
        $producto->color=$request->txtColor;
        $producto->talla=$request->txtTalla;
        $producto->tipo=$request->txtTipo;
        $producto->material=$request->txtMaterial;
        $producto->empresa=$request->txtEmpresa;
        $producto->tienda=$request->txtTienda;
        $producto->save();

        $productos=Producto::all();
        return view('index', compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::find($id);
        $producto->delete();

        $productos=Producto::all();
        return redirect('operacionesBasicas');
    }
}
