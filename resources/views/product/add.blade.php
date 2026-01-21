<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form >
        <div>
            <label for="name">Product Name:</label>
            <input type="text" placeholder="Enter Product Name">
        </div>

        <br>

        <div>
            <label for="price">Product Price:</label>
            <input type="text" placeholder="Enter Product Price">
        </div>

        <br>

        <button type="submit">Add Product</button>
        <a href="{{ route('product.index') }}">Back</a>
    </form>
</body>
</html>