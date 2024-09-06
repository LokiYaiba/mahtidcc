@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Intern Information</div>
  <div class="card-body">
      
      <form action="{{ url('coc/' .$coc->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
       
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" value="{{ $coc->fname }}" class="form-control" required></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" value="{{ $coc->mname }}" class="form-control" required></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" value="{{ $coc->lname }}" class="form-control" required></br>

        <label>Rendered number </label></br>
        <input type="text" name="renhour" id="renhour" value="{{ $coc->renhour }}" class="form-control" required></br>
        <label>Render type</label></br>
        <input type="text" name="rentype" id="rentype" value="{{ $coc->rentype }}" class="form-control" required></br>
        
        <label>Position</label></br>
        <input type="text" name="position" id="position" value="{{ $coc->position }}" class="form-control" required></br>
        <label>Course/Program</label></br>
        <input type="text" name="course" id="course" value="{{ $coc->course }}" class="form-control" required></br>


        <label>Start Date</label></br>
        <input type="text" name="sday" id="sday" value="{{ $coc->sday }}" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Start date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>End Date</label></br>
        <input type="text" name="eday" id="eday" value="{{ $coc->eday }}" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="End date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>

        <label>Given Date</label></br>
        <input type="text" name="gday" id="gday" value="{{ $coc->gday }}" class="form-control" required 
        pattern="^(January|February|March|April|May|June|July|August|September|October|November|December) \d{2}, \d{4}$" 
        placeholder="January 01, 2012" 
        title="Given date must be in the format 'Month Day, Year' (e.g., January 01, 2012)."></br>
        
        <label>Person 1 Name</label></br>
        <input type="text" name="p1name" id="p1name" value="{{ $coc->p1name }}" class="form-control" required></br>
        <label>Person 1 position</label></br>
        <input type="text" name="p1position" id="p1position" value="{{ $coc->p1position }}" class="form-control" required></br>
        <label>Person 1 email</label></br>
        <input type="text" name="p1email" id="p1email" value="{{ $coc->p1email }}" class="form-control" required></br>
        
        <label>Person 2 Name</label></br>
        <input type="text" name="p2name" id="p2name" value="{{ $coc->p2name }}" class="form-control" required></br>
        <label>Person 2 position</label></br>
        <input type="text" name="p2position" id="p2position" value="{{ $coc->p2position }}" class="form-control" required></br>
        <label>Person 2 email</label></br>
        <input type="text" name="p2email" id="p2email" value="{{ $coc->p2email }}" class="form-control" required></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
        
    </form>
   
  </div>
</div>
 
@stop