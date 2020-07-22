<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function create(User $user)
    {
        return view('project.create');
    }

    public function store()
    {
        $imagePath = request('image')->store('Projects', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        $request = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image' => 'required|image'
        ]);
        Auth::User()->project()->create([
            'title' => $request['title'],
            'description' => $request['description'],
            'url' => $request['url'],
            'image' => $imagePath,
        ]);
        return redirect('/user/' . Auth::User()->id);
    }
}
