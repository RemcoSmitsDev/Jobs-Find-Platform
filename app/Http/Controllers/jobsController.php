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

    public function search(request $request)
    {
        $q = $request->q;
        $Alljobs = Job::query()->where('title', 'LIKE', "%{$q}%")->get();
        $disc = Str::of($Alljobs->pluck('discription')->implode('[" "]'))->limit(130);

        if (count($Alljobs) > 0) {
            return view('welcome', compact('Alljobs', 'disc'));
        } else {
            $Alljobs = Job::all();
            $disc = Str::of($Alljobs->pluck('discription')->implode('[" "]'))->limit(130);
            return view('welcome', compact('Alljobs', 'disc'))->with('errorMessage', "We couldn't find a job....");
        }
    }
}
