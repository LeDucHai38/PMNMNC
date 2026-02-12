@extends('layouts.admin')

@section('title', 'Danh sach danh muc')

@section('content')
    <h2>Danh sách danh mục</h2>
    <a href="{{ route('category.create') }}">Thêm mới</a>

    <br><br>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Danh mục cha</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->parent ? $category->parent->name : '-' }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->image ?? '-' }}</td>
                <td>{{ $category->is_active ? 'Kích hoạt' : 'Tạm tắt' }}</td>
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
