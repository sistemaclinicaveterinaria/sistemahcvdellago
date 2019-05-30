<?php

namespace App\Http\Controllers;

use App\Especialistas;
use Illuminate\Http\Request;

class EspecialistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['especialistas']=Especialistas::paginate(3);

        return view('especialistas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especialistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//-------------validaciones campos vacios-----------------------
       $campos=[
           'rut_espe' => 'required|string|max:100',
           'nom_espe' => 'required|string|max:100',
           'apePat_espe' => 'required|string|max:100',
           'apeMat_espe' => 'required|string|max:100',
           'email_espe' => 'required|email',
           'especialidad' => 'required|string|max:100',
       ];
       $Mensaje=["required"=>'El :attributo es requerido'];
       $this->validate($request,$campos,$Mensaje);
//-------------------------------------------------------------

        //recolecta la informacion para que coincida con la table
        $datosEspecialista=request()->except('_token');

        Especialistas::insert($datosEspecialista);

        //imprimir informacion
       // return response()->json($datosEspecialista);
       return redirect('especialistas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function show(Especialistas $especialistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function edit($id_espe)
    {
        $especialista= Especialistas::findOrFail($id_espe);

        return view('especialistas.edit',compact('especialista'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_espe)
    {

        $campos=[
            'rut_espe' => 'required|string|max:100',
            'nom_espe' => 'required|string|max:100',
            'apePat_espe' => 'required|string|max:100',
            'apeMat_espe' => 'required|string|max:100',
            'email_espe' => 'required|email',
            'especialidad' => 'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosEspecialista=request()->except(['_token','_method']);

        Especialistas::where('id_espe','=',$id_espe)->update($datosEspecialista);

        $especialista= Especialistas::findOrFail($id_espe);

       // return view('especialistas.edit',compact('especialista'));
       return redirect('especialistas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_espe)
    {
        Especialistas::destroy($id_espe);

        //retorna a la vista con la tabla ya actualizada y el dato borrado
        return redirect('especialistas');
    }
}
