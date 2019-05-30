
@extends('layouts.app')
@section('content')
<form action="{{ url('/recetarios')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('recetarios.form',['Modo'=>'crear'])

</form>

@endsection
