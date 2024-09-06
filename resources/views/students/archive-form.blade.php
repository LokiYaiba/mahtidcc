@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('students.archiveAccess') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="password">Enter Password to view archive:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (session('error'))
        <div class="alert alert-danger mt-2">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
