<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Not Found</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 50px 70px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 420px;
            width: 90%;
        }

        .icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 96px;
            margin: 0;
            font-weight: 700;
        }

        h2 {
            margin: 10px 0;
            font-weight: 400;
        }

        p {
            opacity: 0.9;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            padding: 12px 28px;
            background: #fff;
            color: #764ba2;
            border-radius: 999px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        a:hover {
            background: #f1f1f1;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="icon">🚫</div>
        <h1>404</h1>
        <h2>Oops! Page not found</h2>
        <p>The page you’re trying to access doesn’t exist or has been moved.</p>
        <a href="/">Go back home</a>
    </div>

</body>
</html>
