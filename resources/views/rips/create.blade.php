
@extends('layouts.app')
@section('content')
<form action="{{ url('/rips')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('rips.form',['Modo'=>'crear'])

</form>

@endsection
