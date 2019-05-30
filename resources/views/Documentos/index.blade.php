@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Documentos</h1>
    </header>

<a href="{{ url('documentos/create') }} " class="btn btn-primary btn-lg" style="float: right">+Adjuntar Documento</a>
<br/>
<br/>
<br/>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
      @foreach($documentos as $documento)  
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$documento->Fecha}}</td>
            <td>{{$documento->Nombre}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$documento->Archivo}}" alt="" width="100">
            </td>


            <td>

             <a href="{{ url('/documentos/'.$documento->id.'/edit') }}">
             <button class="btn btn-primary" type="submit" >Editar</button> 
            </a>

            <form id="formt" method="post" action="{{ url('/documentos/'.$documento->id) }}" style="display:inline">
             {{csrf_field() }}   
             {{method_field('DELETE')}}
             <button  class="btn btn-danger"  type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection