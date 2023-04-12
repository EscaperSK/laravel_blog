<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService
{
    public function store($data)
    {
        try {
            $tagIds = $data['tags'];

            $data['user_id'] = Auth::user()->id;

            unset($data['tags']);

            $post = Post::create($data);

            $post->tags()->attach($tagIds);


        } catch (\Exception $exception) {
            abort(300, $exception);
        }

    }

    public function update($data,$post)
    {
        try {
            $tagIds = $data['tags'];
            unset($data['tags']);
            $post->tags()->detach();
            $post->update($data);
            $post->tags()->attach($tagIds);

        } catch (\Exception $exception) {
            abort(300);
        }

    }
}


