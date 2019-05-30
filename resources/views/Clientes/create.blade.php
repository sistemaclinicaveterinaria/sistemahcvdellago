@extends('layouts.app')

@section('content')
<div class="container">
<!--Validacion campos vacios ------------------->
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>

        @endforeach
    </ul>
</div>
@endif
<!------------------------------------------------->

<!--<div class="cont">
  <table class="ctablas">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nuevo Cliente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td height="300">
      <div class="main-container">  
      <img src="https://image.flaticon.com/icons/png/512/44/44948.png" alt="" margin width="250" height="250" align="left">
    </div>
      </td>
    </td>
    <td>
    <br/>
multipart es para enviar fotos-->

<form action="{{url('/clientes')}}" class="form-horizontal" method="post" >
{{csrf_field()}}

@include('clientes.form',['Modo'=>'crear'])

</form>
</div>
</td>
    </tr>
  </tbody>
</table>

</div>

@endsection