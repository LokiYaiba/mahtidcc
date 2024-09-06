@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">COE Input Page</div>
  <div class="card-body">
      
    <form action="{{ url('coe') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control" required></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" class="form-control" required></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control" required></br>

        <label>Job type</label></br>
        <input type="text" name="jtype" id="jtype" class="form-control" required></br>
        
        <label>Position</label></br>
        <input type="text" name="position" id="position" class="form-control" required></br>

        <label>Department</label></br>
        <input type="text" name="dept" id="dept" class="form-control" required></br>
        
        <label>Start Date</label></br>
        <input type="text" name="sday" id="sday" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Start date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>End Date</label></br>
        <input type="text" name="eday" id="eday" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="End date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>Given Date</label></br>
        <input type="text" name="gday" id="gday" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Given date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

 
@stop