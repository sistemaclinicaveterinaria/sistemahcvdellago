
@extends('layouts.app')
@section('content')


<form action="{{ url('/recetarios/'.$recetario->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('recetarios.form',['Modo'=>'editar'])

</form>

@endsection