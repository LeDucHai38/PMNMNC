@extends('layouts.admin')

@section('title', 'Cap nhat danh muc')

@section('content')
    <h2>Cap nhat danh muc</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        <div>
            <label for="name">Ten danh muc:</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}">
        </div>

        <br>

        <div>
            <label for="description">Mo ta:</label>
            <textarea name="description">{{ old('description', $category->description) }}</textarea>
        </div>

        <br>

        <div>
            <label for="image">Hinh anh:</label>
            <input type="text" name="image" value="{{ old('image', $category->image) }}">
        </div>

        <br>

        <div>
            <label for="parent_id">Danh muc cha:</label>
            <select name="parent_id">
                <option value="">Khong co</option>
                @foreach ($categories as $parent)
                    <option value="{{ $parent->id }}" @selected(old('parent_id', $category->parent_id) == $parent->id)>
                        {{ $parent->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                Kich hoat
            </label>
        </div>

        <br>

        <button type="submit">Cap nhat</button>
        <a href="{{ route('category.index') }}">Back</a>
    </form>
@endsection
