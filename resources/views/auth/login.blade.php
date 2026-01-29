<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <h2>Login</h2>
    
    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif
    
    @if(isset($success))
        <p style="color: green;">{{ $success }}</p>
    @endif
    
    <form action="/auth/checklogin" method="post">
        @csrf
        <div>
            <label for="name">User Name:</slabel>
            <input type="text" name="name" placeholder="Enter User Name">
        </div>

        <br>

        <div>
            <label for="pass">Password:</label>
            <input type="password" name="pass" placeholder="Enter Password">
        </div>

        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>