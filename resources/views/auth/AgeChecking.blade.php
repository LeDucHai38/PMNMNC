<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Tuổi</title>
</head>
<body>
    <h1>Xác Nhận Tuổi</h1>
    <form action="{{ route('age.store') }}" method="POST">
        @csrf
        <label for="age">Nhập tuổi:</label>
        <input type="number" name="age" id="age" min="1" max="150" required>
        <button type="submit">Xác Nhận</button>
    </form>
</body>
</html>