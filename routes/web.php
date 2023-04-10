<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/update/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');

Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
