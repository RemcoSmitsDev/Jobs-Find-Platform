<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>RS webdevelopment - Jop Portal</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body class="relative">
        <div class="fixed top-0 left-0 w-full bg-black z-20">
            <div class="px-4 py-4 -mt-px w-full flex items-center">
                <div class="max-w-screen-lg mx-auto flex-1 flex items-center justify-center lg:justify-between">
                    <div class="hidden lg:block px-4">
                        <a class="text-2xl text-white" href="{{ route('AllVacature') }}">Job Portal</a>
                    </div>
                    <form class="inline-flex items-center" action="/search" method="post">
                        {{ csrf_field() }}
                        <span class="relative mr-40 min-w-full md:max-w-lg focus:outline-none text-gray-600">
                            <span class="absolute inset-y-0 left-0 pl-3 py-2">
                                <button type="submit">
                                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                        <path class="heroicon-ui"
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </button>
                            </span>
                            <input
                                class="border-2 border-gray-300 bg-white font-semibold leading-5 rounded-lg py-2 w-full pl-12 pr-5 text-md"
                                autocomplete="off" name="q" placeholder="{{ $request->q ?? 'Zoek naar een baan' }}">
                        </span>
                    </form>
                    @guest
                    <div class="hidden lg:block px-6">
                        <a class="text-2xl text-white" href="{{ route('login') }}">Login</a>
                    </div>
                    <div class="hidden lg:block px-6">
                        <a class="text-2xl text-white" href="{{ route('register') }}">Registreer</a>
                    </div>
                    @else
                    <div class="hidden lg:block px-6">
                        <a class="text-2xl text-white" href="/user/{{ Auth::user()->id }}">Profile</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="block lg:hidden fixed bottom-0 left-0 w-full bg-black z-20">
            <div class="px-6 py-6 w-full flex items-center justify-between text-white font-semibold">
                <div>
                    <a href="{{ route('AllVacature') }}">Home</a>
                </div>
                @guest
                <div>
                    <a href="{{ route('login') }}">Login</a>
                </div>
                <div>
                    <a href="{{ route('register') }}">Registreer</a>
                </div>
                @else
                <div>
                    <a href="/user/{{ Auth::user()->id }}">Profile</a>
                </div>
                <div>
                    <a href="{{ route('AllVacature') }}">Mij applies</a>
                </div>
                @endif
            </div>
        </div>
        @if(!empty($errorMessage))
        <script>
        setTimeout(function() {
            $('#fade-message').fadeOut();
        }, 3000);
        </script>
        <div class="md:mb-10 md:mr-10 fixed bottom-0 right-0 w-full max-w-md bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded z-50"
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
        </li>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
    </body>

</html>
