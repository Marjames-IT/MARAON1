
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Yoo Yoo Shop</title>

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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        /* Home Section */
        .home-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 60px 20px;
        }

        .home-content {
            max-width: 800px;
            background: white;
            padding: 55px 40px;
            border-radius: 25px;
            box-shadow: 0 5px 25px rgba(168,85,247,0.12);
        }

        .home-content h1 {
            color: #e84393;
            font-size: 42px;
            margin-bottom: 15px;
        }

        .home-content h2 {
            color: #a855f7;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .home-content p {
            color: #666;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* Decorative Yo-Yo */
        .yoyo-icon {
            font-size: 80px;
            margin-bottom: 15px;
        }

        /* Shop Button */
        .shop-button {
            display: inline-block;
            background: linear-gradient(135deg, #ff69a6, #a855f7);
            color: white;
            text-decoration: none;
            padding: 14px 35px;
            border-radius: 30px;
            font-size: 17px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .shop-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(232,67,147,0.3);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #a855f7, #ff69a6);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
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

            .home-content {
                padding: 35px 20px;
            }

            .home-content h1 {
                font-size: 30px;
            }

            .home-content h2 {
                font-size: 22px;
            }

            .home-content p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>◎ Yoo Yoo Shop</h1>

        <nav>
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('product') }}">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <!-- Home Content -->
    <main class="home-container">

        <section class="home-content">

            <div class="yoyo-icon">🪀</div>

            <h1>Welcome to Yoo Yoo Shop!</h1>

            <h2>Spin, Play, Have Fun!</h2>

            <p>
                Welcome to Yoo Yoo Shop, your favorite shop
                for colorful and affordable yo-yos.
                Discover exciting yo-yo designs and enjoy
                endless fun with every spin!
            </p>

            <a href="{{ route('product') }}" class="shop-button">
                Explore Our Products
            </a>

        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>© 2026 Yoo Yoo Shop | Spin, Play, Have Fun!</p>
    </footer>

</body>
</html>
