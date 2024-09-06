@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>ARCHIVED EMPLOYEES</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/students') }}" class="btn btn-primary btn-sm" title="Back to Active Students">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Active
        </a>
        <br/>
        <br/>
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
                            
                            <form method="POST" action="{{ url('/students/unarchive/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success btn-sm" title="Restore Employee" onclick="return confirm(&quot;Confirm restore?&quot;)">
                                    <i class="fa fa-undo" aria-hidden="true"></i> Restore</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection