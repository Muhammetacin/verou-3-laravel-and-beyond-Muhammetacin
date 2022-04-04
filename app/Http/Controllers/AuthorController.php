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

        clock('Author name: '. $author_name);
        clock('Author email: '. $author_email);

        $author = Author::create([
           'name' => $author_name,
            'email' => $author_email
        ]);

        return redirect('/');
    }
}
