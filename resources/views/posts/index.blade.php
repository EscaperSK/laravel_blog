@extends('base')

@section('content')
    <div class="wrapper">
        <a class="container__new-post" href="{{ route('posts.create') }}">Создать новый пост</a>
        <div class="container">

            <br>

            @foreach($posts as $post)
                <div class="container__blog">
                    <a class="container__new-post" href="{{route('posts.show', $post->id)}}}">{{ $post->title }}</a>

                    <a class="container__id-post" href="{{ route('posts.edit', $post->id) }}">Обновить</a>

                    <a class="container__delete" href="{{ route('posts.delete', $post->id) }}">Удалить</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
