@extends ('layout.app')
@section ('content')

<div class="px-6 container mx-auto max-w-screen-md">
    <h1 class="text-2xl font-semibold">Add new school</h1>
    <form class="flex flex-col space-y-4" action="{{ route('storenewSchool') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="opleiding">Title</label>
            <input id="opleiding" class="px-4 py-2 border rounded" type="text" name="opleiding" placeholder="Opleiding">
            @error('opleiding')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="niveau">Niveau</label>
            <input id="niveau" class="px-4 py-2 border rounded" type="text" name="niveau" placeholder="Niveau">
            @error('niveau')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="school_name">School Name</label>
            <input id="school_name" class="px-4 py-2 border rounded" type="text" name="school_name"
                placeholder="School Name">
            @error('school_name')
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
            <label class="font-semibold" for="ended_at">Ended At (Check the button if you
                didn't ended
                your school yet)
                <input type="checkbox" value="heden" id="ended_at" name="ended_at"></label>

            <input id="ended_at" class="px-4 py-2 border rounded" type="date" name="ended_at">
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
