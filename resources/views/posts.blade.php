@extends('layouts.app')

@section('posts')


    <div class="flex flex-col">
        <h2 class="my-10 text-5xl font-semibold text-center">Posts</h2>

        <div class="flex flex-row">
            <aside class="inline-block float-left -ml-80 basis-1/2" style="padding-left: 7rem; padding-top: 1rem;">
                <form action="" method="GET">
                    <label><strong>Authors</strong></label><br>

                    <input type="radio" id="all_authors" name="authorName[]" value="all"
                           @if (isset($_GET['authorName']))
                           checked
                        @endif
                    >
                    <label for="all_authors"> All</label><br>

                    @foreach($users as $author)
                        <input type="radio" id="{{ $author->id }}" name="authorName[]" value="{{ $author->name }}"
                               class="my-1.5"
                               @if (isset($_GET['authorName']) && in_array($author->name, $_GET['authorName']))
                               checked
                               @endif
                        >
                        <label for="{{ $author->id }}"> {{ $author->name }}</label><br>
                    @endforeach

                    <input type="submit" value="Filter" name="filter"
                           class="my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                </form>
            </aside>


            <div class="grid grid-cols-2 gap-3 my-6 basis-auto">

                @foreach($posts as $post)
                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('getPost', ['id' => $post->id]) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400">{{ $post->user->name }} &#8226; {{ $post->created_at->format('d-m-Y') }}</span>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->description }}</p>
                        <a href="{{ route('getPost', ['id' => $post->id]) }}"
                           class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

@endsection
