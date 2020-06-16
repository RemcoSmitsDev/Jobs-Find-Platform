<html>

    <head>
        <title>App Name - Jobportal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>

    <body class="relative">
        <div class="fixed top-0 left-0 w-full bg-black">
            <div class="px-6 pt-4 -mt-px w-full flex items-center">
                <div class="hidden text-white">
                    <a href="{{ route('AllJobs') }}">Mij applies</a>
                </div>
                <div class="mx-auto">
                    <form class="flex items-center" action="/search" method="post">
                        {{ csrf_field() }}
                        <input class="w-64 max-w-md px-4 py-2 rounded-l" type="search" name="q"
                            placeholder="html, css, front-end, backend">
                        <button class="px-4 py-2 bg-indigo-400 text-white font-semibold rounded-r"
                            type="submit">Search</button>
                    </form>
                </div>
                <div class="hidden text-white">
                    <a href="{{ route('AllJobs') }}">Mij applies</a>
                </div>
            </div>
        </div>
        <div class="block lg:hidden fixed bottom-0 left-0 w-full bg-black">
            <div class="px-6 py-6 w-full flex items-center justify-between text-white font-semibold">
                <div>
                    <a href="{{ route('AllJobs') }}">Home</a>
                </div>
                <div>
                    <a href="{{ route('AllJobs') }}">Profile</a>
                </div>
                <div>
                    <a href="{{ route('AllJobs') }}">Mij applies</a>
                </div>
            </div>
        </div>
        @if(!empty($errorMessage))
        <script>
        setTimeout(function() {
            $('#fade-message').fadeOut();
        }, 3000);
        </script>
        <div class="md:mb-10 md:mr-10 fixed bottom-0 right-0 w-full max-w-md bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded"
            role="alert" id="fade-message">
            <strong class="font-bold">Holy smokes!</strong>
            <span class="block sm:inline">{{ $errorMessage }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
        @endif
        <div class="mt-24 mb-20">
            @yield('content')
        </div>
    </body>

</html>
