<?php

namespace App\Http\Controllers;

use App\Models\Author;
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

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'text' => 'required|string',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'text' => $request->text,
        ]);

        session()->flash('success', "Your post with title '{$post->title}' has been created successfully.");

        return redirect('/');
    }

    public function getCreatePostView()
    {
        $authors = Author::get();
        return view('create_post', compact('authors'));
    }
}
