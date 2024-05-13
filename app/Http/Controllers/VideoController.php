<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function watch($title, $episode)
    {
        $directory = '/public/videos/' . $title; // The directory inside storage/app/public where your files are stored
        $files = Storage::files($directory);

        $videos = [];
        foreach ($files as $file) {
            $videos[] = [
                'name' => pathinfo($file, PATHINFO_FILENAME)
            ];
        }

        $currentVideoInfo = [
            'path' => 'videos/' . $title . '/' . $episode . '.mp4',
            'title' => $title,
            'ep' => $episode
        ];

        return view('components.course.course', compact('currentVideoInfo', 'videos'));
    }
}
