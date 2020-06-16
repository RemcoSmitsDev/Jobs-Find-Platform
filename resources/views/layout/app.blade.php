<html>

    <head>
        <title>App Name - Jobportal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="fixed top-0 left-0 w-full bg-black">
            <div class="px-6 py-2 w-full inline-flex items-center justify-between">
                <div class="text-white">
                    <a href="{{ route('AllJobs') }}">Mij applies</a>
                </div>
                <form class="w-auto" action="/search" method="post">
                    {{ csrf_field() }}
                    <div class="flex">
                        <input class="w-full max-w-md px-4 py-2 rounded-l" type="search" id="q" name="q"
                            placeholder="html, css, front-end, backend">
                        <button class="px-4 py-2 bg-indigo-400 text-white font-semibold" type="submit">Search</button>
                    </div>
                </form>
                <div class="text-white">
                    <a href="{{ route('AllJobs') }}">Mij applies</a>
                </div>
            </div>
        </div>
        <div class="my-20">
            @yield('content')
        </div>
    </body>

</html>
