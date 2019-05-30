@extends('layouts.app')
@section('content')
<form action="{{ url('/documentos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('documentos.form',['Modo'=>'crear'])

</form>

@endsection

