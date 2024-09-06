@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>LIST OF SAVED EMPLOYEES</h2>
    </div>
    <div class="card-body">
        <!-- Button to create a new student -->
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        <!-- Button to view the list of archived students -->
        <a href="{{ route('students.archiveForm') }}" class="btn btn-warning btn-sm" title="View Archived Students">
            <i class="fa fa-archive" aria-hidden="true"></i> View Archived
        </a>

        <br/><br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>EmployeeId</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>1x1 Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->employeeid }}</td>
                        <td>{{ $item->fname }} {{ $item->lname }}</td>
                        <td>{{ $item->position }}</td>
                        
                        <td>
                        @if ($item->pic)
                            <img src="{{ asset('storage/pics/' . basename($item->pic)) }}" alt="Student Picture" style="width: 50px; height: 50px;">
                        @else
                            No picture available.
                        @endif


                        </td>

                        <td>
                            <a href="{{ route('students.show', $item->id) }}" title="View Employee">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
