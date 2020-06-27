<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class jobsController extends Controller
{

    public function create()
    {
        //job die je hebt gedaan
        return view('jobs.create');
    }

    public function store(request $request)
    {
        Job::insert($request->validate([
            'description' => 'required',
            'image' => '',
            'company_name' => 'required',
            'hours' => 'required',
            'title' => 'required',
            'salary' => ''
        ]));

        return redirect('/' . Auth::User()->id);
    }
}
