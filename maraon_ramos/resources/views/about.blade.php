
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Yoo Yoo Shop</title>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff5fa;
            color: #444;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #ff69a6, #a855f7);
            color: white;
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 30px;
            font-weight: bold;
        }

        /* Navigation */
        nav {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 25px;
            transition: 0.3s ease;
        }

        nav a:hover {
            background-color: white;
            color: #e84393;
            transform: translateY(-3px);
        }

        /* About Container */
        .about-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(168,85,247,0.12);
        }

        .about-container h1 {
            text-align: center;
            color: #e84393;
            font-size: 35px;
            margin-bottom: 20px;
        }

        .about-container > p {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin-bottom: 35px;
        }

        /* About Boxes */
        .about-box {
            background: linear-gradient(135deg, #fff0f6, #f3e8ff);
            padding: 25px;
            margin: 20px 0;
            border-left: 6px solid #e84393;
            border-radius: 12px;
            transition: 0.3s ease;
        }

        .about-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(232,67,147,0.15);
        }

        .about-box h2 {
            color: #a855f7;
            font-size: 24px;
            margin-bottom: 12px;
        }

        .about-box p,
        .about-box li {
            color: #555;
            font-size: 16px;
        }

        .about-box ul {
            padding-left: 25px;
        }

        .about-box li {
            margin: 8px 0;
        }

        .about-box li::marker {
            color: #e84393;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #a855f7, #ff69a6);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            font-size: 15px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            header h1 {
                font-size: 25px;
            }

            nav {
                justify-content: center;
                gap: 5px;
            }

            nav a {
                font-size: 14px;
                padding: 8px 12px;
            }

            .about-container {
                margin: 25px 15px;
                padding: 25px 18px;
            }

            .about-container h1 {
                font-size: 27px;
            }

            .about-container > p {
                font-size: 16px;
            }

            .about-box {
                padding: 20px;
            }

            .about-box h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>◎ Yoo Yoo Shop</h1>

    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('product') }}">Products</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main class="about-container">

    <h1>About Yoo Yoo Shop</h1>

    <p>
        Yoo Yoo Shop is a toy business that sells
        colorful and affordable yo-yos for everyone.
    </p>

    <section class="about-box">
        <h2>Our Vision</h2>
        <p>
            To become a trusted shop for yo-yo lovers.
        </p>
    </section>

    <section class="about-box">
        <h2>Our Mission</h2>
        <p>
            To provide quality, affordable and enjoyable
            yo-yos to our customers.
        </p>
    </section>

    <section class="about-box">
        <h2>Our Goals</h2>
        <ul>
            <li>Provide affordable products.</li>
            <li>Give excellent customer service.</li>
            <li>Offer different yo-yo designs.</li>
        </ul>
    </section>

</main>

<footer>
    <p>© 2026 Yoo Yoo Shop | Spin, Play, Have Fun!</p>
</footer>

</body>
</html>
