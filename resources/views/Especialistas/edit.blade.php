@extends('layouts.app')

@section('content')


<form action="{{ url('/especialistas/'.$especialista->id_espe) }}" method="post" >
    {{ csrf_field()}}
    {{ method_field('PATCH')}}
    @include('especialistas.form',['Modo'=>'editar'])
</form>

@endsection