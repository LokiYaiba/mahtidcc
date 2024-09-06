<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: lightskyblue; }
        .container { width: 300px; margin: 100px auto; padding: 5%; background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5.3px);
            -webkit-backdrop-filter: blur(5.3px);
            border: 1px solid rgba(255, 255, 255, 0.3);}
        h2 {text-align: center; margin-top: 15%; margin-bottom: 5%;}
        h2 span.first-letter {color: red; font-weight: bold;}
        h2 span:not(.first-letter) {color: black;}
        form { display: flex; flex-direction: column; }
        input { margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        button { padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .center-img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* Optional: Adjust this value to center vertically */
            width: 100px;
            padding: 0px;
            margin-left: 30%;
        }
        .logo {max-height: 300px; max-width: 300px;}
    </style>
</head>
<body>
    <div class="container">
        <div class="center-img">
            <img src="{{ asset('images/index.gif') }}" alt="Logo" class="logo">
        </div>
        <h2>
            <span class="first-letter">M</span>ulti 
            <span class="first-letter">A</span>xis 
            <span class="first-letter">H</span>andlers 
            &amp; 
            <span class="first-letter">T</span>ech., 
            <span class="first-letter">I</span>nc.
        </h2>
        <h3>Log In</h3>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
