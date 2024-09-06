@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Update Employee</div>
  <div class="card-body">

    <form action="{{ url('students/' . $students->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $students->id }}" />

      <!-- Student Details Fields -->
      <div class="form-group">
        <label for="employeeid">Employee ID</label>
        <input type="text" name="employeeid" id="employeeid" value="{{ $students->employeeid }}" class="form-control">
      </div>



      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value="{{ $students->fname }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="mname">Middle Name</label>
        <input type="text" name="mname" id="mname" value="{{ $students->mname }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="{{ $students->lname }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="position">Position</label>
        <input type="text" name="position" id="position" value="{{ $students->position }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="bday">Date of Birth</label>
        <input type="text" name="bday" id="bday" value="{{ $students->bday }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="hiredate">Hire Date</label>
        <input type="text" name="hiredate" id="hiredate" value="{{ $students->hiredate }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="bloodtype">Blood Type</label>
        <input type="text" name="bloodtype" id="bloodtype" value="{{ $students->bloodtype }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="tinno">TIN No</label>
        <input type="text" name="tinno" id="tinno" value="{{ $students->tinno }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="sssno">SSS No</label>
        <input type="text" name="sssno" id="sssno" value="{{ $students->sssno }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="pagibigno">Pag-Ibig No</label>
        <input type="text" name="pagibigno" id="pagibigno" value="{{ $students->pagibigno }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="philno">Phil-Health No</label>
        <input type="text" name="philno" id="philno" value="{{ $students->philno }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="ecname">EC-Name</label>
        <input type="text" name="ecname" id="ecname" value="{{ $students->ecname }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="ecrelationship">EC-Relationship</label>
        <input type="text" name="ecrelationship" id="ecrelationship" value="{{ $students->ecrelationship }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="ecaddress">EC-Address</label>
        <input type="text" name="ecaddress" id="ecaddress" value="{{ $students->ecaddress }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="ecmobile">EC-Mobile</label>
        <input type="text" name="ecmobile" id="ecmobile" value="{{ $students->ecmobile }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="validity">Validity</label>
        <input type="text" name="validity" id="validity" value="{{ $students->validity }}" class="form-control">
      </div>




      <!-- Picture and Signature Fields -->
      <div class="form-group">
        <label for="pic">1x1 Picture</label><br>
        @if ($students->pic)
            <img src="{{ Storage::url($students->pic) }}" alt="Profile Picture" style="width: 100px; height: auto;">
            <br>
            <small>Upload a new picture to replace the existing one.</small>
        @else
            <small>No existing picture uploaded.</small>
        @endif
        <input type="file" name="pic" id="pic" class="form-control" accept=".png">
      </div>

      <div class="form-group">
        <label for="sig">Signature</label><br>
        @if ($students->sig)
            <img src="{{ Storage::url($students->sig) }}" alt="Signature" style="width: 100px; height: auto;">
            <br>
            <small>Upload a new signature to replace the existing one.</small>
        @else
            <small>No existing signature uploaded.</small>
        @endif
        <input type="file" name="sig" id="sig" class="form-control" accept=".png">
      </div>

    
        <p class="card-text">Documents:
            @forelse ($students->documents as $document)
                <div class="document">
                    <p>{{ $document->docname }}</p>
                    <a href="{{ asset('storage/documents/' . basename($document->docfile)) }}" target="_blank">View Document</a>
                </div>
            @empty
                No documents available.
            @endforelse
        </p>



      <!-- Document Fields -->
      <div id="document-fields">
        <!-- Initially show one document field -->
        <div class="input-group" id="document-group-0">
          <label for="docname0">Document Name 1</label><br>
          <input type="text" name="docname[]" id="docname0" class="form-control" required style="width: 250px;"><br>
          
          <label for="docfile0">Document File 1</label><br>
          <input type="file" name="docfile[]" id="docfile0" class="form-control" accept=".pdf, .jpg, .jpeg, .png" required style="width: 250px;"><br>
        </div>
      </div>

      <!-- Buttons for Adding/Removing Document Fields -->
      <br>
      <button type="button" id="add-document" class="btn btn-secondary">Add Another Document</button>
      <button type="button" id="remove-document" class="btn btn-danger">Remove Last Document</button>
      <br><br>
      
      <input type="submit" value="Save" class="btn btn-success">
      
    </form>

  </div>
</div>

<script>
    let documentCount = 1; // Start with 1 since we have one field initially

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
        newDocFileInput.accept = '.pdf, .jpg, .jpeg, .png';
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
        if (lastGroup && documentCount > 1) {
            documentFields.removeChild(lastGroup);
            documentCount--;
        }
    });
</script>

@endsection