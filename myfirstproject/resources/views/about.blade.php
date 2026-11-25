
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>

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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-card {
            background-color: white;
            width: 80%;
            max-width: 550px;
            padding: 50px 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .about-card:hover {
            transform: translateY(-5px);
        }

        h1 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }

        h1:hover {
            color: #667eea;
            transition: 0.3s;
        }
    </style>
</head>

<body>

    <div class="about-card">
        <h1>About Me Page</h1>
        <p>Hi Carl James Maraon, A BSIT student from SMCC-CCIS</p>
    </div>

</body>
</html>
