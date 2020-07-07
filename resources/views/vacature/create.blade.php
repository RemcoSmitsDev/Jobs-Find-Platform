@extends ('layout.app')
@section ('content')

<div class="px-6 container mx-auto max-w-screen-md">
    <h1 class="text-2xl font-semibold">Create a new job</h1>
    <form class="flex flex-col space-y-4" action="{{ route('storenewVacature') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="image">Image (company logo)</label>
            <input id="image" class="px-4 py-2 border rounded" type="file" name="image" value="{{ old('image') }}"
                required>
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="title">Title</label>
            <input id="title" class="px-4 py-2 border rounded" type="text" name="title"
                placeholder="php laravel programmer gezocht" value="{{ old('title') }}" required>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="company_name">Company Name</label>
            <input id="company_name" class="px-4 py-2 border rounded" type="text" name="company_name"
                placeholder="test company" value="{{ old('company_name') }}" required>
            @error('company_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="website">Company Website</label>
            <input id="website" class="px-4 py-2 border rounded" type="text" name="website"
                placeholder="https://www.example.com" value="{{ old('website') }}" required>
            @error('website')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="salary">Salary</label>
            <input id="salary" class="px-4 py-2 border rounded" type="text" name="salary" placeholder="12.000">
            @error('salary')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="hours">Hours</label>
            <input id="hours" class="px-4 py-2 border rounded" type="text" name="hours" placeholder="32" required>
            @error('hours')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="hours">Description</label>
            <textarea class="px-4 py-2 border" name="description" cols="30" rows="10" placeholder="Description"
                required></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button class="px-4 py-2 rounded border" type="submit">Submit</button>
    </form>

</div>
@endsection
