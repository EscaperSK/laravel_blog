<?php

namespace App\Http\Controllers;


use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\PostService;

class CustomBaseController extends Controller
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;

    }
}
