@extends('layouts.admin')

@section('title', 'Them moi danh muc')

@section('content')
    <h2>Them moi danh muc</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Ten danh muc:</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <br>

        <div>
            <label for="description">Mo ta:</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label for="image">Hinh anh:</label>
            <input type="text" name="image" value="{{ old('image') }}">
        </div>

        <br>

        <div>
            <label for="parent_id">Danh muc cha:</label>
            <select name="parent_id">
                <option value="">Khong co</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('parent_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                Kich hoat
            </label>
        </div>

        <br>

        <button type="submit">Luu</button>
        <a href="{{ route('category.index') }}">Back</a>
    </form>
@endsection
