<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

    <h2>Product List</h2>

    <a href="{{ route('add') }}">Add product</a>

    <br><br>

    <table cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Áo phông</td>
                <td>300,000 VND</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Quần</td>
                <td>280,000 VND</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Áo khoác</td>
                <td>550,000 VND</td>
            </tr>
        </tbody>
    </table>

</body>
</html>