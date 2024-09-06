@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .center-img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Optional: Adjust this value to center vertically */
        }
    </style>
</head>
<body>
    <div class="center-img">
        <img src="{{ asset('images/index.gif') }}" alt="Logo">
    </div>
</body>
</html>

@endsection
