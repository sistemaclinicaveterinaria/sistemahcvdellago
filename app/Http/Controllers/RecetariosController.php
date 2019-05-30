<?php

namespace App\Http\Controllers;

use App\Recetarios;
use Illuminate\Http\Request;

class RecetariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['recetarios']=Recetarios::paginate(3);
        
        return view('Recetarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Recetarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosRecetario=request()->except('_token');
   
     Recetarios::insert($datosRecetario);
     return redirect('recetarios')->with('Mensaje','Recetario Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function show(Recetarios $recetarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recetario= Recetarios::findOrFail($id);
        return view('Recetarios.edit',compact('recetario'));
    }

    /**S
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosRecetario=request()->except(['_token','_method']);
      
        Recetarios::where('id','=',$id)->update($datosRecetario);
        
        return redirect('recetarios')->with('Mensaje','Recetario editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recetarios::destroy($id);
        return redirect('recetarios')->with('Mensaje','Recetario Eliminado');
    }
}
