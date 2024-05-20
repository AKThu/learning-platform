<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function watch(Request $request, $title, $episode)
    {
        // dd($request);
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

    public function upload_page()
    {
        if (!Gate::allows('upload')) {
            abort(403);
        }

        return view('components.course.upload');
    }

    public function upload_video(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|max:2048000'
        ]);

        $file = $request->file('video');

        if ($file) {
            $path = $file->store('videos', 'public');

            $file->move('upload', $file->getClientOriginalName());
            $file_name = $file->getClientOriginalName();

            $insert = new Video();
            $insert->video = $file_name;
            $insert->save();

            return back()->with('message', "Uploaded successfully!")->with('path', $path);
        }

        return back()->with('error', 'Video upload failed');
    }
}
