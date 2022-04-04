@extends('layouts.app')

@section('demo')
    <h1>Hello laravel</h1>

    <a href="{{ route('getPosts') }}">Get Posts</a>
    <a href="{{ route('createPost') }}">Create Post</a>
@endsection
