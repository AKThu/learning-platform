<x-layout>

    Courses
    {{-- @dd($url) --}}
    <video width="640" height="480" controls>
        <source src="{{ route('video.stream') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</x-layout>


