<x-layout>

    {{-- @dd($currentVideoInfo, $videos) --}}
    <div class="flex flex-row mt-5 px-5 w-full min-h-screen">
        {{-- video display --}}
        <div class="mx-5 w-2/3 h-auto drop-shadow-md">
            <video controls preload="metadata" width="100%" height="auto">
                <source src="{{ asset('storage/' . $currentVideoInfo['path']) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="mt-5">
                {{ $currentVideoInfo['title'] }} - Episode {{ $currentVideoInfo['ep'] }}
            </div>
        </div>

        {{-- Lesson selection --}}
        <div class="w-1/3">
            <div class="mb-3">Lessons</div>
            <div class="border-2 border-gray-600 rounded-sm drop-shadow-md">
                @foreach ($videos as $video)
                    {{-- @dd($video['name']) --}}
                    <a
                       href="/courses/{{ $currentVideoInfo['title'] }}/{{ $video['name'] }}"
                       class="block py-1 px-3 hover:px-4 {{ $loop->even ? 'bg-gray-700' : 'bg-gray-800' }}">
                        Lesson - {{ $video['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
