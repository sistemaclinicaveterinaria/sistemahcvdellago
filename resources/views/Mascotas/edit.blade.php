
@extends('layouts.app')
@section('content')

<form action="{{url('/Mascotas/'.$mascotas->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH' )}}

@include('Mascotas.form', ['Modo'=>'editar'])

</form>

@endsection

