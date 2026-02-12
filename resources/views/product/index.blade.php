@extends('layouts.admin')

@section('title', 'Product List')

@section('content')
    <a href="{{ route('add') }}">Add product</a>

    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ number_format($product['price']) }} VND</td>
                <td>{{ $product['stock'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
