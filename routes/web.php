<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/update/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');

Route::get('/see/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show_login'])->name('show_login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

