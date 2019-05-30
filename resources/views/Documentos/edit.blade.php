
@extends('layouts.app')
@section('content')
<form action="{{ url('/documentos/'.$documento->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('documentos.form',['Modo'=>'editar'])

</form>
@endsection
