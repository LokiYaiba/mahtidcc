@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employee Information</div>
  <div class="card-body">
   
        <h6 class="card-text">
            Created by: {{ $coc->Uname }}
        </h6>
        <h6 class="card-text">
            At: {{ $coc->created_at }}
        </h6>
        <br>
        <h5 class="card-title">Name : {{ $coc->fname }} {{ $coc->mname }} {{ $coc->lname }}</h5>
        <p class="card-text">Rendered Hours/Week : {{ $coc->renhour }}</p>
        <p class="card-text">Render Type : {{ $coc->rentype }}</p>
        <p class="card-text">Position : {{ $coc->position }}</p>
        <p class="card-text">Course/Program : {{ $coc->course }}</p>
        <p class="card-text">Start Date : {{ $coc->sday }}</p>
        <p class="card-text">End Date : {{ $coc->eday }}</p>
        <p class="card-text">Given Date : {{ $coc->gday }}</p>
        <p class="card-text">Facilitator 1 : {{ $coc->p1name }}</p>
        <p class="card-text">Facilitator 1 position : {{ $coc->p1position }}</p>
        <p class="card-text">Facilitator 1 email : {{ $coc->p1email }}</p>
        <p class="card-text">Facilitator 2 : {{ $coc->p2name }}</p>
        <p class="card-text">Facilitator 2 position : {{ $coc->p2position }}</p>
        <p class="card-text">Facilitator 2 email : {{ $coc->p2email }}</p>

        <a href="{{ route('coc.generate', $coc->id) }}" class="btn btn-success">Generate Coc</a>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection