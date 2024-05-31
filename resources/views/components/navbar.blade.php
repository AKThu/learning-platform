<div class="sticky top-0 w-full z-50">
    <nav class="flex flex-row justify-between px-8 py-4 bg-gray-900 text-gray-50 drop-shadow-md">
        <div class="text-2xl font-medium w-60 mx-5">
            <a href="/">
                Code2Code
            </a>
        </div>
        <div class="flex flex-row gap-5">
            <div>
                <a href="">Home</a>
            </div>
            <div>
                <a href="">Courses</a>
            </div>
            <div>
                <a href="">Blogs</a>
            </div>
        </div>
        <div class="min-w-60 text-right mx-5">
            @auth
                <div id="user-menu-toggle" class="cursor-pointer">
                    <div>{{ Auth::user()->name }}</div>
                </div>
                <form action="logout" method="POST" id="user-menu" class="hidden absolute right-16 py-2 px-4 mt-3 rounded-md bg-gray-800 ">
                    @csrf
                    <button
                            type="submit"
                            class="">
                        Logout
                    </button>
                </form>
            @else
                <div class="space-x-4">
                    <a
                       href="/login">
                        Login
                    </a>
                    <a href="/register">
                        Register
                    </a>
                </div>
            @endauth
        </div>
    </nav>
</div>
