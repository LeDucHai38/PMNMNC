<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

    <h2>{{ $title }}</h2>

    <a href="{{ route('add') }}">Add product</a>

    <br><br>

   <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product['id'] }}</td>
        <td>{{ $product['name'] }}</td>
        <td>{{ number_format($product['price']) }} VND</td>
    </tr>
    @endforeach
   </table>

</body>
</html>