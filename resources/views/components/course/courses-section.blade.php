<div class="min-h-screen">
    <div class="text-center text-2xl">
        Courses
    </div>

    <div class="flex flex-row flex-wrap gap-4 xl:gap-8 mt-10 justify-center">
        <a href="/courses/dungeon-meshi/1">
            <div class="w-[400px] h-[500px] bg-indigo-900 text-center">
                Dungeon Meshi
            </div>
        </a>
        <a href="/courses/yuru-camp-season-3/1">
            <div class="w-[400px] h-[500px] bg-indigo-900 text-center">
                Yuru Camp - Season 3
            </div>
        </a>
        @for ($i = 0; $i < 10; $i++)
            <div class="w-[400px] h-[500px] bg-indigo-900 text-center">
                course
            </div>
        @endfor
    </div>
</div>
