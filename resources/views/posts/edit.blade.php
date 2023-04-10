@extends('base')

@section('content')

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">title</label>
            <input name="title" type="text" id="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="text">text</label>
            <textarea name="text" id="text" cols="30" rows="10">{{ $post->text }}</textarea>
        </div>
        <div>
            <label for="category_id" class="form-label">category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit">Обновить</button>
    </form>

@endsection
