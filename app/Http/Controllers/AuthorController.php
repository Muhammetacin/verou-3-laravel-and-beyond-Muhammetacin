<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getCreateView()
    {
        return view('create_author');
    }

    public function createAuthor(Request $request)
    {
        $author_name = $request->name;
        $author_email = $request->email;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $author = Author::create([
           'name' => $author_name,
            'email' => $author_email
        ]);

        session()->flash('success', "{$author->name} has been registered as a new author.");

        return redirect('/');
    }
}
