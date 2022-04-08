<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
            'name' => 'required|string|max:25',
            'email' => 'required|email|unique:authors,email|max:50',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);

        $authorCredentials = User::create([
            'name' => $author_name,
            'email' => $author_email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($authorCredentials);

        return redirect('/')->with('success', "Welcome, {$authorCredentials->name}. Start writing your own blog now!");
    }

    public function getLoginView()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        clock($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You\'re logged in successfully.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You logged out.');
    }
}
