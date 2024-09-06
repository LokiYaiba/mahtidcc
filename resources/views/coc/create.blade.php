@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Certification of Completion Input Page</div>
  <div class="card-body">
      
      <form action="{{ url('coc') }}" method="post" enctype="multipart/form-data">
      @csrf
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control" required></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" class="form-control" required></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control" required></br>

        <label>Rendered Hours/Week</label></br>
        <input type="text" name="renhour" id="renhour" class="form-control" required></br>

        <label for="rentype">Render Type</label></br>
          <select name="rentype" id="rentype" class="form-control" required>
              <option value="hours">hours</option>
              <option value="weeks">weeks</option>
          </select></br>
        
        <label>Position</label></br>
        <input type="text" name="position" id="position" class="form-control" required></br>
        <label>Course/Program</label></br>
        <input type="text" name="course" id="course" class="form-control" required></br>

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

        <label>Facilitator 1 Name</label></br>
        <input type="text" name="p1name" id="p1name" class="form-control" required></br>
        <label>Position</label></br>
        <input type="text" name="p1position" id="p1position" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" name="p1email" id="p1email" class="form-control" required></br>

        <label>Facilitator 2 Name</label></br>
        <input type="text" name="p2name" id="p2name" class="form-control" required></br>
        <label>Position</label></br>
        <input type="text" name="p2position" id="p2position" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" name="p2email" id="p2email" class="form-control" required></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

 
@stop