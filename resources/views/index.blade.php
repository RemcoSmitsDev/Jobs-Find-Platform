<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Jop Portal - Homepage</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body class="text-gray-700">
        <div class="bg-indigo-400 text-white font-semibold">
            <div class="lg:px-0 px-4 container mx-auto max-w-screen-lg">
                <div class="py-4 flex items-center justify-between">
                    <h1 class="text-xl italic mr-8">Job Portal</h1>
                    <div class="space-x-4 flex items-center">
                        @if(Auth()->check())
                        <a class="inline-block px-4 py-1 border border-white rounded"
                            href="{{ route('AllVacature') }}">Naar
                            vacatures</a>
                        @else
                        <a class="text-yellow-300" href="{{ route('register') }}">Sign up</a>
                        <a class="inline-block px-4 py-1 border border-white rounded"
                            href="{{ route('login') }}">Login</a>
                        @endif
                    </div>

                </div>
                <div class="pt-20">
                    <div class="mt-12">
                        <div
                            class="flex flex-no-wrap flex-shrink-0 justify-center -mt-10 pb-8 text-2xl md:text-3xl lg:text-4xl">
                            <h1>Your portfolio for</h1>
                            <h1 class="pl-3 -ml-px text-gray-700" id="write"></h1>
                        </div>
                        <div class="mt-12 -mb-12 flex justify-center">
                            <img class="-mb-2 w-auto h-64" src="{{ url('/img/online_cv.svg') }}" alt="Portfolio image">
                        </div>
                    </div>
                    <div class="px-4 space-y-16 lg:mx-0 h-full pt-16 mt-2 -mx-4 bg-white text-gray-700">
                        <h1 class="-mt-4 text-center text-2xl">We are making finding a job easier</h1>
                        <div class="mt-12 lg:space-y-0 space-y-10 lg:space-x-20 lg:flex justify-center">
                            <div
                                class="space-y-4 px-4 py-2 flex flex-col items-center lg:rounded-lg shadow hover:shadow-lg">
                                <p>make a account</p>
                            </div>
                            <div
                                class="space-y-4 px-4 py-2 flex flex-col items-center lg:rounded-lg shadow hover:shadow-lg">
                                <p>make your digital cv</p>
                                <img class="h-auto w-48" src="{{ url('/img/portfolio.svg') }}"
                                    alt="Make your online cv">
                            </div>

                            <div
                                class="space-y-4 px-4 py-2 flex flex-col items-center lg:rounded-lg shadow hover:shadow-lg">
                                <p>share your cv</p>
                                <img class="h-auto w-48" src="{{ url('/img/share.svg') }}" alt="Share your cv">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script type="text/javascript">
        var app = document.getElementById('write');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('development')
            .pauseFor(2500)
            .deleteAll()
            .start();
        </script>
    </body>

</html>
