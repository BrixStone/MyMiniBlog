<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Basic Pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');


/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

// Display all posts
Route::get('/index', [PostController::class, 'index'])
    ->name('posts.index');

// Alternative URL for all posts
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.list');

// Show create form
Route::get('/create', [PostController::class, 'create'])
    ->name('posts.create');

// Store new post
Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

// Show edit form
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');

// Update post
Route::put('/posts/{id}', [PostController::class, 'update'])
    ->name('posts.update');

// Delete post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])
    ->name('posts.destroy');

// Show one post
Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');
