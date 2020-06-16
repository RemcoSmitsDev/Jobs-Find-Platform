<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class jobsController extends Controller
{
    public function index()
    {
        $Alljobs = Job::all();
        $disc = Str::of($Alljobs->pluck('discription')->implode('[" "]'))->limit(130);
        return view('welcome', compact('Alljobs', 'disc'));
    }
    public function jobPage(Request $request)
    {
        $job = Job::find($request->id);
        return view('job', compact('job'));
    }

    public function apply()
    {
    }
}
