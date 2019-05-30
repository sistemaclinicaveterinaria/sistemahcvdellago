<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes']=Clientes::paginate(3);

        return view('clientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
        'rut_cliente' => 'required|string|max:100',
        'nom_cliente' => 'required|string|max:100',
        'apePat_cliente' => 'required|string|max:100',
        'apeMat_cliente' => 'required|string|max:100',
        'dire_cliente' => 'required|string|max:100',
        'ciudad_cliente' => 'required|string|max:100',
        'telefono_cliente' => 'required|string|max:100',
        'email_cliente' => 'required|email',
       ];

    $Mensaje=["required"=>'El :attribute es requerido'];
    $this->validate($request,$campos,$Mensaje);
//-------------------------------------------------------------

     //recolecta la informacion para que coincida con la table
     $datosCliente=request()->except('_token');

     Clientes::insert($datosCliente);

    return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {
        $cliente= Clientes::findOrFail($id_cliente);

        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        $campos=[
            'rut_cliente' => 'required|string|max:100',
        'nom_cliente' => 'required|string|max:100',
        'apePat_cliente' => 'required|string|max:100',
        'apeMat_cliente' => 'required|string|max:100',
        'dire_cliente' => 'required|string|max:100',
        'ciudad_cliente' => 'required|string|max:100',
        'telefono_cliente' => 'required|string|max:100',
        'email_cliente' => 'required|email',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosCliente=request()->except(['_token','_method']);

        Clientes::where('id_cliente','=',$id_cliente)->update($datosCliente);

        $cliente= Clientes::findOrFail($id_cliente);

       // return view('especialistas.edit',compact('especialista'));
       return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        Clientes::destroy($id_cliente);

        //retorna a la vista con la tabla ya actualizada y el dato borrado
        return redirect('clientes');
    }
}
