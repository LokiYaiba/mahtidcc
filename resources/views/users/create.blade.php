@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee Input Page</div>
  <div class="card-body">
      
    <form action="{{ url('students') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <label>Employee ID</label></br>
        <input type="text" name="employeeid" id="employeeid" class="form-control" required></br>
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control" required></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control" required></br>
        <label>Position</label></br>
        <input type="text" name="position" id="position" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" pattern="\d{11}" maxlength="11" minlength="11" required title="Mobile number must be exactly 11 digits."></br>
        <label>Date of Birth</label></br>
        <input type="text" name="bday" id="bday" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Date of Birth must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>Hire Date</label></br>
        <input type="text" name="hiredate" id="hiredate" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Date of hire must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>Blood Type</label></br>
        <input type="text" name="bloodtype" id="bloodtype" class="form-control" required></br>
        <label>TIN No</label></br>
        <input type="text" name="tinno" id="tinno" class="form-control" required></br>
        <label>SSS No</label></br>
        <input type="text" name="sssno" id="sssno" class="form-control" required></br>
        <label>Pag-Ibig No</label></br>
        <input type="text" name="pagibigno" id="pagibigno" class="form-control" required></br>
        <label>Phil-Health No</label></br>
        <input type="text" name="philno" id="philno" class="form-control" required></br>
        <label>EC-Name</label></br>
        <input type="text" name="ecname" id="ecname" class="form-control" required></br>
        <label>EC-Relationship</label></br>
        <input type="text" name="ecrelationship" id="ecrelationship" class="form-control" required></br>
        <label>EC-Address</label></br>
        <input type="text" name="ecaddress" id="ecaddress" class="form-control" required></br>
        <label>EC-Mobile</label></br>
        <input type="text" name="ecmobile" id="ecmobile" class="form-control" pattern="\d{11}" maxlength="11" minlength="11" required title="Mobile number must be exactly 11 digits."></br>
        <label>Validity</label></br>
        <input type="text" name="validity" id="validity" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Validity be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>Upload Pic</label><br>
        <input type="file" name="pic" id="pic" class="form-control" accept=".png" required><br>
        <label>Upload Signature</label><br>
        <input type="file" name="sig" id="sig" class="form-control" accept=".png" required><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

 
@stop