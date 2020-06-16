@extends ('layout.app')
@section ('content')

<div class="px-6 container mx-auto max-w-screen-lg flex flex-wrap-reverse justify-center">
    <div class="lg:mt-0 mt-12 lg:w-1/4 w-full lg:block flex">
        <div
            class="hidden lg:block ml-8 mb-4 h-12 w-12 lg:h-24 lg:w-24 rounded-full overflow-hidden shadow flex-shrink-0">
            <img class="h-24 w-auto"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Square_-_black_simple.svg/500px-Square_-_black_simple.svg.png"
                alt="">
        </div>
        <div class="w-full space-y-2 flex-shrink-0">
            <p class="lg:mb-0 mb-8 pb-2 font-bold text-lg md:border-0 border-b md:text-left text-center">Extra
                information</p>
            <p class="font-semibold">Salary
                <span class="text-sm font-semibold">
                    {{ $job->salary }}
                </span>
            </p>
            <p class="font-semibold">
                Hours
                <span class="text-sm font-semibold">
                    {{ $job->hours }}
                </span>
            </p>
            <p class="font-semibold">
                posted_at
                <span class="text-sm font-semibold">
                    {{ date('d-m-Y', strtotime($job->created_at)) }}
                </span>
            </p>
            <div>
                <a class="mt-10 px-4 py-2 inline-block flex-shrink-0 bg-indigo-400 text-white"
                    href="/apply/{{ $job->id }}">Soliciteer
                    nu</a>
            </div>
        </div>
    </div>
    <div class="lg:mr-10 max-w-2xl">
        <p class="pb-2 mb-2 lg:mb-8 font-semibold text-3xl lg:text-center lg:border-b">
            {{ $job->company_name }}
        </p>
        <p class="text-sm leading-relaxed">{{ $job->discription }}</p>
    </div>

</div>
@endsection
