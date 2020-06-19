<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Carbon\Carbon;
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
        $data = $request->validate([
            'description' => 'required',
            'image' => '',
            'company_name' => 'required',
            'hours' => 'required',
            'title' => 'required',
            'salary' => ''
        ]);
        // Job::insert([
        //     'description' => $request['description'],
        //     'company_name' => $request['company_name'],
        //     'hours' => $request['hours'],
        //     'title' => $request['title'],
        //     'salary' => $request['salary']
        // ]);
        Job::insert($data);
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
