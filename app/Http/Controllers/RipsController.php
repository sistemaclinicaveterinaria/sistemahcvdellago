<?php

namespace App\Http\Controllers;

use App\Rips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class RipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['rips']=Rips::paginate(2);
        
        return view('rips.index',$datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rips.create');
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
        $datosRip=request()->except('_token');
   
     Rips::insert($datosRip);
     return redirect('rips')->with('Mensaje','Paciente Rip Agregado con exito');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function show(Rips $rips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rip= Rips::findOrFail($id);
        return view('rips.edit',compact('rip'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $datosRip=request()->except(['_token','_method']);
      
        Rips::where('id','=',$id)->update($datosRip);
        
        return redirect('rips')->with('Mensaje','Paciente rip editado con exito');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rips::destroy($id);
        return redirect('rips')->with('Mensaje','Paciente Rip Eliminado');
        //
        //
    }
}
