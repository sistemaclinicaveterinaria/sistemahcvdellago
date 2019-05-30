@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="cont">

    <header>
    <div class="titulo">
        <h1>Especialistas</h1>
    </header>

<a href="{{ url('especialistas/create')}}"class="btn btn-primary btn-lg" style="float: right">+Nuevo Especialista</a>
<br/>
<br/>
<br/>
<table class="table">
    
    <thead>
        <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Especialidad</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($especialistas as $especialista)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $especialista->rut_espe }}</td>
            <td>{{ $especialista->nom_espe }} {{ $especialista->apePat_espe }} {{ $especialista->apeMat_espe }}</td>
            <td>{{ $especialista->email_espe }}</td>
            <td>{{ $especialista->especialidad }}</td>
            <td> 
                <a  href="{{ url('/especialistas/'.$especialista->id_espe.'/edit')}}">
               <button class="btn btn-primary" type="submit" >Editar</button>
                </a>

                <form  id="formt" method="post" action="{{ url('/especialistas/'.$especialista->id_espe)}}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar registro?');">Eliminar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $especialistas->links() }}

</div>
@endsection
