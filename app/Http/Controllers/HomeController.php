<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function show()
    {
        $directory = '/public/videos'; // The directory inside storage/app/public where your files are stored
        $files = Storage::directories($directory);

        $videos = [];
        foreach ($files as $file) {
            $name = pathinfo($file, PATHINFO_FILENAME);
            $videos[] = [
                'name' => $name,
                'url' => '/courses/' . $name . '/1'
            ];
        }

        return view('home', compact('videos'));
    }
}
