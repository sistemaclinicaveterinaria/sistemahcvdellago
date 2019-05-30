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
        <h1>Recetas</h1>
    </header>

<a href="{{ url('recetarios/create') }}" class="btn btn-primary btn-lg" style="float: right">+Agregar Receta</a>
<br/>
<br/>
<br/>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Control_Fecha</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
      @foreach($recetarios as $recetario)  
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$recetario->Fecha}}</td>
            <td>{{$recetario->Control_Fecha}}</td>
            <td>{{$recetario->Descripcion}}</td>
            <td>
            <a href="{{ url('/recetarios/'.$recetario->id.'/edit') }}">
              <button class="btn btn-primary" type="submit" >Editar</button>
              </a>  

        
            <form id="formt" method="post" action="{{ url('/recetarios/'.$recetario->id) }}"  style="display:inline">

             {{csrf_field() }}   
             {{ method_field('DELETE') }}
             
             <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection