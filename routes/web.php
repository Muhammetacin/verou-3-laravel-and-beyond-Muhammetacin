<?php

use App\Http\Controllers\AuthorController;
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

Route::get('/create_post', [PostController::class, 'getCreatePostView'])->name('createPost');
Route::post('/create_post', [PostController::class, 'createPost'])->name('createPost');

Route::get('/create_author', [AuthorController::class, 'getCreateView'])->name('createAuthor');
Route::post('/create_author', [AuthorController::class, 'createAuthor'])->name('createAuthor');
