<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $authors = Author::get();

        if(isset($_GET['filter'])) {
            $posts = $this->filterPosts($_GET);
        }
        else {
            $posts = Post::get();
        }

        return view('posts', compact('posts', 'authors'));
    }

    public function filterPosts($get)
    {
        $authorName = $get['authorName'];

        if($authorName[0] === 'all') {
            return Post::get();
        }

        $authorsArr = [];
        $postsArr = [];

        foreach ($authorName as $author) {
            $authorsArr[] = Author::where('name', $author)->first();
        }

        foreach ($authorsArr as $author) {
            $postsArr = Post::where('author_id', $author->id)->get();
        }

        return $postsArr;
    }

    public function getPost(int $id)
    {
        $post = Post::where('id', $id)->first();
        clock($post);
        return view('post', compact('post'));
    }

    public function createPost(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'text' => 'required|string',
        ]);

        $authorSelected = Author::where('name', $request->author)->first();

         $post = Post::create([
            'author_id' => $authorSelected->id,
            'title' => $request->title,
            'description' => $request->description,
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
