@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        Edit page
    </div>
    <div class="card-body">
        <form action="{{url('students/'.$students->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            
            <input type ="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
           
            <label > Name</label></br>
            <input type ="text" name="name" id="name"  value="{{$students->name}}" class="form-control"></br>    
        

            <label > Age</label></br>
            <input type ="text" name="age" id="age"  value="{{$students->age}}" class="form-control"></br>    
        

            <label > status</label></br>
            <input type ="text" name="status" id="status"  value="{{$students->status}}" class="form-control"></br>    
    
      
            <input type="submit" value="update" class="btn btn-success"> </br>
        
        </form>
    </div>
</div>

@stop