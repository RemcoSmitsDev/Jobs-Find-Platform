@extends ('layout.app')
@section ('content')

<div class="space-y-4 container mx-auto max-w-screen-sm flex flex-col justify-center">
    @foreach($Alljobs as $job)
    <a href="/job/{{ $job->id }}" class="px-4 py-6 lg:h-32 flex items-center md:rounded-lg shadow">
        <div class="mr-6 md:mr-10 h-12 w-12 lg:h-24 lg:w-24 rounded-full overflow-hidden shadow flex-shrink-0">
            <img class="h-full w-auto"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1200px-Vue.js_Logo_2.svg.png"
                alt="">
        </div>
        <div class="flex-1 -my-4 space-y-2 flex flex-col justify-between overflow-hidden">
            <div>
                <div class="flex items-center justify-between truncate">
                    <p class="mb-1 lg:text-lg font-semibold">{{ $job->title }}</p>
                    <p class="hidden lg:block text-sm lg:mr-0 mr-2">{{ $job->created_at->diffForHumans() }}</p>
                </div>
                <p class="text-sm leading-relaxed lg:break-words truncate">{{ $job->discription }}</p>
            </div>
            <div class="flex justify-between text-sm">
                <div class="lg:space-x-2 flex">
                    <p class="hidden lg:block">Salary: {{ $job->salary }}</p>
                    <p class="hidden lg:block lg:mr-0 mr-2">Hours: {{ $job->hours }}</p>
                    <span class="text-sm mr-2 font-semibold">by {{ $job->company_name }}</span>
                    <p class="block lg:hidden text-sm lg:mr-0 mr-2">{{ $job->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>

    </a>
    @endforeach
</div>
@endsection
