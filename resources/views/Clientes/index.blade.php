@extends('layouts.app')

@section('content')

<div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Clientes</h1>
    </header>


<a href="{{ url('clientes/create')}}"class="btn btn-primary btn-lg" style="float: right">+Nuevo Cliente</a>
<br/>
<br/>
<br/>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $cliente->rut_cliente }}</td>
            <td>{{ $cliente->nom_cliente }} {{ $cliente->apePat_cliente }} {{ $cliente->apeMat_cliente }}</td>
            <td>{{ $cliente->dire_cliente }}</td>
            <td>{{ $cliente->ciudad_cliente }}</td>
            <td>{{ $cliente->telefono_cliente }}</td>
            <td>{{ $cliente->email_cliente }}</td>
            <td> 
                <a  href="{{ url('/clientes/'.$cliente->id_cliente.'/edit')}}">
               <button class="btn btn-primary" type="submit" >Editar</button>
                </a>

                <form id="formt" method="post" action="{{ url('/clientes/'.$cliente->id_cliente)}}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar Registro?');">Eliminar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $clientes->links() }}






</div>
@endsection
