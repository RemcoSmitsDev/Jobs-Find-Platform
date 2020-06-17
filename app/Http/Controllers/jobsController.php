<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class jobsController extends Controller
{
    public function index()
    {
        $Alljobs = Job::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('Alljobs'));
    }
    public function jobPage(Request $request)
    {
        $job = Job::find($request->id);
        return view('jobs.job', compact('job'));
    }

    public function apply()
    {
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(request $request)
    {
        // dd($request);
        Job::insert([
            'discription' => $request['discription'],
            'company_name' => $request['company_name'],
            'hours' => $request['hours'],
            'title' => $request['title'],
            'salary' => $request['salary']
        ]);
        return redirect('/');
    }


    public function search(request $request)
    {
        $q = $request->q;
        $Alljobs = Job::query()->where('title', 'LIKE', "%{$q}%")->get();

        if (count($Alljobs) > 0) {
            return view('welcome', compact('Alljobs'));
        } else {
            $Alljobs = Job::all();
            return view('welcome', compact('Alljobs'))->with('errorMessage', "We couldn't find a job....");
        }
    }
}
