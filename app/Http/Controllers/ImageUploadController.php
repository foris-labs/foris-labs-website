<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('img/blog_images', 'public');

            return response()->json(['location' => Storage::url($path)]);
        }

        return response()->json(['error' => 'Image upload failed'], 400);
    }
}
