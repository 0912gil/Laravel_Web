<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores=Autor::all();
        return view('autores.index',['autores'=>$autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_autor'=>['required','regex:/^AUT[0-9]{3}$/'],
            'nombre_autor'=>'required',
            'nacionalidad'=>'required'
        ]);
        $Autor=new Autor();
        $Autor->codigo_autor=$request->codigo_autor;
        $Autor->nombre_autor=$request->nombre_autor;
        $Autor->nacionalidad=$request->nacionalidad;
        $Autor->save();
        return redirect()->route('autores.index')->with('status','Autor registrado existosamente');
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
        $Autor=Autor::find($id);
        return view('autores.edit',compact('Autor'));
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
        $request->validate([
            'codigo_Autor'=>['required','regex:/^AUTI[0-9]{3}$/'],
            'nombre_Autor'=>'required',
            'nacionalidad'=>'required'
        ]);
        $Autor=Autor::find($id);
        $Autor->codigo_autor=$request->codigo_autor;
        $Autor->nombre_autor=$request->nombre_autor;
        $Autor->nacionalidad=$request->nacionalidad;
        $Autor->save();
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Autor=Autor::destroy($id);
        return redirect()->route('autores.index');
    }
}
