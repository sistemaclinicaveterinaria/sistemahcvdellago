
@extends('layouts.app')
@section('content')


<form action="{{ url('/rips/'.$rip->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('rips.form',['Modo'=>'editar'])

</form>

@endsection