@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employee Information</div>
  <div class="card-body">
        <h6 class="card-text">
            Created by: {{ $coe->Uname }}
        </h6>
        <h6 class="card-text">
            At: {{ $coe->created_at }}
        </h6>
        <br>
        <h5 class="card-title">Name : {{ $coe->fname }} {{ $coe->mname }} {{ $coe->lname }}</h5>
        <p class="card-text">Position : {{ $coe->position }}</p>
        <p class="card-text">Department : {{ $coe->dept }}</p>
        <p class="card-text">Start Date : {{ $coe->sday }}</p>
        <p class="card-text">End Date : {{ $coe->eday }}</p>
        <p class="card-text">Given Date : {{ $coe->gday }}</p>

        <a href="{{ route('coe.generate', $coe->id) }}" class="btn btn-success">Generate Coe</a>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection