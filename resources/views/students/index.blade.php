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
                            <a href="{{ route('students.edit', $item->id) }}" title="Edit Employee">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                            </a>

                            @if (!$item->is_archived)
                            <form method="POST" action="{{ route('students.archive', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning btn-sm" title="Archive Employee" onclick="return confirm('Confirm archive?')">
                                    <i class="fa fa-archive" aria-hidden="true"></i> Archive
                                </button>
                            </form>
                            @else
                            <form method="POST" action="{{ route('students.unarchive', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm" title="Restore Employee" onclick="return confirm('Confirm restore?')">
                                    <i class="fa fa-undo" aria-hidden="true"></i> Restore
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
