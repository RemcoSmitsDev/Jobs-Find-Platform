@extends ('layout.app')
@section ('content')

<div class="space-y-4 container mx-auto max-w-screen-sm flex flex-col justify-center">
    @foreach($Alljobs as $job)
    <a href="/job/{{ $job->id }}" class="px-4 py-2 h-32 w-full flex items-center md:rounded-lg shadow overflow-x-auto">
        <div class="mr-6 md:mr-10 h-12 w-12 lg:h-24 lg:w-24 rounded-full overflow-hidden shadow flex-shrink-0">
            <img class="h-full w-auto"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Square_-_black_simple.svg/500px-Square_-_black_simple.svg.png"
                alt="">
        </div>
        <div class="flex-1 overflow-hidden">
            <p class="mb-1 font-semibold truncate">{{ $job->title }} <span class="text-sm">by
                    {{ $job->company_name }}</span></p>
            <p class="text-sm leading-relaxed lg:break-words truncate">{{ $disc }}</p>
            <div class="space-x-2 flex text-sm">
                <p>Salary: {{ $job->salary }}</p>
                <p>Hours: {{ $job->hours }}</p>
            </div>
        </div>

    </a>
    @endforeach
</div>
@endsection
