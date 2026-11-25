
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Yoo Yoo Shop</title>

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
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 32px;
        }

        /* Navigation */
        nav {
            background: linear-gradient(135deg, #ff69a6, #a855f7);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 25px;
            transition: 0.3s;
        }

        nav a:hover {
            background-color: white;
            color: #e84393;
        }

        /* Product Container */
        .product-container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .product-container > h1 {
            color: #e84393;
            font-size: 36px;
            margin-bottom: 35px;
        }

        /* Product Cards */
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product {
            background: white;
            padding: 30px 20px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(168,85,247,0.12);
            border-bottom: 5px solid #e84393;
            transition: 0.3s ease;
        }

        .product:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(232,67,147,0.2);
        }

        .product h2 {
            color: #a855f7;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .product p {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .product h3 {
            color: #e84393;
            font-size: 25px;
            background-color: #fff0f6;
            padding: 10px;
            border-radius: 10px;
        }

        /* Product Icons */
        .product-icon {
            font-size: 55px;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #a855f7, #ff69a6);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                gap: 5px;
            }

            nav a {
                font-size: 14px;
                padding: 8px 12px;
            }

            .product-list {
                grid-template-columns: 1fr;
            }

            .product-container > h1 {
                font-size: 28px;
            }

            .product {
                padding: 25px 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>◎ Yoo Yoo Shop</h1>
        <p>Spin, Play, Have Fun!</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('product') }}">Products</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <!-- Products -->
    <main class="product-container">

        <h1>Our Products</h1>

        <div class="product-list">

            <div class="product">
                <div class="product-icon">🪀</div>
                <h2>Classic Starter Yo-Yo</h2>
                <p>Perfect for beginners who want to learn exciting yo-yo tricks.</p>
                <h3>₱99.00</h3>
            </div>

            <div class="product">
                <div class="product-icon">🪀</div>
                <h2>Pro Spin Yo-Yo</h2>
                <p>Perfect for advanced tricks and experienced yo-yo players.</p>
                <h3>₱199.00</h3>
            </div>

            <div class="product">
                <div class="product-icon">🌈</div>
                <h2>Rainbow Light Yo-Yo</h2>
                <p>A colorful and fun yo-yo that makes playing more exciting.</p>
                <h3>₱149.00</h3>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer>
        <p>© 2026 Yoo Yoo Shop | Spin, Play, Have Fun!</p>
    </footer>

</body>
</html>
