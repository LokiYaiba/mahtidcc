<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHTI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            height: 100px;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
            background-color: #f8f9fa;
        }

        .navbar-brand h2 {
            margin: 0;
            text-align: center;
        }

        .container-fluid {
            display: flex;
            height: 100%;
            margin-top: 100px; /* Same height as the navbar */
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            top: 100px; /* Below the navbar */
            bottom: 0;
            overflow-y: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: darkblue;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: lightblue;
            color: darkblue;
        }

        .content-wrapper {
            margin-left: 200px; /* Same as the sidebar width */
            padding: 20px;
            overflow-y: auto;
            height: calc(100vh - 100px); /* Height minus the navbar */
            width: calc(100% - 200px);
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            .content-wrapper {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            padding: 0 16px;
        }

        #Logo {
            width: 150px;
            height: 150px;
        }
        #index {
            width: 150px;
            height: 150px;
        }
        .navbar-mahti {
            padding-top: 1.5%;
        }
        span.first-letter {color: red; font-weight: bold;}
        span:not(.first-letter) {color: black;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('index') }}">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" id="Logo">
        </a>
        <div class="navbar-mahti">
            <h3><strong>
                <span class="first-letter">M</span>ULTI 
                <span class="first-letter">A</span>XIS
                <span class="first-letter">H</span>ANDLERS 
                &amp; 
                <span class="first-letter">T</span>ECH., 
                <span class="first-letter">I</span>NC.
            </strong></h3>
            <h6><strong>SYSTEM DESIGN & INDUSTRIAL AUTOMATION</strong></h6>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="sidebar">
            <a class="{{ request()->is('index') ? 'active' : '' }}" href="{{ url('/index') }}">Home</a>
            <a class="{{ request()->is('students') ? 'active' : '' }}" href="{{ url('/students') }}">Employee</a>
            <a class="{{ request()->is('coe') ? 'active' : '' }}" href="{{ url('/coe') }}">Create COE</a>
            <a class="{{ request()->is('coc') ? 'active' : '' }}" href="{{ url('/coc') }}">Create COC</a>
            <div class="logout">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block">Logout</button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</body>
</html>
