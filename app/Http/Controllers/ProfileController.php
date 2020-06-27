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
        return view('profiles.profile', compact('user'));
    }
}
