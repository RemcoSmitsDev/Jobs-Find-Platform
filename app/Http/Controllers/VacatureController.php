<?php

namespace App\Http\Controllers;

use App\Vacature;
use Illuminate\Http\Request;

class VacatureController extends Controller
{
    public function index()
    {
        $AllVacature = Vacature::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('AllVacature'));
    }
    public function VacaturePage(Request $request)
    {
        $vacature = Vacature::find($request->id);
        return view('vacature.index', compact('vacature'));
    }

    public function apply()
    {
    }

    public function create()
    {
        return view('vacature.create');
    }

    public function store(request $request)
    {
        Vacature::insert($request->validate([
            'description' => 'required',
            'image' => '',
            'company_name' => 'required',
            'website' => 'required|url',
            'hours' => 'required',
            'title' => 'required',
            'salary' => ''
        ]));
        return redirect('/');
    }


    public function search(request $request)
    {
        $Vacatures = Vacature::query()->where('title', 'LIKE', "%{$request->q}%")->orWhere('description', 'LIKE', "%{$request->q}%")->get();

        $AllVacature = count($Vacatures) ? $Vacatures : Vacature::all();

        // if (count($AllVacature)) {
        //     return view('welcome', compact('AllVacature'));
        // } else {
        //     $AllVacature = Vacature::all();
        //     return view('welcome', compact('AllVacature'))->with('errorMessage', "We couldn't find a job....");
        // }


        return view('welcome', compact('AllVacature', 'request'));
        // return view('welcome', compact('AllVacature'))->with('errorMessage', "We couldn't find a job....");
    }
}
