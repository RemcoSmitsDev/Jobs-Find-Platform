<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function create()
    {
        //job die je hebt gedaan
        return view('job.create');
    }

    public function store()
    {
        $request = request()->validate([
            'title' => 'required',
            'function' => 'required',
            'company_name' => 'required',
            'started_at' => 'required',
            'ended_at' => 'required',
        ]);
        Auth::User()->job()->create([
            'title' => $request['title'],
            'function' => $request['function'],
            'company_name' => $request['company_name'],
            'started_at' => $request['started_at'],
            'ended_at' => $request['ended_at'],
        ]);
        return redirect('/user/' . Auth::User()->id);
    }
}
