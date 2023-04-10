@extends('base')

@section('content')

    <a href="{{ route('posts.create') }}">Создать новый пост</a>
    <br>

    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}}">{{ $post->title }}</a> - <a
            href="{{ route('posts.edit', $post->id) }}">Обновить</a>
        <a href="{{ route('posts.delete', $post->id) }}">Удалить</a>
        <br>
    @endforeach

@endsection
