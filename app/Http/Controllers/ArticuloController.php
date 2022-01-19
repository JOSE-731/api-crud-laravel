<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostramos todos los datos
        $articulos = Articulo::all();

        return $articulos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Obtenemos los datos que se envian 
        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        //Guardamos los datos
        $articulo->save();
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Obtenemos el id del dato que se va actualizar
        $articulo = Articulo::findOrFail($request->id);

        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();

        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $articulo = Articulo::deleted($request->id);

       return $articulo;
    }
}
