<x-layout>

    <video width="320" height="240" controls>
        <source src="{{ asset($url) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    {{-- <iframe width="560" height="315" src="{{ $url }}" frameborder="0" allowfullscreen></iframe> --}}

</x-layout>