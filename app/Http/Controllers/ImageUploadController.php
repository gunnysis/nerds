<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageUploadRequest;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('gallery.displayImage');
    }

    public function uploadForm()
    {
        return view('gallery.uploadImage');
    }

    public function upload(ImageUploadRequest $request)
    {
       $request->validate([
          'image' => 'required|mimes:jpg,png,jpeg,gif|max:2048'
       ]);

        $filename = $request->image->getClientOriginalName();

        $request->image->move(public_path('images/gallery'), $filename);

        // save uploaded image filename here to your database

        return back()
            ->with('success','Image uploaded successfully.')
            ->with('image', $filename);
    }


}
