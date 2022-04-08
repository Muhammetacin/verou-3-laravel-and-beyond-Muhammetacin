<nav class="bg-gray-100 border-gray-200 px-2 sm:px-4 py-2.5 mt-4 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-center items-center mx-auto">
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ request()->is('/') ? 'active-link-header' : 'link-header' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('getPosts') }}"
                       class="{{ request()->is('posts') ? 'active-link-header' : 'link-header' }}">Posts</a>
                </li>
                @guest
                <li>
                    <a href="{{ route('createAuthor') }}"
                       class="{{ request()->is('register_author') ? 'active-link-header' : 'link-header' }}">Register author</a>
                </li>
                <li>
                    <a href="{{ route('login') }}"
                       class="{{ request()->is('login') ? 'active-link-header' : 'link-header' }}">Login</a>
                </li>
                @endguest
                @auth
                    <li>
                        <a href="{{ route('createPost') }}"
                           class="{{ request()->is('create_post') ? 'active-link-header' : 'link-header' }}">Create post</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           class="link-header">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
