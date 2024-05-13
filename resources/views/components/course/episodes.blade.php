<x-layout>
    <div class="mx-10 mt-5">
        <div class="mb-3">Episodes</div>
        @foreach ($fileUrls as $fileUrl)
            <a
               href="{{ $fileUrl['url'] }}"
               class="block px-3 hover:px-4 {{ $loop->even ? 'bg-gray-600' : 'bg-gray-700' }}">
                {{ $fileUrl['name'] }}
            </a>
        @endforeach
    </div>
</x-layout>
