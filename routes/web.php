<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.crate');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');

