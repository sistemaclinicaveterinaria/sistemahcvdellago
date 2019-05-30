@extends('layouts.app')

@section('content')
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2e6da4; color: white">

                        Add Event To Calendar

                    </div>

                    <div class="panel-body">

                    <h1> Task: Add Data </h1>
                    <form method="POST" action="{{action('EventController@store')}}">

                        {{ csrf_field() }}

                   <label for="">Enter Name of Event</label>
                   <input type="text" class="form-control" name="title" placeholder="Enter the Name"/><br/><br/> 
                   
                   <label for="">Enter Color</label>
                   <input type="color" class="form-control" name="color" placeholder="Enter the Color"/><br/><br/> 

                   <label for="">Enter Start Date of Event</label>
                   <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Enter Start Name"/><br/><br/> 

                   <label for="">Enter End Date of Event</label>
                   <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter End Name"/><br/><br/> 

                   <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data" />

                   <a href="/events" class="btn btn-danger"> BACK </a>

                   </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection