<?php

namespace App\Http\Controllers;

use App\Vacature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class VacatureController extends Controller
{
    public function index()
    {
        $AllVacature = Vacature::orderBy('created_at', 'DESC')->get();
        return view('vacature.vacatures', compact('AllVacature'));
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

    public function store()
    {
        $request = request()->validate([
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_name' => 'required',
            'website' => 'required|url',
            'hours' => 'required',
            'title' => 'required',
            'salary' => ''
        ]);
        $imagePath = request('image')->store('vacatures', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        Vacature::insert([
            'description' => $request['description'],
            'image' => $imagePath,
            'company_name' => $request['company_name'],
            'website' => $request['website'],
            'hours' => $request['hours'],
            'title' => $request['title'],
            'salary' => $request['salary']
        ]);
        return redirect('/vacatures');
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


        return view('vacature.vacatures', compact('AllVacature', 'request'));
        // return view('welcome', compact('AllVacature'))->with('errorMessage', "We couldn't find a job....");
    }
}
