@extends('base')

@section('content')
    @if($current_user)
        {{ $current_user->name }}
    @endif


    <div class="wrapper">
        @if($current_user)
            <a class="container__new-post" href="{{ route('posts.create') }}">Создать новый пост</a> |
            {{ $current_user->name }} |
            <a href="{{ route('logout') }}">выйти</a>
        @else
            <a href="{{ route('register.create') }}">зарегестрироватсья</a> |
            <a href="{{ route('show_login') }}">войти</a>
        @endif



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
