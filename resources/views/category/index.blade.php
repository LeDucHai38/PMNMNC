@extends('layouts.admin')

@section('title', 'Danh sach danh muc')

@section('content')
    <h2>Danh sach danh muc</h2>
    <a href="{{ route('category.create') }}">Them moi</a>

    <br><br>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Danh muc cha</th>
            <th>Mo ta</th>
            <th>Hinh anh</th>
            <th>Trang thai</th>
            <th>Hanh dong</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->parent ? $category->parent->name : '-' }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->image ?? '-' }}</td>
                <td>{{ $category->is_active ? 'Kich hoat' : 'Tam tat' }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post" style="display:inline;">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
