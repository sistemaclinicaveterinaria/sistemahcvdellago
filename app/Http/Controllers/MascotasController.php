<?php

namespace App\Http\Controllers;

use App\Mascotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['mascotas']=Mascotas::paginate(5);
        return view('Mascotas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Mascotas.create');
       
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
        //$datosMascotas = request()->all();
        $datosMascotas = request()->except('_token');

        if($request->hasFile('Foto')){

            $datosMascotas['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Mascotas::insert($datosMascotas);

        //return response()->json($datosMascotas);
        return redirect('Mascotas')->with('Mensaje', 'Mascota Registrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function show(Mascotas $mascotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mascotas= Mascotas::findOrFail($id);

        return view('Mascotas.edit', compact('mascotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMascotas = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $mascotas= Mascotas::findOrFail($id);

            Storage::delete('public/'.$mascotas->Foto);

            $datosMascotas['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Mascotas::where('id', '=', $id)->update($datosMascotas);

        //$mascotas= Mascotas::findOrFail($id);
        //return view('Mascotas.edit', compact('mascotas'));

        return redirect('Mascotas')->with('Mensaje','Información actualizada');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mascotas= Mascotas::findOrFail($id);

       if( Storage::delete('public/'.$mascotas->Foto)){
           
        Mascotas::destroy($id);

       };


        return redirect('Mascotas')->with('Mensaje','Mascota Eliminada');;
    }
}
