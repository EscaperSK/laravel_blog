<?php

namespace App\Http\Controllers;


use App\Http\Requests\Post\StoreRequest;
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
}
