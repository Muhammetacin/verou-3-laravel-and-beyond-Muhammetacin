<nav class="bg-gray-100 border-gray-200 px-2 sm:px-4 py-2.5 mt-4 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-center items-center mx-auto">
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 pr-4 pl-3 text-white text-xl bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('getPosts') }}" class="block py-2 pr-4 pl-3 text-xl text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Posts</a>
                </li>
                <li>
                    <a href="{{ route('createAuthor') }}" class="block py-2 pr-4 pl-3 text-xl text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register author</a>
                </li>
                <li>
                    <a href="{{ route('createPost') }}" class="block py-2 pr-4 pl-3 text-xl text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Create post</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-xl text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
