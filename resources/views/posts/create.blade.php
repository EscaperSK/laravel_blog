@extends('base')

@section('content')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label for="title">title</label>
            <input name="title" type="text" id="title">
        </div>
        <div>
            <label for="text">text</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="category_id" class="form-label">category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit">Создать</button>
    </form>

@endsection
