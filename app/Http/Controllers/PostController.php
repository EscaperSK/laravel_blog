<?php

namespace App\Http\Controllers;


use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function create()
    {

        $categories = Category::all();
        return view('posts/create', compact('categories'));
    }

    public function show(Post $post)
    {
        return view('posts/show', compact('post'));
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        return redirect()->route('posts.index');

    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts/edit', compact('post', 'categories'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');

    }
}
