@extends('layout')
@section('content')
 
<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <h1>Upload Excel File</h1>

    <form action="{{ route('upload.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <!-- This section will display the uploaded Excel data -->
    @if(!empty($data) && is_array($data))
        @foreach($data as $sheet)
            <table>
                <thead>
                    <tr>
                        @foreach($sheet[0] as $header)
                            <th>{{ $header }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($sheet as $row)
                        <tr>
                            @foreach($row as $cell)
                                <td>{{ $cell }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        @endforeach
    @else
        <p>No data found.</p>
    @endif

</body>
</html>



 
@stop