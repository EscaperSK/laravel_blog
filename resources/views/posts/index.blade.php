@extends('base')

@section('content')

    <div class="wrapper">
        <div class="container">
            <br>
            @foreach($posts as $post)
                <div class="container__blog">
                    <a class="container__new-post" href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a>
                    @role('admin')
                    <a class="container__id-post" href="{{ route('posts.edit', $post->id) }}">Обновить</a>

                    <a class="container__delete" href="{{ route('posts.delete', $post->id) }}">Удалить</a>
                    @endrole
                </div>
            @endforeach
        </div>
    </div>

@endsection
