<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::get();
        return view('posts', compact('posts'));
    }

    public function createPost(Request $request)
    {
        clock($request);
        return view('create_author');
    }
}
