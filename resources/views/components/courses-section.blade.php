<div class="min-h-screen">
    <div class="text-center text-2xl">
        Courses
    </div>

    <div class="flex flex-row flex-wrap gap-4 xl:gap-8 mt-10 justify-center">
        @for ($i = 0; $i < 12; $i++)  
        <div class="w-[400px] h-[500px] bg-indigo-900 text-center">
            course
        </div>
        @endfor
    </div>
</div>