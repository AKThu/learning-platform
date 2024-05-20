<x-layout>
    <div class="min-h-screen text-white">
        @if (session()->has('message'))
            <div
                 class="bg-green-200/85 text-gray-900 w-fit px-8 py-5 rounded-md absolute left-1/2 -translate-x-1/2 mt-5 drop-shadow-xl-green">
                {{ session()->get('message') }}
            </div>
        @endif
        <form method="POST" action="{{ Route('upload.video') }}" enctype="multipart/form-data"
              class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 border-2 border-dashed border-gray-600 rounded-md p-24">
            @csrf

            <input type="file" name="video" />
            <p>
                @if ($errors->has('video'))
                    {{ $errors->first('video') }}
                @endif
            </p>
            <input type="submit" name="click" />
        </form>
    </div>
</x-layout>
