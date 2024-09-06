@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employee Information</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $users->name }}</h5>
        
        <p class="card-text">Position : {{ $users->position }}</p>
        <p class="card-text">User Id : {{ $users->employeeid }}</p>
        
        

  </div>
       
    </hr>
  
  </div>
</div>
@endsection