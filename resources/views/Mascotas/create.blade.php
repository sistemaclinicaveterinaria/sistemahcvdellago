
@extends('layouts.app')
@section('content')

<form action="{{url('/Mascotas')}}" method="post" enctype="multipart/form-data">
{{csrf_field () }}

@include('Mascotas.form', ['Modo'=>'crear'])





</form>

@endsection
