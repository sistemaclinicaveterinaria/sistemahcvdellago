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
        <h1>Q.E.P.D</h1>
    </header>

<a href="{{ url('rips/create') }}" class="btn btn-primary btn-lg" style="float: right">+Agregar Rip</a>
<br/>
<br/>
<br/>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha Difuncion</th>
            <th>Motivo</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
      @foreach($rips as $rip)  
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rip->Fecha_Difuncion}}</td>
            <td>{{$rip->Motivo}}</td>
            <td>
            <a href="{{ url('/rips/'.$rip->id.'/edit') }}">
              <button class="btn btn-primary" type="submit" >Editar</button>
              </a>  

        
            <form id="formt" method="post" action="{{ url('/rips/'.$rip->id) }}"  style="display:inline">

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