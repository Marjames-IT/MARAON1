
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Laravel Project</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            text-align: center;
        }

        nav {
            background-color: #222;
            padding: 20px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #667eea;
        }

        .container {
            background-color: white;
            width: 80%;
            max-width: 600px;
            margin: 120px auto;
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 30px;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        @media (max-width: 600px) {
            nav a {
                margin: 0 8px;
                font-size: 15px;
            }

            h1 {
                font-size: 23px;
            }

            .container {
                margin: 100px auto;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="container">
        <h1>Welcome to my first Laravel Project</h1>
        <p>Developed by: Carl James Maraon</p>
    </div>

</body>
</html>
