@props(['videos'])

<div>
    <div class="text-center text-2xl">
        Courses
    </div>

    <div class="flex flex-row flex-wrap gap-4 xl:gap-8 mt-10 justify-center">
        @foreach ($videos as $video)
            <x-course.course-card :video="$video" />
        @endforeach
    </div>
</div>
