@extends('layout')
@section('content')
 
@if (session('flash_message'))
    <div class="alert alert-warning">
        {{ session('flash_message') }}
    </div>
@endif

<div class="card">
  <div class="card-header">Employee Input Page</div>
  <div class="card-body">
      
    <form action="{{ url('students') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <label>Employee ID</label></br>
        <input type="text" name="employeeid" id="employeeid" class="form-control" required style="width: 250px;"></br>
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control" required style="width: 250px;"></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" class="form-control" required style="width: 250px;"></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control" required style="width: 250px;"></br>
        <label>Position</label></br>
        <input type="text" name="position" id="position" class="form-control" required style="width: 250px;"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required style="width: 450px;"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" pattern="\d{11}" maxlength="11" minlength="11" required title="Mobile number must be exactly 11 digits." style="width: 250px;"></br>
        
        <label>Date of Birth</label></br>
        <input type="date" name="bday" id="bday" class="form-control" required 
            placeholder="YYYY-MM-DD" 
                  title="Date of hire must be in the format 'Year-Month-Day' (e.g., 2024-08-23)."  style="width: 250px;"></br>

        <label for="hiredate">Hire Date</label></br>
        <input type="date" name="hiredate" id="hiredate" class="form-control" required 
              placeholder="YYYY-MM-DD" 
              title="Date of hire must be in the format 'Year-Month-Day' (e.g., 2024-08-23)."  style="width: 250px;"></br>


        <label for="bloodtype">Blood Type</label></br>
        <input type="text" name="bloodtype" id="bloodtype" class="form-control" required style="width: 250px;" style="width: 250px;"></br>

        <label>TIN No</label></br>
        <input type="text" name="tinno" id="tinno" class="form-control" required style="width: 250px;"></br>
        <label>SSS No</label></br>
        <input type="text" name="sssno" id="sssno" class="form-control" required style="width: 250px;"></br>
        <label>Pag-Ibig No</label></br>
        <input type="text" name="pagibigno" id="pagibigno" class="form-control" required style="width: 250px;"></br>
        <label>Phil-Health No</label></br>
        <input type="text" name="philno" id="philno" class="form-control" required style="width: 250px;"></br>
        <label>EC-Name</label></br>
        <input type="text" name="ecname" id="ecname" class="form-control" required style="width: 250px;"></br>
        <label>EC-Relationship</label></br>
        <input type="text" name="ecrelationship" id="ecrelationship" class="form-control" required style="width: 250px;"></br>
        <label>EC-Address</label></br>
        <input type="text" name="ecaddress" id="ecaddress" class="form-control" required style="width: 450px;"></br>
        <label>EC-Mobile</label></br>
        <input type="text" name="ecmobile" id="ecmobile" class="form-control" pattern="\d{11}" maxlength="11" minlength="11" required title="Mobile number must be exactly 11 digits." style="width: 250px;"></br>
        
        <label>Validity</label></br>
        <input type="date" name="validity" id="validity" class="form-control" required 
        placeholder="YYYY-MM-DD" 
              title="Date of hire must be in the format 'Year-Month-Day' (e.g., 2024-08-23)." style="width: 250px;"></br>
        <label>Upload Pic</label><br>
        <input type="file" name="pic" id="pic" class="form-control" accept=".png, .jpg, .jpeg" required style="width: 250px;"><br>
        <label>Upload Signature</label><br>
        <input type="file" name="sig" id="sig" class="form-control" accept=".png" required style="width: 250px;"><br>
        
        
        <h4>201 Files</h4>
        
        <div id="document-fields">
            <div class="input-group" id="document-group-0">
                <label for="docname0">Document Name 1</label><br>
                <input type="text" name="docname[]" id="docname0" class="form-control" required style="width: 250px;"><br>
                
                <label for="docfile0">Document File 1</label><br>
                <input type="file" name="docfile[]" id="docfile0" class="form-control" accept=".pdf" required style="width: 250px;"><br>
            </div>
        </div>

        <br><button type="button" id="add-document" class="btn btn-secondary">Add Another Document</button>
        <button type="button" id="remove-document" class="btn btn-danger">Remove Last Document</button><br><br>

        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
<script>
    let documentCount = 1;

    // Add new document fields
    document.getElementById('add-document').addEventListener('click', function() {
        const documentFields = document.getElementById('document-fields');

        // Create a new document group div
        const newGroup = document.createElement('div');
        newGroup.classList.add('input-group');
        newGroup.setAttribute('id', `document-group-${documentCount}`);

        // Create new document name input
        const newDocNameLabel = document.createElement('label');
        newDocNameLabel.setAttribute('for', `docname${documentCount}`);
        newDocNameLabel.innerText = `Document Name ${documentCount + 1}`;
        newGroup.appendChild(newDocNameLabel);

        const newDocNameInput = document.createElement('input');
        newDocNameInput.setAttribute('type', 'text');
        newDocNameInput.setAttribute('name', 'docname[]');
        newDocNameInput.setAttribute('id', `docname${documentCount}`);
        newDocNameInput.classList.add('form-control');
        newDocNameInput.required = true;
        newDocNameInput.style.width = '250px';
        newGroup.appendChild(newDocNameInput);

        newGroup.appendChild(document.createElement('br'));

        // Create new document file input
        const newDocFileLabel = document.createElement('label');
        newDocFileLabel.setAttribute('for', `docfile${documentCount}`);
        newDocFileLabel.innerText = `Document File ${documentCount + 1}`;
        newGroup.appendChild(newDocFileLabel);

        const newDocFileInput = document.createElement('input');
        newDocFileInput.setAttribute('type', 'file');
        newDocFileInput.setAttribute('name', 'docfile[]');
        newDocFileInput.setAttribute('id', `docfile${documentCount}`);
        newDocFileInput.classList.add('form-control');
        newDocFileInput.accept = '.pdf';
        newDocFileInput.required = true;
        newDocFileInput.style.width = '250px';
        newGroup.appendChild(newDocFileInput);

        newGroup.appendChild(document.createElement('br'));

        // Append the new group to the document fields
        documentFields.appendChild(newGroup);

        documentCount++;
    });

    // Remove the last document fields
    document.getElementById('remove-document').addEventListener('click', function() {
        const documentFields = document.getElementById('document-fields');
        const lastGroup = documentFields.lastElementChild;

        // Remove the last document group if it exists
        if (lastGroup) {
            documentFields.removeChild(lastGroup);
            documentCount--;
        }
    });
</script>

@stop