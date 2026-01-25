<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signup-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        button:hover {
            opacity: 0.9;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .info-message {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
            border: 1px solid #bee5eb;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }
        .error-message.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Đăng Ký</h1>
        
        @if(session('success'))
            <div class="error-message show" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="error-message show">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('auth.check-signup') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" required placeholder="Nhập tên đăng nhập" value="{{ old('username') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Nhập email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required placeholder="Nhập mật khẩu">
            </div>

            <div class="form-group">
                <label for="password_confirm">Xác nhận mật khẩu</label>
                <input type="password" id="password_confirm" name="password_confirm" required placeholder="Xác nhận mật khẩu">
            </div>

            <button type="submit">Đăng Ký</button>
        </form>

        <div class="login-link">
            Đã có tài khoản? <a href="{{ route('auth.login') }}">Đăng nhập tại đây</a>
        </div>
    </div>
</body>
</html>
