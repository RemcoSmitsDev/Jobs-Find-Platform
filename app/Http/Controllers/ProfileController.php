<?php

namespace App\Http\Controllers;

use App\User;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $currentSchool = $user->school->where('ended_at', 'heden')->first();
        $currentJob = $user->job->where('ended_at', 'heden')->first();
        return view('profiles.profile', compact('user', 'currentSchool', 'currentJob'));
    }
}
