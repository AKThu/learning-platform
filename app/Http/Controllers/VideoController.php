<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function play()
    {
        // dd(Storage::disk('local')->get('example.txt'));
        // if (public_path('/storage/1.mp4')) {
        //     dd("File exists");
        // } else {
        //     dd("file does not exists");
        // }
        $videoPath = 'videos/dungeon-meshi/1.mp4';

        // if (!Storage::exists($videoPath)) {
        //     abort(404);
        // }

        // // Set appropriate headers
        // $headers = [
        //     'Content-Type' => 'video/mp4',
        // ];

        // // $url = 0;
        // $url = response()->stream(function () use ($videoPath) {
        //     readfile($videoPath);
        // }, 200, $headers);
        // // dd($url);
        return view('test')->with('url', $videoPath);
    }

    public function streamVideo()
    {
        $videoPath = storage_path('app/videos/dungeon-meshi/1.mp4'); // Adjust the path to your video file

        if (!Storage::exists($videoPath)) {
            abort(404);
        }

        // Set appropriate headers
        $headers = [
            'Content-Type' => 'video/mp4',
        ];

        $video = response()->stream(function () use ($videoPath) {
            readfile($videoPath);
        }, 200, $headers);

        // Return the video file as a streaming response
        return view('test'); //->with(compact('video'));
    }
}
