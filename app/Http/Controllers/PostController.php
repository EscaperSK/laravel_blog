<?php

namespace App\Http\Controllers;


use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        $tags = Tag::all();
        return view('posts/create', compact('categories', 'tags'));
    }

    public function show(Post $post)
    {
        return view('posts/show', compact('post'));
    }


    public function store(StoreRequest $request)
    {
        try {
            $data = $request->validated();

            $tagIds = $data['tags'];

            unset($data['tags']);

            $post = Post::create($data);

            $post->tags()->attach($tagIds);

            return redirect()->route('posts.index');

        } catch (\Exception $exception) {
            abort(300);
        }


    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts/edit', compact('post', 'categories', 'tags'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        try {
            $data = $request->validated();
            $tagIds = $data['tags'];
            unset($data['tags']);
            $post->tags()->detach();
            $post->update($data);
            $post->tags()->attach($tagIds);

            return redirect()->route('posts.index');
        } catch (\Exception $exception) {
            abort(300);
        }

    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');

    }
}
