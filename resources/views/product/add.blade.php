@extends('layouts.admin')

@section('title', 'Create')

@section('content')
    <h2>Add New Product</h2>
    <form>
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
@endsection
