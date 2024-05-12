<div class="sticky top-0 w-full">
    <nav class="flex flex-row justify-between px-8 py-4 bg-gray-900 text-gray-50 drop-shadow-md">
        <a 
            href="/"
            class="text-2xl font-medium"
        >
            Unnamed Learn
        </a>
        <div>
            @auth
                <form action="logout" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class=""
                    >
                        Logout
                    </button>
                </form>
            @else
                <div class="space-x-4">
                    <a
                        href="/login"
                    >
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