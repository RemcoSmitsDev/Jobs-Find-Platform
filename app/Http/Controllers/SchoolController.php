<?php

namespace App\Http\Controllers;

use App\User;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    public function create(User $user)
    {
        return view('school.create');
    }

    public function store()
    {
        Auth::User()->School()->create(request()->validate([
            'opleiding' => 'required',
            'niveau' => 'required',
            'school_name' => 'required',
            'started_at' => 'required|date',
            'ended_at' => 'required'
        ]));
        return redirect('/user/' . Auth::User()->id);
    }
}
