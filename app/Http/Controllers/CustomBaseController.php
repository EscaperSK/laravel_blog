<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class CustomBaseController extends Controller
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;

    }
}
