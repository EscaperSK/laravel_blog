@extends('base')

@section('content')

    {{ $post->title }}<br>
    {{ $post->text }}<br>
    {{ $post->category_id }} : {{ $post->category->title  }}<br>
    By: {{ $post->user->name }} | {{ $post->created_at }}<br><br>
    @foreach($post->tags as $tag)

        {{ $tag->title }}<br>

    @endforeach

@endsection
