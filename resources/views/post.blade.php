@extends('layouts.app')

@section('post')

    <section class="container flex flex-col mx-auto justify-center w-2/5">
        <h2 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h2>
        <span
            class="text-sm text-gray-500 dark:text-gray-400">{{ $post->author }} &#8226; {{ $post->created_at->format('d-m-Y') }}</span>

        <p class="my-3 text-lg font-normal text-gray-700 dark:text-gray-400">{{ $post->text }}</p>
    </section>

@endsection
