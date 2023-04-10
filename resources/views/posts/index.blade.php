@extends('base')

@section('content')

    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}}">{{ $post->title }}</a>
    @endforeach

@endsection
