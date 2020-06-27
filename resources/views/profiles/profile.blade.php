@extends('layout.app')

@section('content')
<div class="-mt-6 px-4 container max-w-screen-lg mx-auto">
    <div class="py-2 space-x-10 flex items-center w-full border-b">
        <div class="space-x-2 flex items-center">
            <img class="h-10 w-10 rounded-full"
                src="{{ $user->image ? $user->image : 'https://www.pedicurepraktijkpapendrecht.nl/webshop/images/remco.JPG' }}"
                alt="{{ $user->name }}">
            <span class="text-lg font-semibold">{{ $user->name }}</span>
        </div>
        <a href="#projects" class="space-x-2 flex items-center">
            <span class="text-sm font-semibold"><span>Projects: </span>{{ $user->project->count() }}</span>
        </a>
    </div>
    <div id="projects" class="mt-10">
        <div class="max-w-xl">
            <div class="mb-2">
                <h1 class="font-semibold text-2xl">Persoonlijke informatie</h1>
            </div>
            <div class="grid grid-cols-2">

                <div id="1" class="space-y-2 flex flex-col font-semibold">
                    <span>
                        Telefoon nummer
                    </span>
                    <span>
                        Email adres
                    </span>
                    <span>
                        Geboorte datum
                    </span>
                    <span>
                        Huidige baan
                    </span>
                    <span>
                        Huidige opleiding
                    </span>
                </div>
                <div id="2" class="space-y-3 flex flex-col text-sm">
                    <span>
                        <a href="tel:{{ $user->phone }}">{{ $user->phone }}</a>
                    </span>
                    <span>
                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </span>
                    <span>
                        {{ $user->date_of_birth }}
                    </span>
                    <span>
                        {{ $user->profile->current_job ? $user->profile->current_job : 'Geen' }}
                    </span>
                    <span>
                        {{ $user->profile->current_school ? $user->profile->current_school : 'Geen' }}
                    </span>
                </div>
                <p class="mt-4">
                    dit is een bescrijving over jezelf
                </p>
            </div>
        </div>
        <div class="mt-10 lg:flex w-full lg:space-y-0 space-y-10 lg:space-x-10">
            <div class="md:max-w-sm w-full space-y-4">
                <div class="space-x-1 flex items-center">
                    <h1 class="font-bold text-lg">Scholen</h1>

                    @auth
                    @if(Auth::user()->id == $user->id)
                    <a href="{{ route('addSchool') }}" class="-mb-1 h-4 w-4">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    @endif
                    @endauth
                </div>
                <div class="h-64 space-y-4 overflow-y-auto">
                    @foreach($user->school as $school)
                    <div class="px-4 py-2 w-full border rounded-lg">
                        <div class="">
                            <h3 class="font-semibold truncate">{{ $school->opleiding }} - {{ $school->niveau }}</h3>
                        </div>
                        <div class="space-x-6 flex items-baseline justify-between">
                            <div class="truncate">
                                <p class="text-sm">{{ $school->school_name }}</p>
                            </div>
                            <div class="flex flex-shrink-0 space-x-1 text-sm">
                                <p>{{ $school->started_at }}</p>
                                <span>tot</span>
                                <p>{{ $school->ended_at }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:max-w-lg">
                <div class="space-x-1 flex items-center">
                    <h1 class="font-bold text-lg">Projecten</h1>
                    @auth
                    @if(Auth::user()->id == $user->id)
                    <a href="{{ route('addProject') }}" class="-mb-1 h-4 w-4">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    @endif
                    @endauth
                </div>

                <div id="projects" class="py-4 space-x-4 flex overflow-x-auto">
                    @foreach($user->project as $project)
                    <button type="button">
                        <div class="relative flex flex-shrink-0">
                            <div class="relative w-48 h-48 overflow-hidden">
                                <img class="w-ful h-full" src="/storage/{{ $project->image }}"
                                    alt="{{ $project->title }}">
                            </div>
                            <div class="inset-0 absolute bg-black bg-opacity-50 z-10">
                                <div class="px-2 h-full flex items-center justify-center">
                                    <p class="font-semibold text-white truncate">{{ $project->title }}</p>
                                </div>
                            </div>
                        </div>
                    </button>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
