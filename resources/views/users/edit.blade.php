@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit User Information</div>
  <div class="card-body">
      
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Employee ID</label></br>
        <input type="text" name="employeeid" id="employeeid" value="{{$users->employeeid}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>Position</label></br>
        <input type="text" name="position" id="position" value="{{$users->position}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        
    </form>
   
  </div>
</div>
 
@stop