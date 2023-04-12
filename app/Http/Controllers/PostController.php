<?php

namespace App\Http\Controllers;


use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends CustomBaseController
{
    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/create', compact('categories', 'tags'));
    }

    public function show(Post $post)
    {
        return view('posts/show', compact('post'));
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $categories = Category::all();
            $tags = Tag::all();
            return view('posts/edit', compact('post', 'categories', 'tags'));
        }
        return redirect()->back();
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->service->update($data, $post);

        return redirect()->route('posts.index');
    }

    public function delete(Post $post)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $post->delete();
            return redirect()->route('posts.index');
        }
        return redirect()->back();
    }
}
