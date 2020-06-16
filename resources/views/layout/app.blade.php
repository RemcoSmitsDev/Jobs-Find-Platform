<html>

    <head>
        <title>App Name - Jobportal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="px-6 fixed flex items-center justify-between top-0 w-full h-16 bg-black">
            <div class="text-white">
                <a href="{{ route('AllJobs') }}">Home</a>
            </div>
            <div class="text-white">
                <a href="{{ route('AllJobs') }}">Mij profile</a>
            </div>
            <div class="text-white">
                <a href="{{ route('AllJobs') }}">Mij applies</a>
            </div>
        </div>
        <div class="my-20">
            @yield('content')
        </div>
    </body>

</html>
