
@extends('layouts.app')

@section('content')

<div class="container">
<div class="jumbotron">
    <h2>Calendario de Eventos</h2>
    <div class="row">
        <a href="/addeventURL" class="btn btn-success"> ADD Events </a>
        <a href="/displaydataURL" class="btn btn-primary"> Edit Events </a>
        <a href="/deleteeventURL" class="btn btn-danger"> Delete Events </a>
    </div>
<br>    
    <div class="row">
    <!---MENSAJES----->
        @if(count($errors) > 0)

        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success') }}</p>
        </div>
        @endif     

        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #2e6da4; color: white;">
                    Event Calendar [Full - Calendar]
                </div>

                <div class="panel-body">
                 {!! $calendar->calendar() !!} 
                 {!! $calendar->script()   !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop