<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/posts', [PostController::class, 'getAllPosts'])->name('getPosts');
Route::get('/posts/{id}', [PostController::class, 'getPost'])->name('getPost');

Route::get('/create_post', [PostController::class, 'getCreatePostView'])->name('createPost')->middleware('auth');
Route::post('/create_post', [PostController::class, 'createPost'])->name('createPost')->middleware('auth');

Route::get('/register_author', [AuthorController::class, 'getCreateView'])->name('createAuthor')->middleware('guest');
Route::post('/register_author', [AuthorController::class, 'createAuthor'])->name('createAuthor')->middleware('guest');

Route::get('/login', [AuthorController::class, 'getLoginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthorController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/logout', [AuthorController::class, 'logout'])->name('logout')->middleware('auth');
