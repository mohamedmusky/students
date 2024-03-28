@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        Students page
    </div>
    <div class="crad-body">

    <div class="card-body">
        <h5 class="card-title">Name:{{$students->name}}</h5>
        <p class="card-title">Age:{{$students->age}}</p>
        <p class="card-title">Status:{{$students->status}}</p>

        </div>
</hr>
    </div>
    </div>
</div>

@endsection