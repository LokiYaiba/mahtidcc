@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>LIST OF SAVED COC</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/coc/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Request New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($coc as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fname }} {{ $item->mname }} {{ $item->lname }}</td>
                                        <td>{{ $item->position }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/coc/' . $item->id) }}" title="View coc">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                        </td>
                                    </tr>

                                    
                                @endforeach

                                
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>

@endsection