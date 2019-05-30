@extends('layouts.app')

@section('content')

        
    <!--<div class="cont">
    <body>
        <div class="contenedor">
            
            <div id="contenidopestanas">
                <div id="cpestana1">
                <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="250" height="250" align="left">
                <br>
                <br>
                </div>
        </div>-->

<form action="{{ url('/clientes/'.$cliente->id_cliente) }}" method="post" >
    {{ csrf_field()}}
    {{ method_field('PATCH')}}
    @include('clientes.form',['Modo'=>'editar'])
</form>


@endsection