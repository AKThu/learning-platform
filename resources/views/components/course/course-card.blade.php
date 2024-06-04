@props(["video"])

<a href="{{ $video['url'] }}">
    <div class="w-[400px] h-auto rounded-xl border bg-slate-950 hover:bg-slate-900 border-accent p-5 hover:drop-shadow-xl-sky hover:relative hover:bottom-2 hover:left-2">
        <img src="logo.jpg" alt="" class="w-full h-auto">
        <div class="text-2xl font-semibold py-3 min-h-20">
            {{ $video['name'] }}
            {{-- Introduction to programming with JavaScript --}}
        </div>
        <hr class="border-dashed" />
        <div class="mt-3">
            <img src="icons/levels/Beginner.png" alt="beginner-level-icon" width="30px" height="auto" class="inline-block align-bottom"/> <span class="font-semibold text-lg">Beginner</span>
            <div class="mt-5">
                <div class="bg-yellow-400 text-gray-800 font-bold text-sm w-fit px-2 py-1 rounded-lg">
                    JavaScript
                </div>
            </div>
        </div>
    </div>
</a>