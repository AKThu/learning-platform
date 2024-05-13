@props(['videos'])

<div class="min-h-screen">
    <div class="text-center text-2xl">
        Courses
    </div>

    <div class="flex flex-row flex-wrap gap-4 xl:gap-8 mt-10 justify-center">
        @foreach ($videos as $video)
            <a href="{{ $video['url'] }}">
                <div class="w-[400px] h-[500px] bg-indigo-900 text-center">
                    {{ $video['name'] }}
                </div>
            </a>
        @endforeach
    </div>
</div>
