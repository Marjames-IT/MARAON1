
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Yoo Yoo Shop</title>

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
            font-size: 28px;
        }

        /* Navigation */
        nav {
            background: linear-gradient(135deg, #ff69a6, #a855f7);
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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

        /* Main Container */
        .contact-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(168,85,247,0.12);
        }

        .contact-container h1 {
            text-align: center;
            color: #e84393;
            font-size: 35px;
            margin-bottom: 25px;
        }

        /* Contact Information */
        .contact-info {
            background: linear-gradient(135deg, #fff0f6, #f3e8ff);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            border-left: 6px solid #e84393;
        }

        .contact-info p {
            font-size: 17px;
            margin: 12px 0;
            color: #555;
        }

        .contact-info strong {
            color: #a855f7;
        }

        /* Message Form */
        .contact-form {
            background-color: #fffafd;
            padding: 25px;
            border-radius: 15px;
            border: 1px solid #f5d6eb;
        }

        .contact-form h2 {
            color: #a855f7;
            margin-bottom: 20px;
            font-size: 25px;
        }

        .contact-form label {
            display: block;
            margin: 15px 0 7px;
            font-weight: bold;
            color: #555;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 13px;
            border: 2px solid #f1c5df;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
            font-family: Arial, sans-serif;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #a855f7;
            box-shadow: 0 0 5px rgba(168,85,247,0.2);
        }

        .contact-form textarea {
            height: 130px;
            resize: vertical;
        }

        /* Submit Button */
        .contact-form button {
            background: linear-gradient(135deg, #ff69a6, #a855f7);
            color: white;
            border: none;
            padding: 13px 30px;
            margin-top: 20px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-form button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 12px rgba(232,67,147,0.3);
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

            .contact-container {
                margin: 25px 15px;
                padding: 25px 18px;
            }

            .contact-container h1 {
                font-size: 27px;
            }

            .contact-info,
            .contact-form {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('product') }}">Products</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <!-- Contact Container -->
    <main class="contact-container">

        <h1>Contact Yoo Yoo Shop</h1>

        <!-- Contact Information -->
        <section class="contact-info">
            <p><strong>Address:</strong> Nasipit, Agusan Del Norte, Philippines</p>
            <p><strong>Phone:</strong> 0905-945-8503</p>
            <p><strong>Email:</strong> yooyooshop@gmail.com</p>
            <p><strong>Facebook:</strong> Yoo Yoo Shop</p>
        </section>

        <!-- Contact Form -->
        <section class="contact-form">

            <h2>Send Us a Message</h2>

            <form>
                <label>Customer Name</label>
                <input type="text" placeholder="Enter your name" required>

                <label>Email Address</label>
                <input type="email" placeholder="Enter your email" required>

                <label>Message</label>
                <textarea placeholder="Write your message" required></textarea>

                <button type="button">Submit</button>
            </form>

        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>© 2026 Yoo Yoo Shop | Spin, Play, Have Fun!</p>
    </footer>

</body>
</html>
