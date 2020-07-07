@extends ('layout.app')
@section ('content')

<div class="px-6 container mx-auto max-w-screen-md">
    <h1 class="text-2xl font-semibold">Add new job / stage</h1>
    <form class="flex flex-col space-y-4" action="{{ route('storenewJob') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-1 flex flex-col font-semibold">
            <label class="mt-1 block" for="title">
                Type baan
            </label>
            <div class="block relative">
                <select class="pl-3 pr-4 py-2 block w-full appearance-none border rounded" name="title" id="title">
                    <option value="Full Time">Full Time</option>
                    <option value="Parttime">Parttime</option>
                    <option value="Zzp'er">Zzp'er</option>
                    <option value="Stage">Stage</option>
                </select>
                <div class="absolute px-4 inset-y-0 right-0 flex items-center pointer-events-none text-gray-500">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>

            </div>
            @error('opleiding')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="function">Function</label>
            <input id="function" class="px-4 py-2 border rounded" type="text" name="function"
                placeholder="backend / frontend / leader">
            @error('function')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="company_name">Company Name</label>
            <input id="company_name" class="px-4 py-2 border rounded" type="text" name="company_name"
                placeholder="Company Name">
            @error('company_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="started_at">Started At</label>
            <input id="started_at" class="px-4 py-2 border rounded" type="date" name="started_at">
            @error('started_at')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="ended_at_input">Ended At (Check the button if you
                didn't ended
                your school yet)
            </label>
            <div class="relative">
                <input id="ended_at_input" class="px-4 py-2 border rounded w-full" type="date" name="ended_at">
                <input class="hidden" type="checkbox" value="heden" id="ended_at" name="ended_at" />
                <label
                    class="absolute py-2 px-4 right-0 top-0 rounded-r border-transparent border bg-gray-300 cursor-pointer"
                    for="ended_at">Tot
                    heden</label>
            </div>
            @error('ended_at')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button class="px-4 py-2 rounded border" type="submit">Submit</button>
    </form>

</div>
@endsection
