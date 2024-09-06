@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Employee Information</div>
    <div class="card-body">
        <h6 class="card-text">
            Created by: {{ $students->Uname }}
        </h6>
        <h6 class="card-text">
            At: {{ $students->created_at }}
        </h6>
        <br>
        <h5 class="card-title">Name: {{ $students->fname }} {{ $students->lname }}</h5>
        <p class="card-text">Date of Birth: {{ $students->bday }}</p>
        <p class="card-text">Position: {{ $students->position }}</p>
        <p class="card-text">Employee Id: {{ $students->employeeid }}</p>
        <p class="card-text">Hire Date: {{ $students->hiredate }}</p>
        <p class="card-text">Address: {{ $students->address }}</p>
        <p class="card-text">Mobile: {{ $students->mobile }}</p>
        <p class="card-text">Blood Type: {{ $students->bloodtype }}</p>
        <p class="card-text">TIN No: {{ $students->tinno }}</p>
        <p class="card-text">SSS No: {{ $students->sssno }}</p>
        <p class="card-text">Pag-Ibig No: {{ $students->pagibigno }}</p>
        <p class="card-text">Phil-Health No: {{ $students->philno }}</p>
        <p class="card-text">EC-Name: {{ $students->ecname }}</p>
        <p class="card-text">EC-Relationship: {{ $students->ecrelationship }}</p>
        <p class="card-text">EC-Address: {{ $students->ecaddress }}</p>
        <p class="card-text">EC-Mobile No: {{ $students->ecmobile }}</p>
        <p class="card-text">Validity: {{ $students->validity }}</p>

        <p class="card-text">1x1 Pic: 
            @if ($students->pic)
                <img src="{{ asset('storage/pics/' . basename($students->pic)) }}" alt="Student Picture" style="width: 100px; height: 100px;">
            @else
                No picture available.
            @endif
        </p>

        <p class="card-text">Signature: 
            @if ($students->sig)
                <img src="{{ asset('storage/signatures/' . basename($students->sig)) }}" alt="Student Signature" style="width: 100px; height: 100px;">
            @else
                No signature available.
            @endif
        </p>

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

        <a href="{{ route('student.id_card', $students->id) }}" class="btn btn-success">Create ID For MAHTI</a>
        <a href="{{ route('qplus.id_card', $students->id) }}" class="btn btn-success">Create ID For Q-PLUS</a>
        <a href="{{ route('radial.id_card', $students->id) }}" class="btn btn-success">Create ID For RADIAL</a>
    </div>
</div>
@endsection
