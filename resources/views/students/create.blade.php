@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        studentpage
    </div>
    <div class="card-body">
        <form action="{{url('students')}}" method="post">
            {!! csrf_field() !!}
            <label > Name</label></br>
            <input type ="text" name="name" id="name" class="form-control"></br>
        
            <label > Age</label></br>
            <input type ="text" name="age" id="age" class="form-control"></br>    
        
            <label > status</label></br>
            <input type ="text" name="status" id="status" class="form-control"></br>
      
            <input type="submit" value="save" class="btn btn-success"> </br>
        
        </form>
    </div>
</div>

@stop