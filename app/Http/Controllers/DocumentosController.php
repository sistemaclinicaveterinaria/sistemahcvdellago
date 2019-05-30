<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DocumentosController extends Controller
{
    /**j
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['documentos']=Documentos::paginate(3);
        
        return view('documentos.index',$datos);
       
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create');
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
     //$datosDocumento=request()->all();
     $datosDocumento=request()->except('_token');
     if($request->hasFile('Archivo')){
        $datosDocumento['Archivo']=$request->file('Archivo')->store('uploads','public');
     }
     Documentos::insert($datosDocumento);
     return redirect('documentos')->with('Mensaje','Documento Agregado con exito');
     
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento= Documentos::findOrFail($id);
        return view('documentos.edit',compact('documento'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDocumento=request()->except(['_token','_method']);
        if($request->hasFile('Archivo')){
           
            $documento= Documentos::findOrFail($id);
            
            Storage::delete('public/'.$documento->Archivo);

            $datosDocumento['Archivo']=$request->file('Archivo')->store('uploads','public');
        
        }
        
        Documentos::where('id','=',$id)->update($datosDocumento);
        
        return redirect('documentos')->with('Mensaje','Documento editado con exito');
        //$documento= Documentos::findOrFail($id);
        //return view('documentos.edit',compact('documento'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento= Documentos::findOrFail($id);
            
        if(Storage::delete('public/'.$documento->Archivo)){
        Documentos::destroy($id);
        }

        return redirect('documentos')->with('Mensaje','Documento Eliminado');
        //
    }
}
