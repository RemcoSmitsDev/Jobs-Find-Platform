@extends ('layout.app')
@section ('content')

<div class="px-6 container mx-auto max-w-screen-md">
    <h1 class="text-2xl font-semibold">Create a new project</h1>
    <form class="flex flex-col space-y-4" action="{{ route('storenewProject') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="title">Title</label>
            <input id="title" class="px-4 py-2 border rounded" type="text" name="title" placeholder="Pedicure Webshop">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="url">URL</label>
            <input id="url" class="px-4 py-2 border rounded" type="text" name="url" placeholder="https://example.com">
            @error('url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="image">Image</label>
            <input id="image" class="px-4 py-2 border rounded" type="file" name="image">
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="space-y-1 flex flex-col">
            <label class="font-semibold" for="description">Description</label>
            <textarea id="description" class="px-4 py-2 border rounded" name="description"
                placeholder="Explain what you have done"></textarea>
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
